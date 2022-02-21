<?php

/* connection à la base de donné*/
require_once ('connexion.php');

/*verif de la conncetion*/
/*echo get_class ($db);exit; */

if(!isset($_POST ['name']) || empty($_POST['name'])){
    echo 'le nom est obligatoire !';
    exit;
}

$name=$_POST['name'];


/*print_r($_POST); */

$db ->query('insert into category (name) value  ("'.$name.'")');




