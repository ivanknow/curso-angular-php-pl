<?php
require '../classes/CountryRepository.php';

header('Content-type: application/json');

$contries = CountryRepository::getCountries();

echo json_encode($contries);