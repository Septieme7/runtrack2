<?php
function estPremier($nombre) {
    if ($nombre < 2) return false;
    if ($nombre == 2) return true;
    if ($nombre % 2 == 0) return false;
    
    for ($i = 3; $i <= sqrt($nombre); $i += 2) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo "$i<br />";
    }
}
?>