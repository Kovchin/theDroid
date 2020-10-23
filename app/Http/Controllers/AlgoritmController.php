<?php

namespace App\Http\Controllers;

use App\Algoritm;
use App\AlgoritmAnswer;
use App\AlgoritmQuestion;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;
use Symfony\Component\Console\Question\Question;

class AlgoritmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $algoritms = Algoritm::all();


        return view('Algoritm/index', compact('algoritms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/algoritm/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $algoritm = new Algoritm([
            'name' => $request->name,
            'shortName' => $request->shortName,
            'description' => $request->description
        ]);

        $algoritm->save();

        return redirect("/algoritms/{$algoritm->id}/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $request->session()->flush();

        $algoritm = Algoritm::findOrFail($id);

        $question = $algoritm->questions()->firstOrFail();

        return redirect('/algoritms/' . $id . '/' . $question->id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $algoritm = Algoritm::findOrFail($id);

        $questions = $algoritm->questions->all();

        //dd($questions);

        return view('algoritm/edit', compact('algoritm', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $algoritm = Algoritm::findOrFail($id)->update(
            ['name' => $request->name,
                'shortName' => $request->shortName,
                'description' => $request->description
            ]);

        return redirect('/algoritms/' . $id . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Algoritm::destroy($id);

        return redirect('/algoritms');
    }

    /**
     * @param Request $request
     * @param $id_algoritms
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addDefaultQuestions(Request $request, $id_algoritms)
    {

        $algoritm = Algoritm::findOrFail($id_algoritms);

        //Заводим записи только если их нет в базе данных
        if ($algoritm->questions->count() <= 0) {
            for ($i = 1; $i < $request->addCount + 1; $i++) {
                $algoritm->questions()->create(['question' => 'Вопрос № ' . $i]);
            }
        }

        return redirect('/algoritms/' . $id_algoritms . '/edit ');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addDefaultResponses(Request $request)
    {
        $question = AlgoritmQuestion::findOrFail($request->id_questions);

        if ($question->answers->count() <= 0) {
            for ($i = 1; $i < $request->addCount + 1; $i++) {
                $question->answers()->create(['answer' => 'Ответ № ' . $i, '']);
            }
        }

        return redirect('/algoritms/' . $request->id_algoritms . '/edit ');
    }

    /**
     * @param $id_algoritm
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addSingleQuestion($id_algoritm)
    {
        $question = Algoritm::findOrFail($id_algoritm)->questions()->create(['question' => 'Новый вопрос']);

        return redirect('/algoritms/' . $id_algoritm . '/edit');
    }

    /**
     * @param $id_algoritm
     * @param $id_question
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addSingleeAnswer($id_algoritm, $id_question)
    {

        $algoritmQuestion = AlgoritmQuestion::findOrFail($id_question)->answers()->create(['answer' => 'Новый ответ']);

        return redirect('/algoritms/' . $id_algoritm . '/edit');
    }

    /**
     * @param $id_algoritm
     * @param $id_question
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteQuestion($id_algoritm, $id_question)
    {
        AlgoritmQuestion::destroy($id_question);

        return redirect('/algoritms/' . $id_algoritm . '/edit');
    }

    /**
     * @param $id_algoritm
     * @param $id_response
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function deleteAnswer($id_algoritm, $id_response)
    {
        AlgoritmAnswer::destroy($id_response);

        return redirect('/algoritms/' . $id_algoritm . '/edit');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateQuestion(Request $request)
    {
        AlgoritmQuestion::findOrFail($request->id_question)->update(
            [
                'question' => $request->question,
            ]);

        return redirect('/algoritms/' . $request->id_algoritm . '/edit');
    }

    public function updateAnswer(Request $request)
    {
        AlgoritmAnswer::findOrFail($request->answer_id)->update(
            [
                'answer' => $request->answer,
                'link_question_id' => $request->link_question_id
            ]);

        return redirect('/algoritms/' . $request->id_algoritm . '/edit');
    }

    public function showAlgoritm($id_algoritm, $id_question, Request $request)
    {

        $algoritm = Algoritm::findOrFail($id_algoritm);
        $questions = $algoritm->questions;
        $question = AlgoritmQuestion::findOrFail($id_question);
        $answers = $question->answers;

        $request->session()->put('id_algoritm', $id_algoritm);
        $request->session()->push('id_question', $id_question);
        $request->session()->push('question', $question->question);

        return view('algoritm/show', compact('algoritm', 'question', 'answers', 'request' , 'questions'));
    }


}
