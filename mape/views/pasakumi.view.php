<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasakumi</title>
</head>
<body>
    
<h1>Posts</h1>

<ul>
<?php foreach($pasakumi as $pasakums) { ?>
  <li> <?= $pasakums["date_and_time"]. "/". ["title"]."/". ["venue"] . "/"    ?> </li>
<?php } ?>
</ul>

</body>
</html>