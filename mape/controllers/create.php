<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) != "" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <= 255) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

  if (!Validator::string($_POST["date_and_time"], min: 1, max: 255)) {
    $errors["title"] = "date and time  invalid";
  }
  if (!Validator::number($_POST["title"], min: 1, max: 3)) {
    $errors["category-id"] = "Title cannot be empty or too long";
  }
  if (!Validator::number($_POST["venue"], min: 1, max: 3)) {
    $errors["category-id"] = "venue invalid";
  }

  if (empty($errors)) {
    $query = "INSERT INTO posts (date_and_time, title, venue)
              VALUES (:date_and_time, :title, :venue);";
    $params = [
        ":date_and_time" => $_POST["date_and_time"],
        ":title" => $_POST["title"],
        ":venue" => $_POST["venue"]
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
  }

  
}

$title = "Create a Pasakums";
require "views/create.view.php";