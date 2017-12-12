<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Question</title>
  
  

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
		background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);
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
		color: #fff;
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
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
  	<div class="body"></div>
	<div class="grad"></div>
	<div class="header">
		<div><span class="bold">Question</span></div>
	</div>
	<br>
	<div class="login">
		<form action="question" method="POST" id="signupform">
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
			<button type="submit" class="btn btn-success" >Submit <span class="glyphicon glyphicon-ok"></span></button>
		</form>
	</div>

	


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>



<script type="text/javascript">
	

	$(function()
	{
	    $('#signupform').validate(
	      {
	        rules:
	        {
	          question:{ required:true }
	        },
	        messages:
	        {
	          question:
	          {
	            required:"Please select a answers<br/>"
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


	$(function()
  {
    $('#myform').validate(
      {
        rules:
        {
          Color:{ required:true }
        },
        messages:
        {
          Color:
          {
            required:"Please select a Color<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.container') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
      });
    
  });

	
</script>

  
</body>
</html>