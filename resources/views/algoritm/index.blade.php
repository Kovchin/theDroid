@extends('layouts.mainPage')
@extends('layouts.tools.navBar')


@section('content')

    <div class="container bg-white">
        <div class="row">
            <div class="col-2">
                <ul>
                    @foreach($algoritms as $algoritm)
                        <li>
                            <a href="/algoritms/{{$algoritm->id}}">{{$algoritm->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-10">


            </div>
        </div>
    </div>

@endsection


