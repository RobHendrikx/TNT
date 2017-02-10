@extends('login-template')

@section('title', '| Registreren')

@section('content')
    {!! Form::open(['route' => array('postCompany', $user->id), 'class' => 'form-login']) !!}
    <h2 class="form-login-heading">
        Bedrijfsinformatie
    </h2>
    @include('partials.login._errors')
    <div class="login-wrap">
        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Bedrijfsnaam', 'autofocus' => '')) }}
        <br>
        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
        <br>
        {{ Form::text('starttime', null, array('class' => 'form-control', 'id' => 'starttime', 'placeholder' => 'Begintijd stagiair')) }}
        <br>

        {{ Form::submit('Registratie afronden', array('class' => 'btn btn-theme btn-block')) }}
    </div>
    {!! Form::close() !!}
@stop

@section('scripts')
    <script src="{{ URL::asset('js/jquery.timepicker.min.js') }}"></script>
    <script>
        $('#starttime').timepicker({
            'timeFormat': 'H:i:s',
            'show2400': true
        });
    </script>
@stop