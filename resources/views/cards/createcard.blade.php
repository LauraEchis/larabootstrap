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


                            {!! Form::open(['action' => 'PersonalDateController@store','method'=>'POST']) !!}
                            <fieldset>
                                <legend>Информация для визитной карточки</legend>
                                {{--<div class="form-group">--}}

                                <div class="paddngs_for">

                                    <div class="form-group">
                                        {!! Form::label('first_name', 'Фамилия') !!}
                                        {!! Form::text('first_name', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Имя</label>
                                        {!! Form::text('last_name', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Отчество</label>
                                        {!! Form::text('patronymic', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Название компании</label>
                                        {!! Form::text('company_name', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Должность</label>
                                        {!! Form::text('position', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Адрес</label>
                                        {!! Form::text('address', null, ['class'=>'form_control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="focusedInput">Телефон</label>
                                        {!! Form::text('telephone', null, ['class'=>'form_control']) !!}
                                    </div>

                                </div>


                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                        {{--col-lg-10"--}}
                                            {{--<button type="reset" class="btn btn-default">Cancel</button>--}}
                                            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}

                                            {!! Form::submit('Создать', null, ['class'=>'btn btn-primary']) !!}
                                            {{--<a href="#" class="btn btn-default">Default</a>--}}
                                            {{--<a href="#" class="btn btn-primary">Primary</a>--}}
                                            {{--<a href="#" class="btn btn-info">Info</a>--}}
                                            {{--<a href="#" class="btn btn-warning">Warning</a>--}}
                                            {{--<a href="#" class="btn btn-danger">Danger</a>--}}
                                            {{--<a href="#" class="btn btn-link">Link</a>--}}
                                        </div>
                                    </div>

                            </fieldset>
                            {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
