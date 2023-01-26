<?php

$firstVariable = $_POST['firstVariable'] ?? null;
$secondVariable = $_POST['secondVariable'] ?? null;

$action = $_POST['action'] ?? null;

if ($action && $firstVariable && $secondVariable) {
    $result = match($action) {
        'addition' => $secondVariable + $firstVariable,
        'subtraction' => $secondVariable - $firstVariable,
        'multiple' => $secondVariable * $firstVariable,
        'division' => $secondVariable / $firstVariable,
        default => 'Not found action'
    };
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
<div class="container">
    <form action="http://localhost:8000/example_2a.php" method="POST">
        <div class="form-group">
            <label>First variable</label>
            <input type="number" name="firstVariable" class="form-control" placeholder="Enter first variable" value="<?php echo $firstVariable?>">
        </div>
        <div class="form-group">
            <label>Second variable</label>
            <input type="number" name="secondVariable" class="form-control" placeholder="Enter second variable" value="<?php echo $secondVariable?>">
        </div>
        <div class="form-group">
            <label>Select action</label>
            <select class="form-control" name="action">
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select>
        </div>
        <?php if(isset($result)) : ?>
            <h3>Result <?= $result ?> </h3>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
</body>
</html>

