<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasakumi</title>
</head>
<body>
    
<h1>Pasākumi</h1>

<ul>
<?php foreach($pasakumi as $pasakums) { ?>
  <li>
  <a href="/show?id=<?= $pasakums["id"] ?>"> <?= htmlspecialchars($pasakums["date_and_time"]). " / ". htmlspecialchars($pasakums["title"])." / ". htmlspecialchars($pasakums["venue"]) . " / "    ?> </a>
  <form style="display:inline-block" class="delete-form" method="POST" action="/delete">
      <input type="hidden" name="id" value="<?= $post["id"] ?>" />
      <button>delete</button>
    </form>
    </li>
<?php } ?>
</ul>

</body>
</html>