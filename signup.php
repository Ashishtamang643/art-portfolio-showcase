<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up / Login</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h2 id="form-title">Sign Up</h2>
            <form id="auth-form" action="signup.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="password">confirm Password:</label>
                <input type="password" id="confirmpasword" name="confirmpassword" required>

                <label for="password">COntactNO:</label>
                <input type="text" id="contactno" name="contactno" required>

                
                <select name="role" id="role1">
                    <option disabled selected>Select an option</option>
                    <option value="viewer">Viewer</option>
                    <option value="artist">Artist</option>
                </select>
                
                
                

                
                <div class="ifArtist">
        <label for="Bio">Bio:</label>
        <input type="text" id="Bio" name="Bio" >

        <label for="profile">Profile:</label>
        <input type="text" id="profile" name="profile" >
    </div>

                <button id="demo" type="submit" >Submit</button>
                <p id="toggle-form">Already have an account? <a href="#" id="toggle-link">Login</a></p>

                <div id="form-messages"></div>
            </form>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>


<?php
    if(isset($_POST['email'])){
        include('dbconnect.php');
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirmpassword'];
        $contactno=$_POST['contactno'];
        $select=$_POST['role'];
        $bio=$_POST['Bio'];
        $profile=$_POST["profile"];

        $sql = "INSERT INTO users('email','password','contact_no')
VALUES ($email,$password, $contactno)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

        
    }


?>
