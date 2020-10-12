@extends('layouts/mainPage')
@extends('layouts/tools/navBar')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-right">Добавить новый договор</h5>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="/contracts" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="nickName" required
                               placeholder="Короткое название договора" value="{{old('nickName')}}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="name" required
                               placeholder="Полное название договора"
                               value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="description"
                                  placeholder="более подробное описание договора">{{old('description')}}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlInput1">Дата начала действия договора</label>
                                <input class="form-control" type="date" name="start"
                                       placeholder="Дата начала действия договора"
                                       value="{{old('start')}}">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1">Дата окончания действия договора</label>
                                <input class="form-control" type="date" name="end"
                                       placeholder="Дата окончания действия договора"
                                       value="{{old('end')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="counterpartyA_id">Сторона А</label>
                                <select class="custom-select" name="counterpartyA_id" required>
                                    @foreach($counterparties as $counterparty)
                                        <option
                                            @if($counterparty->id == old('counterpartyA_id'))
                                            selected
                                            @endif
                                            value="{{$counterparty->id}}">{{$counterparty->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="counterpartyB_id">Сторона B</label>
                                <select class="custom-select" name="counterpartyB_id" required>
                                    @foreach($counterparties as $counterparty)
                                        <option
                                            @if($counterparty->id == old('counterpartyB_id'))
                                            selected
                                            @endif
                                            value="{{$counterparty->id}}">{{$counterparty->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="countsSli">Количество приоритетов</label>
                        <input type="number" name="countsSli" placeholder="SLI count" value="{{old('countsSli')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Ссылка на скан договора</label>
                        <input type="file" name="path" class="form-control-file" id="fileUpload"
                               aria-describedby="fileHelp"
                               value="{{old('path')}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bnt btn-primary">Зарегистрировать</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection

