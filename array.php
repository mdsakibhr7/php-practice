<?php
$array = array('myName' => 'Becca', 'favColor' => 'violet', 'favMovie' => 'Empire Strikes Back', 'favBook' => 'Lullaby', 'favWeb' => 'twitter.com');

echo "<ul>";

foreach ($array as $key => $value) {
    echo "<li>";
    echo $key . ':- ' . $value . '<br>';
    echo "</li>";
}
echo "</ul>";
