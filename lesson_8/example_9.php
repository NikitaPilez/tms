<?php

$trains = [
    'economy' =>  [
        'name' => 'Economy train',
        'speed' => 90,
        'distance' => 1200,
    ],
    'light' =>  [
        'name' => 'Light train',
        'speed' => 120,
        'distance' => 1500
    ],
    'business' => [
        'name' => 'Business train',
        'speed' => 150
    ],
    'premium' => [
        'name' => 'Premium train',
        'speed' => 220
    ]
];

$cities = [
    'Warshaw' => 600,
    'Vienna' => 1200,
    'Paris' => 2100,
    'Barselona' => 3000
];

$choiceCity = $_POST['city'];
$choiceTrain = $_POST['train'];

if ($choiceCity && $choiceTrain) {
    if (!array_key_exists('distance', $trains[$choiceTrain]) || $cities[$choiceCity] < $trains[$choiceTrain]['distance']) {
        $time = number_format($cities[$choiceCity] / $trains[$choiceTrain]['speed'], 2);
        $information = 'Time - ' . $time . 'h';
    } else {
        $information = 'Long way';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Trip</title>
</head>
<body>
<div class="container">
    <form action="http://localhost:8000/example_9.php" method="POST">
        <div class="form-group">
            <label>Choice train</label>
            <select class="form-control" name="train">
                <?php foreach ($trains as $key => $train) : ?>
                    <?php if($choiceTrain == $key) : ?>
                        <option selected value="<?= $key ?>"><?= $train['name'] . ', speed - ' . $train['speed']?></option>
                    <?php else: ?>
                        <option value="<?= $key ?>"><?= $train['name'] . ', speed - ' . $train['speed']?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Choice city</label>
            <select class="form-control" name="city">
                <?php foreach ($cities as $key => $city) : ?>
                    <?php if($choiceCity == $key) : ?>
                        <option selected value="<?= $key ?>"><?= $key . ', distance - ' . $city  . 'km'?></option>
                    <?php else: ?>
                        <option value="<?= $key ?>"><?= $key . ', distance - ' . $city  . 'km'?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if(isset($information)) : ?>
        <h3>Result <?= $information ?> </h3>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
