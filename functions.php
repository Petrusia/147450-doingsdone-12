<?php

/**
 * Функция должна принимать два аргумента:
 * 1.список задач в виде массива;
 * @param array $tasks
 * 2. название проекта.
 * @param string $projectName
 * Функция должна возвращать результат: число задач для переданного проекта.
 * @return int
 */
function getTasksCount(array $tasks, string $projectName): int
{
    $count = 0;
    foreach ($tasks as $task) {
        // Обойти массив и посчитать сколько его элементов
        // относятся к проекту из аргумента «название проекта»;
        if ($task['category'] === $projectName) {
            $count++;
        }
    }
    //Если для аргумента «название проекта» не найдено элементов в массиве,
    // то вернуть ноль. $count = 0;
    return $count;
}

