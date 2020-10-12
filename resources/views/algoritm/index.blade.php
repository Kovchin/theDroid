@extends('layouts.mainPage')
@extends('layouts.tools.navBar')


@section('content')

    <div class="container bg-white">
        <div class="row">
            <div class="col-2">
                <ul>
                    @foreach($mainQuestions as $mainQuestion)
                        <li class="text-truncate"><a href="algoritms/{{$mainQuestion->id}}">{{$mainQuestion->question}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-10">
                234
            </div>
        </div>
    </div>

@endsection


