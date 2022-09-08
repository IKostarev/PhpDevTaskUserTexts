<?php

fwrite(STDOUT, "Введите тип разделителя для CSV файлов, возможные варианты - comma / semicolon: ");
$sep = trim(fgets(STDIN));

fwrite(STDOUT, "Введите тип задачи, которую требуется выполнить над текстами пользователей, возможные варианты - countAverageLineCount / replaceDates: ");
$quest = trim(fgets(STDIN));

if ($sep != "comma" && $sep != "semicolon") {
    exit("Введен неправильный тип разделителя, завершение скрипта");
}

if ($quest != "countAverageLineCount" && $quest != "replaceDates") {
    exit("Введен неправильный тип задачи, завершение скрипта");
}

fwrite(STDOUT, "Выбранный вами тип разделителя - $sep!" . PHP_EOL);

fwrite(STDOUT, "Выбранный вами тип задачи - $quest!" . PHP_EOL);