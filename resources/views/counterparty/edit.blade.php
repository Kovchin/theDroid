@extends('layouts.mainPage')
@extends('layouts.tools.navBar')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-right">Редактировать данные контрагента {{$counterparty->name}}</h5>


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form method="post"  action="{{route('counterparty.update', $counterparty->id)}}">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{$counterparty->name}}" required placeholder="Имя контрагента">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{$counterparty->emails->email ?? ""}}" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" value="{{$counterparty->phones->phone ?? ""}}" placeholder="телефон">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="3" placeholder="Примечания">{{$counterparty->description ?? ""}}</textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Редактировать">
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
