<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Method POST</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php
    if(isset($_POST["submit"])) {
        if($_POST["username"] == "mifu" && $_POST["password"] == "tanyabapakkau") {
            header("Location: admin.php");
            exit;
        } else {
            $error = true;
        }
    }
    ?>

    <?php if(isset($error)): ?>
        <p style="color: red;">Username dan password salah, silakan coba lagi!</p>
    <?php endif; ?>

    <form action="" method="POST">
        <table>
            <tr> 
                <td><label for="username">Username :</label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
