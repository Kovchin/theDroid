@extends('layouts\mainPage')
@extends('layouts\tools\NavBar')

@section('content')

    <div class="container">
        <div class="row align-items-center">
            <div class="col-10 text-center">
                <h1>Действующие контрагенты</h1>
            </div>
            <div class="col-2">
                <a class="btn btn-success" href="\counterparty\create">дабавить</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{Session::get('success')}}</p>
            </div>
        @endif

        <div class="row">
            <div class="col">
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Название</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Почта</th>
                            <th scope="col">Управление</th>
                        </tr>
                        </thead>

                        @foreach($counterpartys as $counterparty)
                            <tr>
                                <td><a class="font-weight-bold"
                                       href="{{route("counterparty.show", $counterparty)}}">{{$counterparty->name}}</a>
                                </td>
                                <td>{{$counterparty->phones->phone ?? ""}}</td>
                                <td>{{$counterparty->emails->email ?? ""}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route("counterparty.show", $counterparty)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route("counterparty.edit", $counterparty)}}">
                                        <i class="fa fa-pencil"></i>

                                    </a>
                                </td>
                                <td>
                                    <form action="{{route("counterparty.destroy", $counterparty)}}" method="POST">
                                        {{csrf_field()}}
                                        @method('DELETE')

                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

