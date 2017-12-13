<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Info</title>
  

<style>
	
	@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
	@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

	.bold {
		font-weight: bold;
	}
	.size {
		font-size: 15px;
		color: white;
	}
	.question{
		font-size: 18px;
		color: white;
	}
	.answers li { 
		list-style: upper-alpha; 
		} 

	body{
		margin: 0;
		padding: 0;
		background: #fff;

		color: #fff;
		font-family: Arial;
		font-size: 12px;
	}

	.body{
		position: absolute;
		top: -20px;
		left: -20px;
		right: -40px;
		bottom: -40px;
		width: auto;
		height: auto;
		background-image: url(../image/background-1.jpg);
		background-size: cover;
		-webkit-filter: blur(5px);
		z-index: 0;
	}

	.grad{
		position: absolute;
		top: -20px;
		left: -20px;
		right: -40px;
		bottom: -40px;
		width: auto;
		height: auto;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		opacity: 0.7;
	}

	.header{
		position: absolute;
		top: calc(50% - 35px);
		left: calc(50% - 255px);
		z-index: 2;
	}

	.header div{
		float: left;
		color: #fff;
		font-family: 'Exo', sans-serif;
		font-size: 35px;
		font-weight: 200;
	}

	.header div span{
		color: #5379fa !important;
	}

	.login{
		position: absolute;
		top: calc(50% - 75px);
		left: calc(50% - 50px);
		height: 150px;
		width: 350px;
		padding: 10px;
		z-index: 2;
	}

	.login input[type=text]{
		width: 250px;
		height: 30px;
		background: transparent;
		border: 1px solid rgba(255,255,255,0.6);
		border-radius: 2px;
		/*color: #fff;*/
		color: white;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
	}

	.login input[type=password]{
		width: 250px;
		height: 30px;
		background: transparent;
		border: 1px solid rgba(255,255,255,0.6);
		border-radius: 2px;
		color: #fff;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 4px;
		margin-top: 10px;
	}

	.login input[type=button]{
		width: 260px;
		height: 35px;
		background: #fff;
		border: 1px solid #fff;
		cursor: pointer;
		border-radius: 2px;
		color: #a18d6c;
		font-family: 'Exo', sans-serif;
		font-size: 16px;
		font-weight: 400;
		padding: 6px;
		margin-top: 10px;
	}

	.login input[type=button]:hover{
		opacity: 0.8;
	}

	.login input[type=button]:active{
		opacity: 0.6;
	}

	.login input[type=text]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=password]:focus{
		outline: none;
		border: 1px solid rgba(255,255,255,0.9);
	}

	.login input[type=button]:focus{
		outline: none;
	}

	::-webkit-input-placeholder{
	   color: rgba(255,255,255,0.6);
	}

	::-moz-input-placeholder{
	   color: rgba(255,255,255,0.6);
	}

	.alert-danger{
        background-color: #f2dede;
        color: #a94442;
        border-color: #ebccd1;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    body
	{
	  font-family: Arial, Sans-serif;
	}
	.error
	{
		color:red;
		font-family:verdana, Helvetica;
		/*position: absolute;
		margin-top: 5%;*/
	}
	.btn-success {
		margin-top: 5%;
	}
	.containerp {
		width: 100%;
	}
	#notification{
		display: none;
	}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>
  	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div><span class="bold" style="color: white !important;">Information</span></div>
	</div>
	<br>
	<div class="login">

		@if(session('notification'))
	        <div class="alert alert-success" id="notification">
	            {{session('notification')}}
	        </div>
    	@endif

		<form method="POST" id="info">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="reply" value="{{ $reply }}">

			<input  name="last_name" placeholder="Nom" type="text"><br><br>
			<input  name="first_name" placeholder="Prenom" type="text"><br><br>
			<input name="email" placeholder="E-Mail" type="text"><br><br>
			<button type="submit" class="btn btn-success" >Submit <span class="glyphicon glyphicon-send"></span></button>
		</form>
	</div>

	<div id="email_error" class="modal fade" role="dialog">
    	<div class="modal-dialog modal-sm">
	        <!-- Modal content-->
	        <div class="modal-content">
	            <div class="modal-header alert-danger">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">Email</h4>
	            </div>

	            <div class="modal-body">
	                <p>Sorry! Email has been used.</p>
	            </div>

	            <div class="modal-footer">
	                <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-ok-circle"></span> Close</button>
	            </div>
	        </div>
    	</div>
    </div>


</div>

	






<script type="text/javascript">
	

	$(function(){
	    $('#info').validate(
	      {
	        rules:
	        {
	          last_name: {
	            		required: true,
	            		minlength: 2
	            	},
	            email: {
	                    required: true,
	                    email: true
	                },
	            first_name: {
	            		required: true,
	            		minlength: 2
	            	}
	        },
	        messages:
	        {
	          last_name: {
		            		required: "Please enter nom",
		            		minlength: "Nom minimum 2 characters"
		            	},
		            email: {
		                    required: "Please enter email",
		                    email: "Please enter a valid email address.",
		                },
		            first_name: {
		                    required: "Please enter prenom",
		                    minlength: "Prenom minimum 2 characters.",
		                }
	        },
	        errorPlacement: function(error, element) 
	        {
	            if ( element.is(":radio") ) 
	            {
	                error.appendTo( element.parents('.containerp') );
	            }
	            else 
	            { // This is the default behavior 
	                error.insertAfter( element );
	            }
	        }
	    });
	});


	var error = document.getElementById('notification');
    if(error != null) {
        //err = document.getElementById('error').innerText;
        var err = $('#notification').text();
        //cut space

        err = err.replace(/\s+/g, '');
        
        if(err == 'error'){
        	$('#email_error').modal('show');
        }
    }

	
</script>
  
</body>
</html>





