@extends('login-template')

@section('title', '| Registreren')

@section('content')
    {!! Form::open(['route' => 'postSignup', 'class' => 'form-login']) !!}
    <h2 class="form-login-heading">
        Registreer nu
    </h2>
    @include('partials.login._errors')
    <div class="login-wrap">
        {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Gebruikersnaam', 'autofocus' => '')) }}
        <br>
        {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
        <br>
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Wachtwoord')) }}
        <br>
        {{ Form::password('confirm', array('class' => 'form-control', 'placeholder' => 'Wachtwoord bevestigen')) }}
        <br>
        {{ Form::text('signup_code', null, array('class' => 'form-control', 'placeholder' => 'Registratiecode')) }}
        <br>
        {{ Form::submit('REGISTREREN', array('class' => 'btn btn-theme btn-block')) }}
        <hr>

        <div class="registration">
            Heeft u al een account?<br/>
            <a class="" href="{{ URL::route('getLogin') }}">
                Klik hier om in te loggen
            </a>
        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('scripts')
    <script>

    </script>
@stop

