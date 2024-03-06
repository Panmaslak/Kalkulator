<?php

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

      <style>
       .link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; 
            color: #fff; 
            text-decoration: none;
            border-radius: 5px; 
            transition: background-color 0.3s ease; 
    </style>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mt-5">Kalkulator</h2>
           <form action="calculate.php" method="post">
            <input type="number" name="num1">

            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
              </select>

            <input type="number" name="num2">

            <input type="submit" name="submit" value="Oblicz">
</form>

        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
