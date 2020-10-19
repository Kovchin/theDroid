@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')
    {{--    {{$algoritm}}--}}

    {{--    {{$questions}}--}}

    @foreach($questions as $question)
        <ul>
            @foreach($question->answers as $answer)
                <li>
                    {{$answer->answer}}
                </li>
            @endforeach
        </ul>
    @endforeach

@endsection
