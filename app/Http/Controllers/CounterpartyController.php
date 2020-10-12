<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCounterpartyRequest;
use App\Http\Requests\UpdateCounterpartyRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Counterparty;
use App\Phone;
use App\Email;

class CounterpartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $counterpartys = Counterparty::all();

        return view('counterparty.index', compact('counterpartys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counterparty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCounterpartyRequest $request)
    {
        $counterparty = new Counterparty();
        $counterparty->name = $request->name;
        $counterparty->description = $request->description;

        if (isset($request->phone)) {
            $myPhone = new Phone(['phone' => $request->phone]);
            $myPhone->save();
            $counterparty->phone_id = $myPhone->id;
        }

        if (isset($request->email)) {
            $myEmail = new Email(['email' => $request->email]);
            $myEmail->save();
            $counterparty->email_id = $myEmail->id;
        }

        $counterparty->save();


        return redirect('/counterparty')->with('success', 'Пост успешно добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        $counterparty = Counterparty::findOrFail($id);

        return view('/counterparty/show', compact('counterparty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        $counterparty = Counterparty::findOrFail($id);

        return view('counterparty.edit', compact('counterparty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(UpdateCounterpartyRequest $request, $id)
    {

//        $counterparty = Counterparty::findOrFail($id);
//
//        $counterparty->name = $request->name;
//
//        if (isset($request->phone)) {
//            $newPhone = Phone::firstOrCreate(['phone' => $request->phone]);
//            $counterparty->phone_id = $newPhone->id;
//        }
//
//        if (isset($request->email)) {
//            $newEmail = Email::firstOrCreate(['email' => $request->email]);
//            $counterparty->email_id = $newEmail->id;
//        }
//
//        $counterparty->description = $request->description;
//
//        $counterparty->save();

        //TODO Добить вопрос с внесением изменений в карточку контрагента
        //Все работает только остаются неудаленные хвосты после изменения коренной записи в связанных таблицах


        $counterparty = Counterparty::findOrFail($id);

        if (isset($request->name)) {
            $counterparty->name = $request->name;
        }


        if (isset($request->email)) {
            $counterparty->emails()->email = $request->email;
        }

        if (isset($request->phone)) {
            $counterparty->phones->phone = $request->phone;
        }

        if (isset($request->description)) {
            $counterparty->descrtiption = $request->description;
        }

        $request->save();
        return $counterparty;



        ////////////////////////////////////////////////

        return redirect('/counterparty')->with('success', 'Пост успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {

        Counterparty::findOrFail($id)->delete();

        return redirect('/counterparty');
    }
}
