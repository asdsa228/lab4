<?php
echo "<b>Вивід масивів</b>";
echo "<br>";
$array1 = [1, 2, 3, 4, 5, 2, 3];
$array2 = [3, 4, 5, 6, 7, 5, 6];

echo "Масив 1: ";
print_r($array1);
echo "<br>";

echo "Масив 2: ";
print_r($array2);
echo "<br>";
echo "<br>";

echo "<b>Прибирання дублікатів у кожному масиві</b>";
echo "<br>";
$array1Unique = array_unique($array1);
$array2Unique = array_unique($array2);

echo "Масив 1: ";
print_r($array1Unique);
echo "<br>";
echo "Масив 2: ";
print_r($array2Unique);
echo "<br>";
echo "<br>";

echo "<b>Підрахунок кількості дублюючих елементів між двома масивами</b>";
echo "<br>";
$duplicates = array_intersect($array1Unique, $array2Unique);
$duplicateCount = count($duplicates);

echo "Дублюючі елементи між масивами: ";
print_r($duplicates);
echo "<br>";
echo "Кількість дублюючих елементів: $duplicateCount\n";
echo "<br>";
echo "<br>";

echo "<b>Злиття масивів і прибирання дублікатів</b>";
echo "<br>";
$mergedArray = array_unique(array_merge($array1Unique, $array2Unique));


print_r($mergedArray);
echo "<br>";
echo "<br>";

echo "<b>Зворотній порядок елементів масиву за допомогою foreach</b>";
echo "<br>";

$reversedArray = [];
foreach ($mergedArray as $value) {
    array_unshift($reversedArray, $value);
}

print_r($reversedArray);
?>
