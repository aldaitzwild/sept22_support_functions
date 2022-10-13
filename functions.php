<?php

function makeALoop(int $start, int $end, int $step = 1) 
{  
    if($start < $end) {
        for ($i = $start; $i <= $end; $i = $i + $step) echo "[$i] ";
    } else {
        for ($i = $start; $i >= $end; $i = $i + $step) echo "[$i] ";
    }

    echo "<br><br>";
}

function makeAllLoops(array $loops)
{
    foreach($loops as $loop) {
        makeALoop($loop[0], $loop[1], $loop[2]);
    }
}