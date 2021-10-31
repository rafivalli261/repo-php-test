<?php 
    require 'functions.php';
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        
        //cek username
        if(mysqli_num_rows($result) == 1){

            //cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify ($password , $row["password"]) ){
                // kalo pake header internal server error, 500
                // header("Location : admin.php", true);
                // exit;
                echo "
                    <script>
	                    // alert('Login Sukses!');
	                    document.location.href = 'admin.php';
                    </script>
                    "; 
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="username">Username : </label></td>
                <td><input type="text" name="username" id="username" required autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="password">Password : </label></td>
                <td><input type="password" name="password" id="password" required autocomplete="off"></td>
            </tr>
        </table>
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>