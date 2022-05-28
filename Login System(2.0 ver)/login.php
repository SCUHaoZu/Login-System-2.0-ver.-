<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_css.css">
</head>
    <script>
        function validateForm(){
            var x=document.forms["login"]["username"].value;
            var y=document.forms["login"]["email"].value;
                if (x=="" || y==""){
                    alert("不能為空值!");
                    return false;
                }
        }
    </script>
    <?php
    //確認登入狀態
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: divide_button.html");
        exit;
    }
    ?>


<body>
    <form class='box' action='L_receive.php' method='POST' autocomplete="on">
        <h1>LOGIN</h1>
        <input type='text' name='username' placeholder='Username'>
        <input type='email' name='email'placeholder='Email'>
        <input type='submit' name='login' value='Login in'>
        <a href="register.html">註冊請點此</a>
    </form>

</body>  
</html>