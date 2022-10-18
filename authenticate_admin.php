<?php include 'connection.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];
    if($role=="ADMIN")
        {
        $query = "select * from admin where username = '$username' and password = '$password'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>=1)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['adminusername'] = $username;


           
            header('location:admindashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
    if($role=="bidder")
        {
        $query = "select * from bidder where ppbno = '$username' and confirmpassword = '$password'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>=1)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['bidderusername'] = $username;
            header('location:bidderdashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
    if($role=="buyyer")
        {
        $query = "select * from buyyer where username = '$username' and confirmpassword = '$password'";
        $res = mysqli_query($conn,$query);
        if($res)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['buyerusername'] = $username;


            $query2 = "select tid from tradersregister where username = '$username' and confirmpassword = '$password'";
            $res2 = mysqli_query($conn,$query2);
            $row2 = mysqli_fetch_array($res2);
            $_SESSION['tid'] = $row2[0];

            
            header('location:buyyerdashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
}
?>