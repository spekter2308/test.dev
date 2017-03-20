<?php

    echo '<h1>Типи даних - variables.php</h1>';

    // Типи змінних

    $integer = 10;
    $double  = 20.5;
    $string  = 'строкова змінна';
    $boolean = true;
    $null    = null;                        //спеціальне значення null
    $array   = array();                     //масив

    /*<-------------------------------->*/

    /*
     * $objectLink                          //посилання на об*єкт
     * $resourse = imageCreate();           //ресурс
     */

    echo '$integer = ' . $integer . '<br />';
    echo '$double =' . $double . '<br />';
    echo '$string =' . $string . '<br />';
    echo '$boolean =' . $boolean .'<br />';
    //echo '$null =' . $null . '<br />';
    //echo '$array =' . $array . '<br />';

    echo '<p><h2>Перевірка на існування - isset()</h2>';

    echo 'Перевірка змінної $integer; isset($integer) = ' . isset($integer) . '<br>';
    echo '</p>';

    //Визначення типу змінної
    echo '<p><h2>Перевірка типу змінної $integer та отримання даних про тип $array</h2>';
    if(is_integer($integer))
    {
        echo '$integer - ціле число<br />';
    }
    else
    {
        echo 'змінна $integer не є цілим числом<br />';
    }
    echo 'Змінна масив має тип - ' . gettype($array) . '<br />';
    echo '</p>';

    echo '<p><h2>Перетворення типів</h2>';

    $newVar = (string)$integer;
    echo 'нова змінна має тип - ' . gettype($newVar) . '<br>';
    if(is_integer($newVar))
    {
        echo 'змінна $newVar є цілим числом<br>';
    }
    else
    {
        echo 'змінна $newVar не є цілим числом<br>';
    }
    echo '</p>';

    //Константи
    echo '<p><h2>Константи</h2>';
    define('MY_INTEGER_CONST', 100);
    echo 'Константа MY_INTEGER_CONST = ' . MY_INTEGER_CONST . '<br>';
    echo '</p>';
?>