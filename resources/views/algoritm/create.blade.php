@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2">
                Панель навигации
            </div>
            <div class="col-10 bg-white">
                <form action="/algoritms" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Имя алгоритма" id="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="shortName" placeholder="Короткое название алгоритма">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="3" placeholder="Описание"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Завести новый алгоритм">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
