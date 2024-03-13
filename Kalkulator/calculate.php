<?php

$error_message = '';

function display_alert($message, $alert_type = 'danger') {
    echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">';
    echo '<div class="container mt-5">';
    echo '<div class="alert alert-' . $alert_type . '" role="alert">';
    echo $message;
    echo '</div>';
    echo '<a href="/calculator/index.php" style="display: block;">Powrót</a>';
    echo '</div>';
}

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error_message = 'Wprowadź prawidłowe numery';
    } else {
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
                    $error_message = 'Nie można dzielić przez zero.';
                }
                break;
            default:
                $error_message = 'Nieznany operator.';
        }
    }

    if ($error_message == '') {
        echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">';
        echo '<div class="container mt-5">';
        echo '<div class="alert alert-success" role="alert">';
        echo 'Wynik: <br>' . $result;
        echo '</div>';
        echo '<a href="/calculator/index.php" style="display: block;">Powrót</a>';
        echo '</div>';
    } else {
        display_alert($error_message);
    }
}

?>
