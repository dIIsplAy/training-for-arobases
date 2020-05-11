<?php
require_once 'functions.php';
define('JOURS', [
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
    'samedi',
    'dimanche'
]);

define('CRENEAUX', [
    [
        [8, 12],
        [14, 19]

    ],
    [
        [8, 12],
        [13, 18]

    ],
    [
        [9, 12],

    ],
    [
        [8, 12],
        [15, 19]

    ],
    [
        [8, 12],
        [14, 19]

    ],
    [
        [8, 10],

    ],

    [],
    [],




]);



define('CHAMPIONS',[
   'Yasuo' => ['desc' => 'Le disgracie','nom'=>'Yasuo', 'lane' => 'midlane','toplane','adc', 'type' =>'melee'],
    'Zed' =>['desc' => 'Maitre des ombres','nom'=>'Zed', 'lane' => 'midlane', 'type' =>'assassin'],
    'LeBlanc'=>['desc' => 'Manipulatrice','nom'=>'LeBlanc', 'lane' => 'midlane', 'type' =>'mage','assassin'],

    
]);