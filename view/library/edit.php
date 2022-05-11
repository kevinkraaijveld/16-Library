<?php
$id = $book[0]['book_id'];
$data = $book[0];
?>
<br>
<br>
<h2>Bewerken</h2>
<h3>Boek bewerken: <?=$book[0]['book_name']?></h3>
<div>
<!-- Dit formulier gaat naar de functie 'saveEdit' in Birthdayscontroller.php-->
<form action="<?=URL?>library/saveEdit" method="post" autocomplete="off">

    <label for="fname">Titel</label>
    <input type="text" name="book_name" value="<?echo $data['book_name'];?>" required>
    <label for="fname">Schrijver</label>
    <input type="text" name="book_author" value="<?echo $data['book_author'];?>" required>
    <br>
    <label for="fname">Beschrijving</label>
    <input type="text" name="book_comment" value="<?echo $data['book_comment'];?>">

        <input type="hidden" name="id" value="<?= $data['book_id'] ?>">

    <input type="submit" value="Opslaan">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/examen/';" />
  </form>
</div>
