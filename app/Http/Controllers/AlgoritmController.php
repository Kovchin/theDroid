<?php

namespace App\Http\Controllers;

use App\Algoritm;
use App\AlgoritmQuestion;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryCommand;

class AlgoritmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $mainQuestions = AlgoritmQuestion::all()->where('root_question_id', 3);
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

//        dd($algoritm);

        $algoritm->save();

        return redirect("/algoritms/{$algoritm->id}/edit");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $algoritm = Algoritm::findOrFail($id);

        $questions = $algoritm->questions;

        return view('algoritm/show', compact('algoritm', 'questions'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

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

    public function addDefaultResponses(Request $request)
    {
        $question = AlgoritmQuestion::findOrFail($request->id_questions);

        if ($question->answers->count() <= 0) {
            for ($i = 1; $i < $request->addCount + 1; $i++) {
                $question->answers()->create(['answer' => 'Ответ № ' . $i,'']);
            }
        }

        return redirect('/algoritms/' . $request->id_algoritms . '/edit ');
    }

    public function deleteQuestion($id){

    }

    public function deleteAnswer($id){

    }


}
