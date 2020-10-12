@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Отображение деталезированных данных договора {{$contract->name}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$contract->name}}</h3>
                        <div class="card-text">

                            <h2 class="card-subtitle mb-2 text-muted">{{$contract->nickName}}</h2>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->counterpartyA->name}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->counterpartyB->name}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->start}} - {{$contract->end}}</h6>
                            <p class="card-text">{{$contract->name}}</p>
                            <p class="card-text">{{$contract->description}}</p>

                            <div class="row">

                                <div class="col">

                                    <table class="table table-striped table-borderless">

                                        <thead>
                                        <tr>
                                            <th scope="col">Номер</th>
                                            <th scope="col">Название</th>
                                            <th scope="col">Время</th>
                                            <th scope="col">Описание</th>
                                        </tr>
                                        </thead>

                                        @foreach($contract->slis as $contract->sli)
                                            <tr>
                                                <td scope="col">{{$contract->sli->number}}</td>
                                                <td scope="col">{{$contract->sli->name}}</td>
                                                <td scope="col">{{$contract->sli->duration}}</td>
                                                <td scope="col">{{$contract->sli->description}}</td>
                                            </tr>
                                        @endforeach
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection
