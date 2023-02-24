<?php // Arrays

/**
 * Array simple
 * Un array simple es aquel al que no le he definido ninguna key
 */
$array_simple = ['Javascript', 'Laravel', 'PHP'];

/**
 * Array asociativo
 * Un array asociativo es aquel al que le he definido una estructura
 * de llave - valor
 */
$array_asociativo = [
    'Frontend' => 'Javascript',
    'Framework' => 'Laravel',
    'Backend' => 'PHP'
];

echo "<pre>";
print_r($array_simple);
print_r($array_asociativo);

echo "</pre>";

foreach ($array_asociativo as $key => $value) {
    echo "$key: $value</br>";
}
