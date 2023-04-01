<html>
<title>Dashboardy</title>
<link rel="stylesheet" a href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery/jquery.js"></script>
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" a href="custom/custom.css">
<link rel="stylesheet" a href="google/font.css">

<div class="container mt-3">
    <div class="row justify-content-center"">
        <div class="col-md-5 mt-4">
            <div class="card shadow mt-3 py-3">
                <div class="card-body">
                    <form action=""method="POST">
                        <h1 class="text-secondary">Login</h1><hr class="mt-4">

                        <div class="form-group mt-2">
                            <p class="text-secondary">Help support contact system admin: +255675839840, mail.admin@company.go.tz</p>
                        </div>

                        <div class="form-group mt-4">
                            <input type="text"name="username"placeholder="username"class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <input type="text"name="password"placeholder="password"class="form-control">
                        </div>

                        <button type="submit" name="submit"class="btn  shadow btn-secondary px-4 mt-2 w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$name="alice";
$pass=1234;
if(isset($_POST['submit']))
{
    $username=null;
    $password=null;
    if(isset($_POST['username']))
    {
        $username=$_POST['username'];
    }
    if(isset($_POST['password']))
    {
        $password=$_POST['password'];
    }
   if(empty($username)||empty($password))
   {
    echo
    "
    <script>
    swal(
        {
        title:'Notification',
        text:'username and password are required',
        icon:'error'
        }
    )
    </script>
    ";
   }
   elseif($username==$name && $pass==$pass)
   {
    echo
    "
    <script>
    swal(
        {
        title:'Notification',
        text:'welcome ".$username."' ,
        icon:'success'
        }
    )
    </script>
    ";
   }
   else
   {
    echo
    "
    <script>
    swal(
        {
        title:'Notification',
        text:'user  ".$username." does not available' ,
        icon:'warning'
        }
    )
    </script>
    ";
   }
}

?>

</html>