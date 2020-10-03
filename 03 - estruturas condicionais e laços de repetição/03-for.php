<?php
for ($i = 0; $i <= 10; $i++) {
    echo 2*$i."<br>";
}

for ($x = 0; $x <= 1000; $x+=5) {
    if ($x >= 200 && $x <= 800) {
        continue;
    }
    if ($x === 900) {
        break;
    }

    echo $x."<br>";
}

echo "<select>";
for ($i = date("Y"); $i >= date("Y")-100; $i--) {
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";
?>