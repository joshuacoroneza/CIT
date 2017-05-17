<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CTI forum</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"> 
					<li>
                        <a href="../index.html">HOME</a>
                    </li>
                    <li>
                        <a href="admin/index.php">ADMIN</a>
                    </li>
                    <li>
                        <a href="#">USER</a>
                    </li>
                </ul>
				<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-warning">Login</button>
					</form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
			<div class="container" style="margin:8% auto;">
				<div class="col-sm-4 col-md-6">
					<h2>CTI - C Programming Sanctum</h2>
					<p>C forces you to build a mental model of what the computer is actually doing when you run your programs, much like a teenager figuring out how the gear mechanism works by playing around with the clutch. As you ask why and keep digging for answers, your mental model will grow to encompass the process model, the CPU architecture, the memory hierarchy, the operating system, and so forth. It's that mental model — rather than the C language itself — that will enable you to poke through the abstractions created by others, and write programs you never thought possible..</p>

					
					<img src="images/fr.jpg" class="img-responsive">
				</div>
				 <div class="col-sm-12 col-md-6 pull-right col-xs-12 col-lg-6">
                   <div class="row">
                   
						<form method="POST" class="form-signin" action="functions/register.php">
								<h3 class="text-center">Join Us!</h3>
							<input type="text" name="fname"placeholder="First Name"class="form-control" required>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<input type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Signup" class="btn btn-warning" style="width:100%;">
						</form>
				</div>
			</div>
		</div>
<hr>
    <<footer class="navbar navbar-inverse navbar-static-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <p align="center" style="line-height:50px;color:white">Copyright 2016 CTI. All Rights Reserved.</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</body>
</html>