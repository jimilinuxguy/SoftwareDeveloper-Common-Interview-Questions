<?php



$graph = array(
            array(0, 1, 1, 0, 0, 0),
            array(1, 0, 0, 1, 0, 0),
            array(1, 0, 0, 1, 0, 0),
            array(0, 1, 1, 0, 1, 0),
            array(0, 0, 0, 1, 0, 1),
            array(0, 0, 0, 0, 1, 0),

         );
 
function init($visited, $graph){
 
    foreach ($graph as $key => $vertex) {
        $visited[$key] = 0;
    }
}
 
function breadthFirst($graph, $start){
 
    $visited = array();
    $queue   = array();
 
    init($visited, $graph);
    array_push($queue, $start);
    $visited[$start] = 1;
 
    while (count($queue)) {
        $t = array_shift($queue);
 
        foreach ($graph[$t] as $key => $vertex) {
            $temp = $key +1;
            if (!array_key_exists($temp, $visited) && $vertex == 1) {
                $visited[$temp] = 1;
                array_push($queue, $key);
            }
        }
    }
    return $visited;
}
 
$visited = breadthFirst($graph, 2);

echo '<pre>';
print_r($visited);