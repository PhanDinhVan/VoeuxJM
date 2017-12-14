<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
  	<title>@yield('title')</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<script src="../js/jquery/3.2.1/jquery.min.js"></script>
	<script src="../js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/validate/jquery.validate.min.js"></script>

	<link rel="stylesheet" href="../css/my_style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
	
	<div class="container">
        <div class="row">
        	<div class="body"></div>
			<div class="grad"></div>
            <div class="col-md-4 col-md-offset-4">

                <!-- page content -->
		        @yield('content')
		        <!-- /page content -->

            </div>
        </div>
    </div>

    @yield('script')
</body>
</html>
