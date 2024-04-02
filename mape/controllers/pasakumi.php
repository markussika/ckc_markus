<?php


require "Database.php";

$query = "SELECT * FROM pasakumi";
$config = require("config.php");
$db = new Database($config);
$params =[];



if (isset($_GET["id"]) && $_GET["id"] != "") {
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params[":id"] = $id;
  }

$pasakumi = $db
          ->execute($query, $params)
          ->fetchAll();
          
$title = "Pasakumi 🙂";

require "views/pasakumi.view.php";