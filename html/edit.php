<?php
    include '../../stock/php/connection.php';

    $id=$_GET['idu'];

    $query="select * from stocktbl where id='$id'";

    $processquery=mysqli_query($con,$query);

    while($result=mysqli_fetch_assoc($processquery)){

    

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

   <!--  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="../../stock/html/style.css">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to Stock please Register</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" >

                <div class="form-group">
                    <label>Enter Name :</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>" placeholder="Name" >
                </div>

                <div class="form-group">
                    <label>Enter Email :</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>" placeholder="Email" >
                </div>
                <div class="form-group">
                    <label>Enter Password :</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $result['password']; ?>" placeholder="Password" >
                </div>
                <br>
                <label>User Type</label>
                <select name="utype" >
                <option value="<?php echo $result['utype']; ?>">Choose User Type</option>
                 <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
                <br>
                <br>
                
               <!--  <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button> -->
               <input type="submit" name="submit">
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="../../stock/html/login.php">Already Have An Account</a>
            </form>

            <?php
        }

            ?>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $id=$_GET['idu'];

        $name=$_POST['name'];
        $email=$_POST['email'];
        $utype=$_POST['utype'];
        $password=$_POST['password'];

        $hashpass=password_hash($password,PASSWORD_BCRYPT);

        $query="update stocktbl set name='$name',email='$email',utype='$utype',password='$hashpass' where id='$id'";
        $processquery=mysqli_query($con,$query);
        header('location:../../stock/html/admin.php');
         


         
         

    }



?>





