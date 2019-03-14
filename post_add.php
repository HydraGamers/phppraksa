<?php
    include_once './header.php';
?>
<h1>Dodaj objavo</h1>

<form action="post_insert.php" method="post">
    <label>Naslov</label>
    <input type="text" name="title" required="required" />
    <label>Vsebina</label>
    <textarea name="content" cols="8" rows="10"></textarea>
    <br />
    <input type="submit" value="Shrani" />
</form>


<?php
    include_once './footer.php';
?>