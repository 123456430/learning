<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
echo "ФИО";
echo "<input tupe = 'text'>" . '<br>';
echo "дата рождения";
echo "<input tupe = 'text'>" . '<br>';
   ?>
   <?php
   echo "<button> нажми меня</button>";
   ?>
   <form method="post">
    <button type="submit" name="button>нажми меня</button>;
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    error_reporting(E_ALL); 
    ?>
  <?php
  try {
      // подключаемся к серверу
      $conn = new PDO ("mysql:host = 127.0.0.1;port=3306; mypassword = ");  
      echo "Database connection established";
    }
    catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>
$sth = $dbh->prepare("SELECT * FROM `category` WHERE `id` = :id");
$sth->execute(array('id' => '21'));
$array = $sth->fetch(PDO::FETCH_ASSOC);
print_r($array);