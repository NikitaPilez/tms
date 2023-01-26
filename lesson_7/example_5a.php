<?php

$values = [
    'USD' => 0.38,
    'EUR'=> 0.34,
    'PLN'=> 1.64,
];

if (isset($_GET['currency']) && isset($_GET['amount'])) {
    $result = $_GET['amount'] * $values[$_GET['currency']];
}

if (isset($_GET['rounding']) &&  $_GET['rounding'] == 'on') {
    $result = number_format($result, 2);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Exchange</title>
</head>
<body>
<div class="container">
    <form action="http://localhost:8000/example_5a.php" method="GET">
        <div class="form-group">
            <label>Enter amount</label>
            <input type="number" name="amount" class="form-control" placeholder="Enter amount">
        </div>
        <div class="form-group">
            <label>Select currency</label>
            <select class="form-control" name="currency">
                <option value="USD">Доллар</option>
                <option value="EUR">Евро</option>
                <option value="PLN">Злотый</option>
            </select>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="rounding" type="checkbox">
            <label class="form-check-label">
                Округлять до 2 символов после запятой?
            </label>
        </div>
        <?php if(isset($result)) : ?>
            <h1>Result <?= $result ?> </h1>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
