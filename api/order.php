<?php
/*
POST
--------
name
tel
addr
email
sum
*/


include_once "db.php";

$_POST['no']=date("Ymd").rand(100000,999999);
$_POST['cart']=serialize($_SESSION['cart']);
$_POST['acc']=$_SESSION['mem'];




$Orders->save($_POST);

//訂購完後將訂單清除避免重複購買
unset($_SESSION['cart']);

?>

<script>
    location.href="../index.php?order=success";

</script>