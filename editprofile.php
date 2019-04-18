<?php
    include_once './header.php';
	include_once './session.php';
	include_once './database.php';
?>

<form action="user_edit.php" method="post">
	<label>Ime</label>
    <input type="text" name="first_name" placeholder="Ime" required="required" value="<?php $query1 = "SELECT first_name FROM users WHERE id=$_SESSION[user_id] LIMIT 1"; mysqli_query($link, $query1);?> "/><br />
    <label>Priimek</label>
    <input type="text" name="last_name" placeholder="Priimek" required="required" /><br />
    <label>E-pošta</label>
    <input type="email" name="email" placeholder="E-Pošta" required="required" /><br />
	<input style="float: right" type="submit" value="Shrani spremembe" />
</form>
<br />
<form action="upload_image.php" method="post" enctype="multipart/form-data">
	<label>Spremeni Avatar:</label>
	<input type="file" name="fileupload" id="fileupload"><br /><br />
	<input style="float: right" type="submit" value="Shrani avatar" name="submitfile"/>
</form>
<br />
<form action="user_editpassword.php" method="post">
	<label>Staro Geslo</label>
    <input type="text" name="oldpass" placeholder="Staro geslo" required="required" /><br />
    <label>Novo Geslo</label>
    <input type="text" name="newpass" placeholder="Novo geslo" required="required" /><br />
    <label>Novo Geslo (Ponovitev)</label>
	<input type="text" name="newpass2" placeholder="Novo geslo (Ponovitev)" required="required" /><br /><br />
	<input style="float: right;" type="submit" value="Spremeni geslo" />
</form>

<?php
    include_once './footer.php';
?>