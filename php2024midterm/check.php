<?php
include("setting.inc");
?>

<?php
$sId1="chair";
$sPwd1="123";
$sId2="reviewer";
$sPwd2="234";
$sId3="author";
$sPwd3="345";
$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];
if($sId1==$uId && $sPwd1==$uPwd && $_GET["Character"] == "Chair"){
    $_SESSION["check"]="Yes";
    setcookie("username",$uId,time()+3600*24*7); 
    header("Location:chair.php");
} elseif($sId2==$uId && $sPwd2==$uPwd && $_GET["Character"] == "Reviewer"){
    $_SESSION["check"]="Yes";
    setcookie("username",$uId,time()+3600*24*7); 
    header("Location:reviewer.php");
} elseif($sId3==$uId && $sPwd3==$uPwd && $_GET["Character"] == "Author"){
    $_SESSION["check"]="Yes";
    setcookie("username",$uId,time()+3600*24*7); 
    header("Location:author.php");
} else {
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

ob_flush();
?>
