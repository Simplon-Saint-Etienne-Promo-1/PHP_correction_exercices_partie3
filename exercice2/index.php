<?php
$nb1 = 0;
$nb2 = random_int(1, 100);

for($i = 0; $i < 20; $i++) {
    echo $nb1 * $nb2 . '<br>';
    $nb1++;
}