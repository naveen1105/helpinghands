<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/helpinghands.js"></script>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/helpinghands.css" rel="stylesheet" type="text/css">
    <!--    <script src="js/jquery.js"></script>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="#"> <img src="images/helpinghandslogo.PNG" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">How it work</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search"> </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="registration.php">Register</a></li>
                    <li class="active"><a href="login.php">Login</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section class="container-fluid">
        <section class="container">
            <section class="row">
                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="login-form">
                        <section style="width:25%;margin:auto;padding-top:20px"> <img src="images/helpinghands1.png" class="img-responsive"> </section>
                        <h3 style="text-align:center;color:#3b5998; font-weight:bold; padding: 0 10px">Helpinghands</h3>
                        <form action=" " method="POST" class="form-log">
                            <div class="form-group ">
                                <label class="form-lable">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" title="Please enter the email id you registered with "> </div>
                            <div class="form-group">
                                <label class="form-lable">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password"> 
                            </div>
                            
                            
                            <button type="submit" name="submitlogin" style="width:100px;height:30px;margin: auto;display: block">login</button>
                            <?php
// Start the session
session_start();
if(isset($_POST['submitlogin'])){
include "config.php";
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION["email-s"]=$email;
$query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
$res = $conn->query($query);
$numrows=mysqli_num_rows($res);
    if($numrows!=0)
{
    while($row = mysqli_fetch_assoc($res)) {
        $dbname=$row['email'];
        $dbpassword=$row['password'];
    }
    if($email == $dbname && $password == $dbpassword) {

    //    echo $dbname;
    //    echo $dbpassword;
    //   echo"logged in with :".$dbname." ";
        header("location:mail.php");

    }
} else
             {
                 echo '<span class="login-span">Invalid UserName or Password</span>';}
}
?> </form>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
