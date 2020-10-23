@extends('layouts.mainPage')
@extends('layouts.tools.navBar')


@section('content')

    <div class="container bg-white">
        <div class="row">
            <table class="table">

                @foreach($algoritms as $algoritm)
                    <tr>
                        <td><a href="/algoritms/{{$algoritm->id}}">{{$algoritm->name}}</a></td>
                        <td><a class="btn btn-secondary" href="/algoritms/{{$algoritm->id}}/edit">edit</a></td>
                        <td>
                            <form action="/algoritms/{{$algoritm->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </td>
                    </tr>
                @endforeach


            </table>
        </div>
    </div>

@endsection


