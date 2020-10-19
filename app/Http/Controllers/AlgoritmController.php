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

        $algoritm->save();

        return redirect("/algoritms/{$algoritm->id}");
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

        return view('algoritm/show', compact('algoritm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
