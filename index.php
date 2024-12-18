<?php
function fibonacci($terms) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Series: $first, $second";

    for ($i = 3; $i <= $terms; $i++) {
        $next = $first + $second;
        echo ", $next";
        $first = $second;
        $second = $next;
    }
}

fibonacci(10);
?>
