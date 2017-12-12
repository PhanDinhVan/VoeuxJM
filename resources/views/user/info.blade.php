<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap/bootstrap.min.js"></script>


<div class="container">

	<form class="well form-horizontal" action="users" method="post"  id="infor">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>

		<!-- Form Name -->
		<legend>Info Customer</legend>

		<!-- Text input--> 
		<div class="form-group">
		  <label class="col-md-4 control-label">Nom </label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="last_name" placeholder="Nom" class="form-control"  type="text" data-toggle="popover">
		    </div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Prenom </label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="Prenom" class="form-control"  type="text" data-toggle="popover">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  	<input name="email" placeholder="E-Mail Address" class="form-control"  type="text" data-toggle="popover">
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


