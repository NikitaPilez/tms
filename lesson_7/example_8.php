<?php

$date = $_POST['date'];
$time = $_POST['time'];

$timeInSeconds = strtotime($date . ' ' . $time);
$diff = ceil(($timeInSeconds - time()) / 60 / 60 / 24);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Time</title>
</head>
<body>
<div class="container">
    <form action="http://localhost:8000/example_8.php" method="POST">
        <div class="form-group">
            <label>Choice time</label>
            <input type="time" value="<?php echo $time?>" name="time" class="form-control" placeholder="Choice time">
        </div>
        <div class="form-group">
            <label>Choice date</label>
            <input type="date" name="date" value="<?php echo $date?>" class="form-control" placeholder="Choice date">
        </div>
        <h3><?php if($diff) echo $diff?></h3>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
