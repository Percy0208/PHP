<html>

<?php
include("setting.inc");
?>
<h2>
高大資管論文投稿系統
</h2>

<form action="check.php" method="get">

請選擇您的角色：
<select name="Character">
<option value="Chair">Chair
<option value="Reviewer">Reviewer
<option value="Author">Author
</select>
<br/>
帳號：<input type="text" name="uId"><br/>
密碼：<input type="password" name="uPwd" required><br/>
<input type="submit" value="提交">
</form>

<?php
include("footer.inc")
?>
</html>