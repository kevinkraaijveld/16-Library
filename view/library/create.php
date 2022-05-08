<!--  Kevin Kraaijveld PHP Library / create.php -->
<br>
<br>
<h2>Toevoegen</h2>
<h3>Voeg een nieuwe boek toe</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'create' in Librarycontroller.php-->
  <form action="<?=URL?>library/create" method="post" autocomplete="off">
    <label for="fname">Naam</label>
    <input type="text" id="book_name" name="book_name" minlength="2" maxlength="40" placeholder="Nieuw boek" required>

    <label for="fname">Autheur</label>
    <input type="text" id="book_author" name="book_author" minlength="2" maxlength="40" placeholder="Schrijver" required>
    <br>
    <label for="fname">Beschrijving</label>
    <input type="text" id="book_comment" name="book_comment" minlength="2" maxlength="255" placeholder="Beschrijving">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/library/';" />
  </form>
</div>
