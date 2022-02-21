<?php

require_once ('connexion.php');

$request =$db->query('select * from category');
//retourne un type statement, et il faut donc utiliser une commande fetch pour l'afficher,

$categories = $request->fetchall(pdo::FETCH_ASSOC);
// on utilise fetch_assoc pour afficher qu'une certaine partie
//foreach : puis ; remplace foreach {}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>

<th>#</th>
<th>Name</th>
<th>ACTION</th>
</tr>

<?php foreach($categories as $category): ?>
    <tr>
        <td><?php echo $category['id'] ?></td>
        <td><?php echo $category['name'] ?></td>
        <td></td>
    </tr>
    <?php endforeach; ?>



</table>




</body>
</html>