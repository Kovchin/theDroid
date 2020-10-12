<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Http\Requests\CreateContractRequest;
use Illuminate\Http\Request;
use App\Counterparty;
use App\Sli;
use App\File;
use Illuminate\Support\Facades\Storage;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contracts = Contract::all();

        return view('contracts/index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counterparties = Counterparty::all();

        return view('contracts/create', compact('counterparties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
//    public function store(CreateContractRequest $request)
    public function store(Request $request)
    {
//Заводим запись контракта в базе данных contracts зависимые таблицы counterparty, slis и files.
        $contract = new Contract;

        $contract->nickName = $request->nickName;
        $contract->name = $request->name;
        $contract->description = $request->description;
        $contract->start = $request->start;
        $contract->end = $request->end;
        $contract->counterpartyA_id = $request->counterpartyA_id;
        $contract->counterpartyB_id = $request->counterpartyB_id;

//Кладем файл скана договорма в раздел contracts
        $newPath = Storage::putFile('public/contracts', $request->file('path'));

//создаем запись в таблице Files
        $newFile = new File;
        $newFile->path = $newPath;
        $newFile->pathNickname = $request->file('path');
        $newFile->link = Storage::url($newPath);
        $newFile->name = 'Договор';

        $newFile->save();

        $contract->file_id = $newFile->id;
        $contract->save();

//Связанное с Slis поле
        if (isset($request->countsSli)) {

            for ($i = 0; $i < $request->countsSli; $i++) {
                $sli = new Sli;
                $sli->name = 'default';
                $sli->number = $i + 1;
                $sli->contracts_id = $contract->id;
                $sli->save();
            }
        }

        return redirect('/contracts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);

        return view('contracts.show', compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);

        return view('contracts.edit', compact('contract'));
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

        Contract::findOrFail($id)->delete();

        return redirect('/contracts');
    }
}
