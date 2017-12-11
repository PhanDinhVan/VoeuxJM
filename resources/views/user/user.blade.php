<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap/bootstrap.min.js"></script>


<div class="container">

	<form class="well form-horizontal" action=" " method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend>Info Customer</legend>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Full Name</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  	<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 control-label">Phone</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="phone" placeholder="Phone number" class="form-control" type="text">
		    </div>
		  </div>
		</div>

		<!-- radio checks -->
		 <div class="form-group">
		    <label class="col-md-4 control-label">Question</label>
		    <div class="col-md-4">
		    	<div class="input-group">
				    <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
				  	<input value="Which team do you love more?" class="form-control"  type="text" readonly="">
			    </div>
		        <div class="radio">
		            <label>
		                <input type="radio" name="hosting" value="A" /> A. Manchester United
		            </label>
		        </div>
		        <div class="radio">
		            <label>
		                <input type="radio" name="hosting" value="B" /> B. Real Madrid
		            </label>
		        </div>
		    </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
		    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
	</form>

</div>
<!-- /.container -->