<?php
/*  Kevin Kraaijveld PHP LibraryController
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit linkt de controller met de model
require(ROOT . "model/LibraryModel.php");

// Dit toont alle boeken in de view/index.php
function index()
{
	render("library/index", // Dit toont de index.php in de view
		array(
			'books' => getAllBooks()  // Voert de 'getAllBooks' functie uit in de Model.php
		)
	);
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word uitgevoerd als je in de create.php op versturen klikt
function create(){
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data=array(
			'book_name' => $_POST['book_name'],
			'book_author' => $_POST['book_author'],
			'book_comment' => $_POST['book_comment']
		);
			newBook($data); // Dit voert de 'newBook' functie in de model uit.
				echo "<script>alert('Boek toegevoegd'); window.location = '/library/';</script>";
	}
	render("library/create"); // Dit toont de create.php
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de index.php op verwijderen klikt
function delete($id){
		$book = getBookById($id);
	render("library/delete", ['book' => $book]); // Dit toont de delete.php
}

function deleteThis($id){
		deleteBook($id); // Dit voert de 'deleteBook' functie in de model uit.
	echo "<script>alert('Boek verwijderd'); window.location = '/library/';</script>";
}


/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de index.php op een naam klikt
function edit($id){
		$book = getBookById($id);
	render("library/edit", ['book' => $book]); // Dit toont de edit.php
}

// Dit word uitgevoerd als je in de edit.php op opslaan klikt
function saveEdit(){
		update($_POST);
	echo "<script>alert('Boek is aangepast'); window.location = '/library/';</script>";
}

// /*Made by Kevin Kraaijveld*/
