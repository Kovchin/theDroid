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
                <form action="/algoritms/{{$algoritm->id}}" method="POST">
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
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input class='btn btn-secondary form-control' type="submit"
                                           value="Редактировать алгоритм">
                                </div>
                            </td>

                </form>
                <td>
                    <form method="POST" action="/algoritms/{{$algoritm->id}}">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <button class="form-control btn btn-danger">Удалить алгоритм</button>
                        </div>
                    </form>
                </td>
                </tr>
            </div>

            <div class="form-group">
                @if($algoritm->questions()->count() > 0)
                    <tr>
                        <td>
                            <a class="btn btn-primary form-control"
                               href="/algoritms/{{$algoritm->id}}/addSingleQuestion">Добавить вопрос</a>
                        </td>
                    </tr>
                    @endif

                    </table>
            </div>
        </div>

        {{--Редактирование вопросов--}}

        {{--        Пакетное добавление вопросов в алгоритме работает только если нет связанных к алгоритму вопросов--}}

        @if($algoritm->questions()->count() == 0)

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
                            <form action="/algoritms/updateQuestion"
                                  method="POST">
                                @csrf

                                <input class="invisible" type="text" name="id_algoritm" value="{{$algoritm->id}}">
                                <input class="invisible" type="text" name="id_question" value="{{$singleQuestion->id}}">

                                <div class="form-group">
                                <textarea class="form-control" type="text" name="question" placeholder="Вопрос"
                                          rows="3">{{$singleQuestion->question}}
                                </textarea>
                                </div>

                                {{--Управление вопросом--}}
                                <div class="row m-2">
                                    <button class="btn btn-secondary">Редактировать вопрос</button>
                                    <a class="btn btn-danger"
                                       href="/algoritms/{{$algoritm->id}}/{{$singleQuestion->id}}/deleteQuestion">Удалить
                                        вопрос</a>
                                </div>
                            </form>
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
                                    <a href="/algoritmss/{{$algoritm->id}}/{{$singleQuestion->id}}/addSingleeAnswer"
                                       class="btn btn-primary">Добавить ответ</a>
                                @endif
                            </div>

                            {{--                                    Отражение ответов на вопросы в алгоритме с возможностью модифицировать и удалять данные--}}


                            <div class="row m-2">
                                <div class="form-group">
                                    <table>
                                        @foreach($singleQuestion->answers as $answer)
                                            <form action="/algoritms/updateAnswer" method="POST">
                                                @csrf
                                                <input class="invisible" type="text" name="id_algoritm"
                                                       value="{{$algoritm->id}}">
                                                <input class="invisible" type="text" name="answer_id"
                                                       value="{{$answer->id}}">
                                                <tr>
                                                    <td>
                                                        <input class="form-control" type="text" name="answer" id=""
                                                               value="{{$answer->answer}}" placeholder="Ответ">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="link_question_id" id="">
                                                            <option value="">-- Узел не выбран --</option>
                                                            @foreach($questions as $singleQuestion)
                                                                <option @if($singleQuestion->id == $answer->link_question_id)
                                                                        selected
                                                                        @endif
                                                                        value="{{$singleQuestion->id}}">{{$singleQuestion->question}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>

                                                    <td>
                                                        <input class="btn btn-secondary" type="submit"
                                                               value="Редактировать ответ">
                                                    </td>
                                            </form>
                                            <td>
                                                <a class="btn btn-danger"
                                                   href="/algoritms/{{$algoritm->id}}/{{$answer->id}}/deleteAnswer">Удалить
                                                    ответ</a>
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
