@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    <div class="container bg-light">
        <div class="row">
            {{--Боковое меню данные берутся из сессии а в сессию их загружает контроллер--}}
            <div class="col-2">
                <ul class="m-3">
                    @foreach($request->session()->get('id_question') as $key => $record)
                        <li>
                            <a class="" href="{{$record}}"><p
                                    class="text-truncate">{{$request->session()->get('question')[$key]}}</p></a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{--            Основной блок отображения вопросов--}}
            <div class="col-10 min-vh-100">

                {{--                Ссылка на первый вопрос алгоритма--}}
                <h2 class="text-right m-3"><a href="/algoritms/{{$algoritm->id}}">{{ $algoritm->name}}</a></h2>

                {{--Вопрос                --}}
                <h4>{{$question->question}}</h4>

                {{--                Блок кнопок ответов--}}
                @foreach($answers as $answer)
                    <a class="btn btn-success"
                       href="/algoritms/{{$algoritm->id}}/{{$answer->link_question_id}}">{{$answer->answer}}</a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
