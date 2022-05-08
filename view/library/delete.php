<?php
$id = $book[0]['book_id'];
$data = $book[0];
?>
<br>
<br>
<h2>Verwijderen</h2>
<h3>Boek verwijderen: <?=$book[0]['book_name']?></h3>
<div>
<!-- Dit formulier gaat naar de functie 'deleteThis' in Birthdayscontroller.php-->
  <form action="<?=URL?>library/deleteThis/<?=$book[0]['book_id']?>" method="GET" autocomplete="off">
    <label for="fname">Titel</label>
    <input type="text" name="book_name" placeholder="<?echo $data['book_name'];?>" readonly>
    <label for="fname">Schrijver</label>
    <input type="text" name="book_author" placeholder="<?echo $data['book_author'];?>" readonly>
    <br>
    <label for="fname">Beschrijving</label>
    <input type="text" name="book_comment" placeholder="<?echo $data['book_comment'];?>" readonly>

    <input type="submit" value="Verwijderen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/library/';" />
  </form>
</div>
