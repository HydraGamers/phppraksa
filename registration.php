<?php
    include_once './header.php';
?>
<h1>Registracija</h1>

<form action="user_insert.php" method="post">
    <label>Ime</label>
    <input type="text" name="first_name" placeholder="Vnesi ime" required="required" /><br />
    <label>Priimek</label>
    <input type="text" name="last_name" placeholder="Vnesi priimek" required="required" /><br />
    <label>E-pošta</label>
    <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" /><br />
    <label>Geslo</label>
    <input type="password" name="pass1" placeholder="Vnesi geslo" required="required" /><br />
    <label>Geslo (ponovitev)</label>
    <input type="password" name="pass2" placeholder="Vnesi geslo" required="required" /><br />
    <input type="submit" value="Registriraj" />
</form>



<?php
    include_once './footer.php';
?>