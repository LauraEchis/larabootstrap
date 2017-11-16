@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Создать визитную карточку</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{--<form class="form-horizontal">--}}
                        <fieldset>
                            <legend>Информация для визитной карточки</legend>
                            {{--<div class="form-group">--}}
                            {{--<label for="name" class="col-lg-2 control-label">Имя</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="text" class="form-control" id="name">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="inputPassword" class="col-lg-2 control-label">Password</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="password" class="form-control" id="inputPassword" placeholder="Password">--}}
                            {{--<div class="checkbox">--}}
                            {{--<label>--}}
                            {{--<input type="checkbox"> Checkbox--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="textArea" class="col-lg-2 control-label">Textarea</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<textarea class="form-control" rows="3" id="textArea"></textarea>--}}
                            {{--<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="col-lg-2 control-label">Radios</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<div class="radio">--}}
                            {{--<label>--}}
                            {{--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">--}}
                            {{--Option one is this--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="radio">--}}
                            {{--<label>--}}
                            {{--<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">--}}
                            {{--Option two can be something else--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                            {{--<label for="select" class="col-lg-2 control-label">Selects</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<select class="form-control" id="select">--}}
                            {{--<option>1</option>--}}
                            {{--<option>2</option>--}}
                            {{--<option>3</option>--}}
                            {{--<option>4</option>--}}
                            {{--<option>5</option>--}}
                            {{--</select>--}}
                            {{--<br>--}}
                            {{--<select multiple="" class="form-control">--}}
                            {{--<option>1</option>--}}
                            {{--<option>2</option>--}}
                            {{--<option>3</option>--}}
                            {{--<option>4</option>--}}
                            {{--<option>5</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="paddngs_for">--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Фамилия</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите фамилию">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Имя</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите имя">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Отчество</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите отчество">--}}
                            {{--<div class="checkbox">--}}
                            {{--<label>--}}
                            {{--<input type="checkbox"> Добавить отчество в визитку--}}
                            {{--</label>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Название компании</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите название компании">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Должность</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите должность">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Адрес</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите адрес">--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                            {{--<label class="control-label" for="focusedInput">Телефон</label>--}}
                            {{--<input class="form-control" id="focusedInput" type="text"--}}
                            {{--placeholder="Введите телефон">--}}
                            {{--</div>--}}

                            {{--</div>--}}


                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">

                                    {{--<div class="card border-primary">--}}
                                    {{--<div class="card-body">--}}
                                    {{--<div class="card">--}}
                                        {{--<h3 class="card-header">Card header</h3>--}}
                                        {{--<div class="card-body">--}}
                                            {{--<h5 class="card-title">Special title treatment</h5>--}}
                                            {{--<h6 class="card-subtitle text-muted">Support card subtitle</h6>--}}
                                        {{--</div>--}}
                                        {{--<img style="height: 200px; width: 200px; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">--}}
                                        {{--<div class="card-body">--}}
                                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                            {{--<a href="#" class="card-link">Card link</a>--}}
                                            {{--<a href="#" class="card-link">Another link</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="card-footer text-muted">--}}
                                            {{--2 days ago--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    @isset($cardss)
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr class="bg-primary">
                                                    <th>#</th>
                                                    <th>Визитка</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <? $x = 1; ?>
                                                @foreach($cardss as $c)
                                                    <tr>
                                                        <td>
                                                        <? echo $x; $x++ ?></td>
                                                        <td>
                                                            {{--<table cellspacing="5" cellpadding="10"  width="100%">--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Фамилия</td>--}}
                                                                    {{--<td>{{$c->first_name}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Имя</td>--}}
                                                                    {{--<td>{{$c->last_name}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Отчество</td>--}}
                                                                    {{--<td>{{$c->patronymic}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Должность: </td>--}}
                                                                    {{--<td>{{$c->position}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Компания</td>--}}
                                                                    {{--<td>{{$c->company_name}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Адрес</td>--}}
                                                                    {{--<td>{{$c->address}}</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Телефон</td>--}}
                                                                    {{--<td>{{$c->telephone}}--}}



                                                                    {{--</td>--}}
                                                                {{--</tr>--}}
                                                                {{--<tr>--}}
                                                                    {{--<td>Создана</td>--}}
                                                                    {{--<td>{{substr ($c->updated_at , 0, 10)}}--}}



                                                                    {{--</td>--}}
                                                                    <div class="card">
                                                                        <h3 class="card-header"> {{$c->first_name}} {{$c->last_name}}  {{$c->patronymic}}</h3>
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">{{$c->company_name}}</h5>
                                                                            <h6 class="card-subtitle text-muted">{{$c->position}}</h6>
                                                                        </div>

                                                                        <? $k=rand(1, 5); ?>
                                                                        @if($k==1)
                                                                            <img style="height: 200px; width: 200px; display: block;" src="https://i.imgur.com/kz1BoKS.jpg" alt="Card image">
                                                                        @elseif($k==2)
                                                                            <img style="height: 200px; width: 200px; display: block;" src="https://i.imgur.com/YYQHpbo.jpg" alt="Card image">
                                                                        @elseif($k==3)
                                                                            <img style="height: 200px; width: 200px; display: block;" src="https://i.imgur.com/jXtwkU7.jpg" alt="Card image">
                                                                        @elseif($k==4)
                                                                            <img style="height: 200px; width: 200px; display: block;" src="https://i.imgur.com/NEhAwN8.jpg" alt="Card image">
                                                                        @else
                                                                            <img style="height: 200px; width: 200px; display: block;" src="https://i.imgur.com/98uknji.jpg" alt="Card image">
                                                                        @endif

                                                                        <div class="card-body">
                                                                            <p class="card-text">{{$c->address}}</p>
                                                                            <p class="card-text">Телефон: {{$c->telephone}}</p>
                                                                        </div>
                                                                        <div class="card-footer text-muted">
                                                                            Визитка создана: {{substr ($c->updated_at , 0, 10)}}

                                                                        </div>
                                                                        <button type="button" class="btn btn-success">Изменить</button>

                                                                        <button type="button" class="btn btn-info">Удалить</button>
                                                                    </div>
                                                                {{--</tr>--}}
                                                            {{--</table>--}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                    @endisset

                                    @empty($cardss)
                                        Ни одной визитки не создано. Может всё-таки создадим? Ну хотя бы одну. Маленькую.
                                    @endempty
                                    {{--<blockquote class="card-blockquote">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>--}}
                                    {{--<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>--}}
                                    {{--</blockquote>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}

                                    <a href="{{route('cards.create')}}" class="btn btn-primary">Добавить новую визитку в список</a>
                                    {{--<a href="#" class="btn btn-primary">Primary</a>--}}
                                    {{--<a href="#" class="btn btn-success">Success</a>--}}
                                    {{--<a href="#" class="btn btn-info">Info</a>--}}
                                    {{--<a href="#" class="btn btn-warning">Warning</a>--}}
                                    {{--<a href="#" class="btn btn-danger">Danger</a>--}}
                                    {{--<a href="#" class="btn btn-link">Link</a>--}}
                                </div>
                            </div>

                        </fieldset>
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
