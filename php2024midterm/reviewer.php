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
Reviewer您好，歡迎進入論文評論網頁
</h2>

<form action="showreview.php" method="post">

論文評審決定：
<input type="radio" name="sdecide" value="Accept">Accept
<input type="radio" name="sdecide" value="Minor Revision">Minor Revision
<input type="radio" name="sdecide" value="Major Revision">Major Revision
<input type="radio" name="sdecide" value="Reject">Reject
<br/>
論文評論評語：
<textarea name="Comment" value="" rows="15" cols="50">

</textarea>
<br/>
<input type="submit" value="提交">

<?php
include("footer.inc")
?>
</html>