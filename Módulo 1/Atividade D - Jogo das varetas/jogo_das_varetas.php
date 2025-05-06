<?php
$int_N = intval(trim(fgets(STDIN)));

$total_pairs = 0;

for ($i = 0; $i < $int_N; $i++) {
    [$length, $count] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $pairs = intdiv($count, 2);
    $total_pairs += $pairs;
}
$rectangles = intdiv($total_pairs, 2);

echo $rectangles . "\n";
?>
