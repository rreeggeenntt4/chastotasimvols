<?php
function findSecondMostFrequentCharacter($str)
{
    $charCount = array();

    // Подсчет количества встреч каждого символа
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }

    // Сортировка массива по количеству встреч символов
    arsort($charCount);

    // Получение второго символа по встречаемости
    $keys = array_keys($charCount);
    if (count($keys) > 1) {
        return $keys[1];
    }

    return null; // Если второго символа нет
}

// Пример использования
$str = 'abccdccefffgihhhhhj';
$secondMostFrequentChar = findSecondMostFrequentCharacter($str);
echo "Второй по встречаемости символ: " . $secondMostFrequentChar;
