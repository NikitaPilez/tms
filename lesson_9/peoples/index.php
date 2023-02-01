<?php
use lesson_9\People;
use lesson_9\PeopleHandler;

require_once ("../People.php");
require_once ("../PeopleHandler.php");

$peopleHandler = new PeopleHandler();
$peoplesInformation = $peopleHandler->getPeoplesFromFile('../peoples.csv');
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Peoples</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Peoples</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>Phone</th>
						      <th>Email</th>
						      <th>Address</th>
						      <th>Country</th>
						      <th>State</th>
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
				</div>
			</div>
		</div>
	</section>
	</body>
</html>

