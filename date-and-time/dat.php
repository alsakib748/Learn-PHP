<?php 

// echo time().PHP_EOL;

// echo microtime(true);

// echo microtime(false);

// $st = microtime(true);

// printf("%10.20f",$st);

///================date============
// echo date('d/m/y');

// echo date('d/m/Y');

// echo date('d/F/Y');

// echo date('D/F/Y');

/// Check factorial program execution time

$startTime = microtime(true);
factorial(1000);
// sleep(2);
// sleep(3);
sleep(5);
$endTime = microtime(true);
$totalTime = $endTime - $startTime;
// printf("Total execution time : %d",$totalTime);
echo "Execution time : ".$totalTime;

function factorial($n){

    $fact = 1;

    for($i=1;$i<=$n;$i++){
        $fact = $fact * $i;
    }
    echo "factorial of {$n} is : ".$fact.PHP_EOL;
}

?>