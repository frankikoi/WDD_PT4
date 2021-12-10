<?php 
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'it15_database');

$dbc = @mysqli_connect (DB_HOST, DB_USER,DB_PASSWORD, DB_NAME);

if(isset($_POST ['button'])){
    if($dbc){
        
        $input_password = $_REQUEST['input1_Password'];
        $input_fName = $_REQUEST['input2_fName'];
        $input_lName = $_REQUEST['input4_lName'];
        $input_email = $_REQUEST['input5_email'];
        $input_studentID = $_REQUEST['gender'];
        $input_birthDay = $_REQUEST['input7_birthDay'];
        $ad1 = $_REQUEST['input8_ad1'];
        $ad2 = $_REQUEST['input9_ad2'];
        $ad3 = $_REQUEST['input10_ad3'];
        $ad0 = $_REQUEST['input11_ad0'];
        $input_address = $ad1 . " ". $ad2 . " " . $ad3 . " " . $ad0;

        $query = "INSERT INTO users_tbl(firstName, lastname,gender, birthdate,email,address,password,regs_date) VALUES ('$input_fName','$input_lName','$input_studentID','$input_birthDay','$input_email','$input_address','$input_password',NOW())";
        $result =  @mysqli_query($dbc, $query);

        if (!$result) {
            echo  "<script>alert(Fail to add user)</script>";

        }
        else {
            include("index.html");
            echo '<script>alert("You are now Registered!")</script>';
            
        } 
    }
    else {
        exit(mysqli_connect_error());
    }
    mysqli_close($dbc);
    }
?>
