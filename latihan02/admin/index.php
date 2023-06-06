<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <form action="ceklogin.php" method="post">
            <?php
                session_start();
                session_destroy();
                if(isset($_SESSION['pesan'])){
                    echo $_SESSION['pesan'];
                }else{
                    session_unset();
                }
            ?>
            <div class="col"></div>
            <div class="col">
                <div class="mb-3">
                    <label for="txt_user">Username</label>
                    <input type="text"  id="txt_user" name="txt_user">
                </div>
                <div class="mb-3">
                    <label for="txt_psw">Password</label>
                    <input type="password"  id="txt_pasw" name="txt_pasw">
                </div>
                    <button type="submit"  name="btn_login">Login</button>
            </div>
            <div class="col"></div>
        </form>
    </body>
</html>