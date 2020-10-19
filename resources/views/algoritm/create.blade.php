@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2">
                Панель навигации
            </div>
            <div class="col-10">
                <form action="/algoritms" method="POST">
                    @csrf
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Имя алгоритма" id="">
                    </div>
                    <div class="form-control">
                        <input type="text" name="shortName" placeholder="Короткое название алгоритма">
                    </div>
                    <div class="form-control">
                        <input type="text" name="description">
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Завести новый алгоритм">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
