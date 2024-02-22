<?php
if(isset($_POST['login'])){
    include('connection.php');
    
    $name = $_POST['myname'];
    $username = $_POST['myusername'];
    $password = $_POST['mypassword'];

    $insert = "insert into students(name,username,password) values('$name','$username','$password')";
    $sql1 = mysqli_query($conn,$insert);
    if(!$sql1){
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="loginform.php" method="POST">
        <table>
            <caption>students login page</caption>
            <tr>
                <td> Name:</td>
                <td><input type="text" name="myname"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="myusername"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="text" name="mypassword"></td>
            </tr>
            <tr>
                <td colspan=2 align="right" ><input type="submit" name="login" value="login"></td>
            </tr>

        </table>
    </form>
   
</body>
</html>