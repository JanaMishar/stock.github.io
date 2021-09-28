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
            <h3>Add Stock</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                
            </p>
            
            <form class="m-t" role="form" method="post" >

                <div class="form-group">
                    <label>Enter Date :</label>
                    <input type="date" name="date" class="form-control" name="name" placeholder="Date" >
                </div>

                <div class="form-group">
                    <label>Enter  x axis :</label>
                    <input type="text" class="form-control" name="xaxis" placeholder="xaxis" >
                </div>

                 <div class="form-group">
                    <label>Enter  y axis :</label>
                    <input type="text" class="form-control" name="yaxis" placeholder="yaxis" >
                </div>
                
                <br>
                
                
                <br>
                <br>
                
               <!--  <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button> -->
               <input type="submit" name="submit">
                
                
            </form>
            
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>

<?php
    include '../../stock/php/connection.php';

    if(isset($_POST['submit'])){
            $date=date('y-m-d',strtotime($_POST['date']));
            $xaxis=$_POST['xaxis'];
            $yaxis=$_POST['yaxis'];

            $query="insert into stock(date,xaxis,yaxis) values('$date','$xaxis','$yaxis')";
            $processquery=mysqli_query($con,$query);

    }
    

?>




