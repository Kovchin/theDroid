@extends('layouts.mainPage')
@extends('layouts.tools.navBar')



@section('content')

    <div class="container bg-info">
        <div class="row align-items-center">
            <div class="col-10 text-center">
                <h1>Список действующих договоров</h1>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{Session::get('success')}}</p>
                </div>
            @endif

            <div class="col-2">
                <a class="btn btn-secondary" href="{{ 'contracts\create' }}">новый договор</a>
            </div>
        </div>

        <div class="row">

            @foreach($contracts as $contract)

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-subtitle mb-2 text-muted"><a href="{{$contract->files->link}}" target="_blank">{{$contract->nickName}}</a></h2>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->counterpartyA->name}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->counterpartyB->name}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$contract->start}} - {{$contract->end}}</h6>
                            <p class="card-text">{{$contract->name}}</p>

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

                            <div class="row">

                                <div class="col-3">
                                    <a class="btn btn-info" href="{{route("contracts.show", $contract)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>

                                <div class="col-3">
                                    <a class="btn btn-primary" href="{{route("contracts.edit", $contract)}}">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </div>

                                <div class="col-3">
                                    <form action="{{route("contracts.destroy", $contract)}}" method="POST">
                                        {{csrf_field()}}
                                        @method('DELETE')

                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>

@endsection
