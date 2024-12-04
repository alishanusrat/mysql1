<?php
$number3 = null;

if(isset($_POST['submit'])){

$number1=$_POST['first_number'];
$number2=$_POST['second_number'];
$number3= $number1 + $number2;


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    SELECT * FROM `students` WHERE name="Robin;

    SELECT * FROM `students` WHERE name LIKE "%r" ;

     SELECT * FROM `students` WHERE name LIKE "r%n" ;

    SELECT * FROM `students` ORDER BY name DESC;

    UPDATE `students` SET name="Shani" WHERE id="2" ;

    SELECT * FROM `students` WHERE id BETWEEN 1 AND 2;

    ALTER TABLE students
    ADD f_name varchar(255);

    ALTER TABLE students
    DROP f_name ;

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>