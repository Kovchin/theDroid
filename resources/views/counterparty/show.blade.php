@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Отображение данных контрагента {{$counterparty->name}}</h1>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$counterparty->name}}</h5>
                <hr>
                <div class="row">
                    <div class="col-2">
                        <p>Телефон</p>
                    </div>
                    <div class="col-10">
                        {{$counterparty->phones->phone ?? 'не задан телефон для связи с контрагентом'}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p>Почта</p>
                    </div>
                    <div class="col-10">
                        {{$counterparty->emails->email ?? 'не задана почта для контрагента'}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-11">
                        {{$counterparty->description ?? 'не прописаны дополнительные данные к контрагентк'}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
