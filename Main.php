<?php
include "database.php";

try {
  $search = $_POST['search'];
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $faculty = $_POST['faculty'];
  $group = $_POST['group'];

  $sql = "INSERT INTO `student` (`id`, `surname`, `name`, `faculty`, `groupp`) VALUES (NULL, :surname, :name, :faculty, :group)";
  $stmt = $dbh->prepare($sql);

  $stmt->bindParam(':surname', $surname);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':faculty', $faculty);
  $stmt->bindParam(':group', $group);
  $stmt->execute();

 // echo "Дані успішно додано";
} catch(PDOException $e) {
 // echo "Помилка: " . $e->getMessage();
}

$dbh = null; 

?>
<!DOCTYPE html>
<html lang="uk-UA">
<head>
  <title>Dkr_</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ДКР  курсу 'Internet-технології' поток КІУКІз-21">
  <link href="css//stly.css" type="text/css" rel="stylesheet">
  <link href="css//styly.css" type="text/css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img//12345.png">
</head>
<body>
  <div class="header">
      <h1 >...</h1>
  </div>
  <div class="navbar">
    <a href="Main.php">Головна</a>
    <a href="result.php">Результат</a>
  </div>
  <div class="row">
    <div class="side">
      <p class="task"> На сторінці знаходиться набір полів для введення даних про студентів - прізвище, факультет, група. Реалізувати можливість збереження цих даних у БД.</p>
    </div>
    <div class="main">
      <p class="task"> Інформація про студента: </p>
      <form action="" method="POST">
        <div class="info">
          <label >Призвище:</label>
          <input type="text" name="surname">
          <label >Ім'я:</label>      
          <input type="text" name="name">
          <label >Факультет:</label>
          <input type="text" name="faculty">
          <label >Група:</label>
          <input type="text" name="group">
          <input type="submit" name="search">
        </div>  
      </form>
    </div>
  </div>

  <div class="footer">
    <h2>ДКР </h2>
    
  </div>
</body>
</html>