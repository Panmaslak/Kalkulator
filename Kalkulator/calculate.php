<?php

if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  if (!is_numeric($num1) || !is_numeric($num2)) {
?>
   <div class="container mt-5">
        <div class="alert alert-error" role="alert">
           Wprowadź prawidłowe numery         
         </div>
         <a href="/calculator/index.php" style="display: block;">Powrót</a>
<?php
    exit; 
  }

  switch ($operator) {
    case 'add':
      $result = $num1 + $num2;
      break;
    case 'subtract':
      $result = $num1 - $num2;
      break;
    case 'multiply':
      $result = $num1 * $num2;
      break;
    case 'divide':
      if ($num2 != 0) {
        $result = $num1 / $num2;
      } else {
?>      
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <div class="container mt-5">
        <div class="alert alert-danger" role="alert">
           Nie można dzielić przez zero.         
         </div>
         <a href="/calculator/index.php" style="display: block;">Powrót</a>
        </div>
        <?php
        exit; 
      }
      break;
    default:
    ?>
        <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Nie wolno dzielić przez zero          
        </div>
        <a href="/calculator/index.php" style="display: block;">Powrót</a>
    </div>

    <?php
      exit; 
  }
  ?>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            Wynik: <br><?php echo $result; ?>   
        </div>
        <a href="/calculator/index.php" style="display: block;">Powrót</a>
    </div>
<?php
}

?>
