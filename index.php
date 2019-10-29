<?php
/* !Multi-Dimensional Array! */

//Add task 2 
$task1 = array (
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,//End with comma to allow easy additions
);

//Add  task 1 
$task2 = array (
    'title' => 'Clean out refrigerator',
    'priority' =>  3,
    'due' => '07/20/2016',
    'complete' => false,
);

//Create multi-dimensional array $list
$list = array($task1, $task2);

/*------>
//Remove arrow comments to vie multi-dimensional array notes
var_dump($list);
array(2) { //Array list has two 0 index key 1 index key
    [0]=> array(4) { //Array of 4 items
        ["title"]=> string(7) "Laundry" //Specific string key
        ["priority"]=> int(2) 
        ["due"]=> string(0) "" 
        ["complete"]=> bool(true)
     } 
    [1]=> array(4) {
         ["title"]=> string(22) "CLean out refrigerator" 
         ["priority"]=> int(3) 
         ["due"]=> string(10) "07/20/2016" 
         ["complete"]=> bool(false) 
        } 
    }
<------*/

//Access title of first task
echo $list[0]['title'];//1st array key 'title; for inner array
?>