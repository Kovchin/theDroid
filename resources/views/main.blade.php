@extends('layouts.mainPage')

@extends('layouts.tools.navBar')

@section('content')

{{--<img src="/img/main.jpg" alt="">--}}

<div class="container">

    <div class="bg-info">
        <ul>
            <li class="text-light">Ведение проекта в Рэдмайн (Гизатуллин Н.Р., Пищулин В.В.) <a class="text-white" href="http://172.16.1.75/sprints/258">Редмайн</a></li>
            <li class="text-white">Размещение документации на портале (Пищулин В.В.) <a class="text-white" href="https://clck.ru/SAHHy">Портал</a></li>
        </ul>
    </div>

    <div class="row justify-content-end">
        <h1 class="text-right">The Droid 2.0</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">График работы</h5>
                    <p class="card-text">Табель/график работы/графикт отпусков</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ВОЛС</h5>
                    <p class="card-text">Сопровождение работ на ВОЛС</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ТО</h5>
                    <p class="card-text">Проведение ТО</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
    </div>



    <div class="row mt-5">
        <div class="col-1">

        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Календарь</h5>
                    <p class="card-text">Календарь. В нем собранны все задачи сотрудника</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
        <div class="col-1">

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Предложения</h5>
                    <p class="card-text">Здесь вы можете оставить пожелания к работе The Droid</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Администрирование</h5>
                    <p class="card-text">Панель администрирования</p>
                    <button class="btn btn-danger">Перейти</button>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Сообщить об ошибке</h5>
                    <p class="card-text">Здесь вы можете оставить ниформацию о найденных ошибках</p>
                    <button class="btn btn-primary">Перейти</button>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
