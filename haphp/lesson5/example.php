<?php  $users = require  'core/data.php';
       require  'core/fonctions.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach (getAllNames($users) as $item):?>
<h2><?= $item ?></h2>
<?php endforeach; ?>
</body>
</html>
