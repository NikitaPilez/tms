<?php

$distances = [
    'kilometr' => [
        'name' => 'Километр',
        'value' => 0.001,
        'code' => 'Км'
    ],
    'metr' => [
        'name' => 'Метр',
        'value' => 1,
        'code' => 'М'
    ],
    'santimetr' => [
        'name' => 'Сантиметр',
        'value' => 100,
        'code' => 'См'
    ],
    'fut' => [
        'name' => 'Фут',
        'value' => 3.28,
        'code' => 'Фт'
    ],
    'millimetr' => [
        'name' => 'Миллиметр',
        'value' => 1000,
        'code' => 'Мм'
    ],
    'dyum' => [
        'name' => 'Дюйм',
        'value' => 39.3,
        'code' => 'Д'
    ]
];

$value = $_POST['value'];
$fromValue = $_POST['fromValue'];
$toValue = $_POST['toValue'];

$countMeter = $value / $distances[$fromValue]['value'];
$answer = number_format($distances[$toValue]['value'] * $countMeter, 2) . ' ' . $distances[$toValue]['code'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Converter</title>
</head>
<body>
<div class="container">
    <form action="http://localhost:8000/example_10.php" method="POST">
        <div class="form-group">
            <label>Значение</label>
            <input type="number" name="value" value="<?php echo $value ?>" class="form-control" placeholder="Enter value">
        </div>
        <div class="form-group">
            <label>Choice from value</label>
            <select class="form-control" name="fromValue">
                <?php foreach ($distances as $key => $value) : ?>
                    <?php if($fromValue == $key) : ?>
                        <option selected value="<?= $key ?>"><?= $value['name']?></option>
                    <?php else: ?>
                        <option value="<?= $key ?>"><?= $value['name']?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Choice to value</label>
            <select class="form-control" name="toValue">
                <?php foreach ($distances as $key => $value) : ?>
                    <?php if($toValue == $key) : ?>
                        <option selected value="<?= $key ?>"><?= $value['name']?></option>
                    <?php else: ?>
                        <option value="<?= $key ?>"><?= $value['name']?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if(isset($answer)) : ?>
        <h3>Результат <?= $answer ?> </h3>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
