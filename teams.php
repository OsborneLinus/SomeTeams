<?php

$teams = [
    'Arsenal' => [
        'league' => 'Premier league',
        'last-time-champions' => 2004,
        'city' => 'London',
        'url' => 'https://www.arsenal.com/'
    ],
    'Aston Villa' => [
        'league' => 'Premier league',
        'last-time-champions' => 1981,
        'city' => 'Birmingham',
        'url' => 'https://www.avfc.co.uk/'
    ],
    'Manchester City' => [
        'league' => 'Premier league',
        'last-time-champions' => 2023,
        'city' => 'Manchester',
        'url' => 'https://www.mancity.com/'
    ],
    'Newcastle' => [
        'league' => 'Premier league',
        'last-time-champions' => 1927,
        'city' => 'Newcastle',
        'nickname' => 'Magpies',
        'url' => 'https://www.nufc.co.uk/'
    ],
    'Chelsea' => [
        'league' => 'Premier league',
        'last-time-champions' => 2017,
        'city' => 'London',
        'url' => 'https://www.chelseafc.com/en'
    ],
    'Watford' => [
        'league' => 'Championship',
        'last-time-champions' => null,
        'city' => 'London',
        'url' => 'https://www.watfordfc.com/'
    ],
    'Brighton' => [
        'league' => 'Premier league',
        'last-time-champions' => null,
        'city' => 'Brighton',
        'url' => 'https://www.brightonandhovealbion.com/'
    ],
];

$numberOfTeams = count($teams); 

echo "The number of Teams in the in the Premier League based on the information given is " . $numberOfTeams . "";

echo "Cities of the teams are: <br>";

foreach($teams as $team => $teaminfo) {
    $city = $teaminfo['city'];
    echo "$team: $city <br>"; 
}