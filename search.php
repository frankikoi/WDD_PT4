<?php
    session_start();
    $email = $_SESSION['email'];
    echo "<script type='text/javascript'>alert('Welcome $email');</script>";

?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Student Record Lists</title>
        <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form method="post" action="lookup.php">
        <h1>SEARCH FOR RECORD</h1>
        <input type="text" name = "search"/>
        <input type="submit" name ="submit" value="Search"/>
        </form>
        <a href = "index.html">Logout</a></div>
      <h3> Student Records </h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
            
        </div>
    </body>
    </html>