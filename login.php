<?php

?>



<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar"> 
        <h1>Login Here</h1>
        
    <form action="login.php" method="post" name="form1">
        <table width="25%">
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
    <a href="register.php">Don't have an account?</a>

</div>
</body>
</html>

<?php

session_start();

// Create database connection using config file
include_once("dbconfig.php");


if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'email', 'password' from users
        where email='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: Goverment Documents Main Page.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>