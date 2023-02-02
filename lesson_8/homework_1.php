<?php

$peoples = file("peoples.csv");

$data = array_map('str_getcsv', file('peoples.csv'));
$country = $_POST['country'];
$name = $_POST['name'];
$isFull = $_POST['full'] == "on";


if ($country || $name) {
    $searchPeoples = [];
    if ($country) {
        foreach ($data as $people) {
            if ($people[4] == $country) {
                $searchPeoples[] = $people;
            }
        }
    }
    if ($name) {
        foreach ($data as $people) {
            if (($isFull && ($people[0] == $name)) ||
                !$isFull && str_contains($people[0], $name)) {
                $searchPeoples[] = $people;
            }
        }
    }
} else {
    $searchPeoples = $data;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Codes</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <label>Enter country</label>
            <input type="text" name="country" value="<?php echo $country?>" class="form-control" placeholder="Enter country">
        </div>
        <div class="form-group">
            <label>Enter name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name?>" placeholder="Enter name">
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php if($isFull) : ?> checked <?php endif ?>" name="full" type="checkbox">
            <label class="form-check-label">
                Полное совпадение?
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">Region</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($searchPeoples as $people) : ?>
            <tr>
                <th scope="row"><?= $people[0] ?></th>
                <td><?= $people[1] ?></td>
                <td><?= $people[2] ?></td>
                <td><?= $people[3] ?></td>
                <td><?= $people[4] ?></td>
                <td><?= $people[5] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>


