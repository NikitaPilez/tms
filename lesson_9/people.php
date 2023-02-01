<?php

use lesson_9\People;
use lesson_9\PeopleHandler;

require_once ("People.php");
require_once ("PeopleHandler.php");

$peopleHandler = new PeopleHandler();
$peoplesInformation = $peopleHandler->getPeoplesFromFile('peoples.csv');

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
        <?php /** @var People $people */
        foreach ($peoplesInformation as $people) : ?>
            <tr>
                <th scope="row"><?= $people->getName() ?></th>
                <td><?= $people->getPhone() ?></td>
                <td><?= $people->getEmail() ?></td>
                <td><?= $people->getAddress() ?></td>
                <td><?= $people->getCountry() ?></td>
                <td><?= $people->getState() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
