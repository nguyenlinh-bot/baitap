<?php
require_once "modal/Aothur_Database.php";
$author_Database = new Author_Database();
if(isset($_POST['action'])){
    $action = $_POST['action'];
}
else if($_GET['action']){
    $action = $_GET['action'];
}

if($action == 'add'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];

    $author_Database->addAuthor($id, $name, $image);
    header("location: crudaothur.php");
    
}else if($action == 'delete'){
    $id = $_GET['id'];
    $author_Database->deleteAuthor($id);
    header("location: crudaothur.php");

}else if($action == 'update'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];

    $author_Database->updateAuthor($id, $name, $image);
    header("location: crudaothur.php");

}
?>