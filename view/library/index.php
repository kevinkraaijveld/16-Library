<!--  Kevin Kraaijveld PHP Kalender / index.php -->
<h3>Library</h3>
<br><br>
<table class="sortable">
	<thead>
		<tr>
			<th>Naam</th>
			<th>Autheur</th>
			<th  class='comment'>Beschrijving</th>
			<th class="sorttable_nosort" colspan="2"> </th>
		</tr>
	</thead>
<tbody>
	<?php
  foreach ($books as $book) {
  echo "<tr>";
  echo "<td>" . $book['book_name'] .  "</td>";
  echo "<td>" . $book['book_author']  . "</td>";
  echo "<td>" . $book['book_comment'] . "</td>";

  echo "<td class='center'>" . "<a href='" . URL . "library/edit/" . $book['book_id'] . "'>Bewerken</a></td>";
  echo "<td class='center'>" . "<a href='" . URL . "library/delete/" . $book['book_id'] . "'>Verwijderen</a></td>";
  echo "</tr>";
  ?>
  <?php } ?>
</tbody>

<main>
<a id='createNew' href='<?=URL?>library/create'>+ Voeg een boek toe</a>
</main>
