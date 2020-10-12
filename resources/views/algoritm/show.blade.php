@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    <div class="container bg-light">
        <div class="row">
            <div class="col-2">
                <ul>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="col-10">
                <h1 class="text-right">Действия персонала согласно алгоритму</h1>
                <p>{{ $algoritm->question }}</p>
                <button class="btn btn-success">да</button>
                <button class="btn btn-success">нет</button>
                <button class="btn btn-success">подумаю</button>

            </div>
        </div>
    </div>
@endsection
