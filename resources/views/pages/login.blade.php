@extends('login-template')

@section('title', '| Inloggen')

@section('content')
	{!! Form::open(['route' => 'postLogin', 'class' => 'form-login']) !!}
	   <h2 class="form-login-heading">
	   	inloggen
	   </h2>
		@include('partials.login._errors')
	   <div class="login-wrap">
	       {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Gebruikersnaam', 'autofocus' => '')) }}
	       <br>
	       {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Wachtwoord')) }}
	       <label class="checkbox">
	           <span class="pull-right">
	               <a data-toggle="modal" href="login.html#myModal"> Wachtwoord vergeten?</a>

	           </span>
	       </label>
	       {{ Form::submit('INLOGGEN', array('class' => 'btn btn-theme btn-block')) }}
	       <hr>
	      	
	       <div class="registration">
	           Heeft u nog geen account?<br/>
	           <a class="" href="{{ URL::route('getSignup') }}">
	               Maak een account aan
	           </a>
	       </div>
	   </div>

	   <!-- Modal -->
	   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
	       <div class="modal-dialog">
	           <div class="modal-content">
	               <div class="modal-header">
	                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                   <h4 class="modal-title">Forgot Password ?</h4>
	               </div>
	               <div class="modal-body">
	                   <p>Enter your e-mail address below to reset your password.</p>
	                   <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

	               </div>
	               <div class="modal-footer">
	                   <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
	                   <button class="btn btn-theme" type="button">Submit</button>
	               </div>
	           </div>
	       </div>
	   </div>
	   <!-- modal -->
	 {!! Form::close() !!}		
@stop
