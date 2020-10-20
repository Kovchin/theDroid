@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    {{--    Шапка, название алгоритма--}}
    <div class="container">
        <div class="row m-3">
            <div class="col">
                <h1 class='text-right'>{{$algoritm->name}}</h1>
            </div>
        </div>

        {{--        Редактирование корневого алгоритма--}}

        <div class="row">
            <div class="col bg-light p-3">
                <form action="" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class='form-group'>
                        <input class="form-control" type="text" name="name" placeholder="навзание алгоритма"
                               value="{{$algoritm->name}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="shortName" placeholder="короткое имя"
                               value="{{$algoritm->shortName}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Описание алгоритма</label>
                        <textarea class="form-control" type="text" name="description" placeholder="Описание"
                                  rows="3"> {{$algoritm->description}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input class='btn btn-secondary' type="submit" value="Редактировать алгоритм">
                        <button class="btn btn-danger">Удалить алгоритм</button>
                    </div>
                </form>
            </div>
        </div>

        {{--Редактирование вопросов--}}

        {{--        Пакетное добавление вопросов в алгоритме работает только если нет связанных к алгоритму вопросов--}}
        @if($algoritm->questions()->count() ==0)

            <div class="row">
                <div class="col m-3 p-3 bg-light">
                    <form action="/algoritms/{{$algoritm->id}}/addDefaultQuestions" method="POST">
                        @csrf

                        <div class="form-grpup">
                            <label for="addCount">Сколько узлов в алгоритме</label>
                            <input type="number" name="addCount">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Завести вопросы">
                        </div>
                    </form>
                </div>
            </div>
        @endif

        {{--Карточка вопроса в алгоритме--}}

        @foreach($questions as $singleQuestion)
            <div class="row m-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <textarea class="form-control" type="text" name="description" placeholder="Вопрос"
                                          rows="3">
                                    {{$singleQuestion->question}}
                                </textarea>
                            </div>

                            {{--Управление вопросом--}}
                            <div class="row m-2">
                                <button class="btn btn-secondary">Редактировать вопрос</button>
                                <button class="btn btn-primary">Добавить вопрос</button>
                                <button class="btn btn-danger">Удалить вопрос</button>
                            </div>

                            {{--Эта форма для пакетного добавления ответов на вопрос в алгоритме работает если на вопрос нет ответов в базе данных--}}
                            <div class="row m-2">
                                @if($singleQuestion->answers()->count() == 0)
                                    <div class="form-group">
                                        <form
                                            action="/algoritms/{{$algoritm->id}}/{{$singleQuestion->id}}/addDefaultResponses "
                                            method="POST">
                                            @csrf
                                            <div class="form-group d-inline-flex">
                                                <input class="form-control" type="number" name="addCount"
                                                       placeholder="количество ответов">
                                                <input class="btn btn-primary" type="submit" value="Добавить ответы">
                                            </div>
                                        </form>
                                    </div>
                                @else
                                    {{--                                Если вопрос есть то отражаем навигацию что бы ими манипулировать--}}
                                    <button class="btn btn-primary">Добавить ответ</button>
                                @endif
                            </div>

                            {{--                                    Отражение ответов на вопросы в алгоритме с возможностью модифицировать и удалять данные--}}


                            <div class="row m-2">
                                <div class="form-group">
                                    <table>

                                        @foreach($singleQuestion->answers as $answer)
                                            <tr>
                                                <td>
                                                    <input class="form-control" type="text" name="" id=""
                                                           value="{{$answer->answer}}" placeholder="Ответ">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">-- Узел не выбран --</option>
                                                        @foreach($questions as $singleQuestion)
                                                            <option value="">
                                                                {{$singleQuestion->question}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>
                                                    <button class="btn btn-secondary">Редактировать ответ</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">Удалить ответ</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
