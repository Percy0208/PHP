<?php session_start();
?>
<?php
if($_SESSION["check"]=="Yes"){
    echo"登入成功";
    echo"<a href='logout.php'>登出</a>";
    
}else{
    echo"非法進入網頁";
    header("Refresh:3;url=index.php");
}

?>
<html>
<head>
<meta charset="utf8">
</head>

<h2>
Author您好，歡迎進入論文投稿網頁
</h2>

<form action="showpaper.php" method="post">

論文標題：<br>
<input type="text" name="stitle" value="">
<br/>
作者姓名：<input type="text" name="sname" value="">
<br/>
作者Email：<input type="email" name="Email" value="">
<br/>
論文摘要：
<textarea name="Comment" value="" rows="15" cols="50">

</textarea>
<br/>
<input type="submit" value="提交">

<?php
include("footer.inc")
?>
</html>