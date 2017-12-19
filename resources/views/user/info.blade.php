@extends('layout.index')
@section('title')
	Information
@endsection

@section('content')
	
	<div class="login-panel panel panel-default" id="panel-default">

        <div class="panel-heading" id="panel-heading">
            <h3 class="panel-title" id="panel-title">Information</h3>
        </div>
        <div class="panel-body">
            @if(session('notification'))
		        <div class="alert alert-success" id="notification">
		            {{session('notification')}}
		        </div>
	    	@endif

	    	<div class="login">
				<form method="POST" id="info_form">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="hidden" name="reply" value="{{ $reply }}">

					<input  name="last_name" placeholder="Nom" type="text"><br><br>
					<input  name="first_name" placeholder="Prenom" type="text"><br><br>
					<input name="email" placeholder="E-Mail" type="text"><br><br>
					<button type="submit" class="btn btn-success" >Submit</button>
				</form>
			</div>
        </div>
    </div>

    @include('notification.notification')

@endsection

@section('script')

	<script src="../js/validate/validate_info.js"></script>

@endsection


