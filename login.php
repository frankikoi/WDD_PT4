<?php 
require_once("connect.php");

if (isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $login_query = "SELECT email, password, firstname from users_tbl where email = '$user' AND password = '$pass'";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        include("search.php");
         $_SESSION['email'] = $user;
    }
    else {
        echo '<script> alert("Incorrect username or Password")</script>';
        include("index.html");
    }

}
else if (isset($_POST['register'])){
    include("Class_Registration.html");
}

?>