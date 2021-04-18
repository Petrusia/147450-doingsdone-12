<?php
// Добавьте массив проектов со следующими значениями:
// «Входящие», «Учеба», «Работа», «Домашние дела», «Авто».
$categories = [
    'inbox' => 'Входящие',
    'study' => 'Учеба',
    'work' => 'Работа',
    'home' => 'Домашние дела',
    'cars' => 'Авто'
];

//Добавьте двумерный массив,
// каждый элемент которого будет содержать информацию об одной задаче.
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date' => '2019-12-01',
        'category' => $categories['work'],
        'done' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date' => '2019-12-25',
        'category' => $categories['study'],
        'done' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date' => '2019-12-21',
        'category' => $categories['study'],
        'done' => true
    ],
    [
        'name' => 'Встреча с другом',
        'date' => '2019-12-22',
        'category' => $categories['inbox'],
        'done' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'date' => null,
        'category' => $categories['home'],
        'done' => false
    ],
    [
        'name' => 'Заказать пиццу',
        'date' => null,
        'category' => $categories['home'],
        'done' => false
    ]
];
