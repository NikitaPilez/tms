<?php

$codes = file_get_contents("https://gist.githubusercontent.com/anubhavshrimal/75f6183458db8c453306f93521e93d37/raw/f77e7598a8503f1f70528ae1cbf9f66755698a16/CountryCodes.json");
$arrayCodes = json_decode($codes, true);
$choiceCode = $_POST['code'];
if ($choiceCode) {
    foreach ($arrayCodes as $code) {
        if ($code['code'] == $_POST['code']) {
            $result = $code['dial_code'];
        }
    }
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
            <label>Enter course</label>
            <select class="form-control" name="code">
                <?php foreach ($arrayCodes as $code) : ?>
                    <?php if($choiceCode == $code['code']) : ?>
                        <option selected value="<?= $code['code'] ?>"><?= $code['name'] ?> </option>
                    <?php else: ?>
                        <option value="<?= $code['code'] ?>"><?= $code['name'] ?> </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <?php if ($result) : ?>
            <h3><?= $result ?> </h3>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>


