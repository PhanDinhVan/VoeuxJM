@extends('layout.index')
@section('title')
	Question
@endsection

@section('content')
	
	<div class="login-panel panel panel-default" id="panel-default2">

        <div class="panel-heading" id="panel-heading">
            <h3 class="panel-title" id="panel-title2">Question</h3>
        </div>
        <div class="panel-body">
            @if(session('notification'))
		        <div class="alert alert-success" id="notification">
		            {{session('notification')}}
		        </div>
	    	@endif

	    	<div class="login"> 
				<form action="question" method="POST" id="question_form">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					
					<p class="question">What is the name of the founder of the Martin’s Finest Drinks company in 1909?</p>
					<ul class="answers">
						<p class='containerp'>
							<label class="size">
								<input type="radio" name="question" value="a" /> A. John
							</label><br/>
							<label class="size"> 
								<input type="radio" name="question" value="b" /> B. Jack
							</label><br/>
						</p>
					</ul>
					<button type="submit" class="btn btn-success" id="submit">Submit </button>
				</form>
			</div>
        </div>
    </div>

    @include('notification.notification')

@endsection

@section('script')

	<script src="../js/validate/validate_question.js"></script>

@endsection

