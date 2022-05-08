<?php
/*  Kevin Kraaijveld PHP LibraryModel
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'index' functie in de controller
function getAllBooks(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM books";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'delete' en de 'edit' functies in de controller
function getBookById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `books` where book_id = :book_id ";
	$query = $db->prepare($sql);
	$query->bindParam(":book_id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'create' functie in de controller
function newBook($data){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO books (book_name, book_author, book_comment)
	VALUES (:book_name, :book_author, :book_comment);");

		$sql->bindParam(':book_name',$data['book_name'],PDO::PARAM_STR);
			$sql->bindParam(':book_author',$data['book_author'],PDO::PARAM_INT);
				$sql->bindParam(':book_comment',$data['book_comment'],PDO::PARAM_INT);
	$sql->execute();
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'delete' functie in de controller

function deleteBook($id) {
	$db = openDatabaseConnection();
		$sql = $db->prepare("DELETE FROM books WHERE book_id = :id");
			$sql->bindParam(":id", $id);
	$sql->execute();
}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word aangeroepen door de 'saveEdit' functie in de controller
function update($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE books SET book_name = :book_name, book_author = :book_author, book_comment = :book_comment  WHERE book_id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":book_name", $answers['book_name']);
	$query->bindParam(":book_author", $answers['book_author']);
	$query->bindParam(":book_comment", $answers['book_comment']);
	$query->bindParam(":id", $answers['id']);
		$query->execute();
}

// /*Made by Kevin Kraaijveld*/
