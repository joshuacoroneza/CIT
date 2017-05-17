<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
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
                        <a href="index.php">ADMIN</a>
                    </li>
                    <li>
                        <a href="../index.php">USER</a>
                    </li>
                </ul>
				
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="container" style="margin:10% auto;width:400px;background-color:#333">
		<div class="panel panel-success">
			<div class="panel-heading"  style="background-color:#000">
			<h3 class="panel-title text-center" style="color:white">Administrator</h3>
		</div>
			<div class="panel-body">
			<form method="POST" class="form-signin" action="login.php">
				<input type="text" class="form-control" name="uname" placeholder="Username" required>
				<input type="password" class="form-control" name="pwd"placeholder="Password" required>
				<input type="submit" class="btn btn-warning" value="Login" style="width:100%;">
			</form>
				</div>
			</div>
		</div>
	</body>
</html