<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
</head>
<?php
function alert($message){
    echo "<script>alert('$message');
    window.location.href='login.php';
    </script>";
    return false;
}

function success(){
    echo "<script>alert('login successful');
    </script>";
    header("refresh:0;url=divide_button.html",true);
    return true;
}
?>
<body>
<?php
require_once("connect.inc");

$username=$_POST["username"];
$email=$_POST["email"];

$sql="SELECT * FROM user_info WHERE username='$username'";
$result=mysqli_query($link,$sql);
if (mysqli_num_rows($result)==1){
    if ($email==mysqli_fetch_assoc($result)["email"]){
        $_SESSION["loggedin"]=true;
        $_SESSION["username"]=mysqli_fetch_assoc($result)["username"];//名字無法傳到welcome.php(疑似沒有傳到session)
        $_SESSION["email"]=mysqli_fetch_assoc($result)["email"];
        success();
    }
}
else{
    alert("姓名或信箱錯誤!!");
}



require_once("close_connect.inc");
?>
</body>
</html>