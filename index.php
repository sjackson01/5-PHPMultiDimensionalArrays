<?php
/* 
    !Multi-Dimensional Arrays! 
    Seperate blocks of code.
    Move comment arrows
    in order review by section.
*/

//Add array to $list mulit-dimensional array 
$list[] = [
    'title' => 'Laundry',
    'priority' => 2,
    'due' => '',
    'complete' => true,//End with comma to allow easy additions
];

//Add array to $list milti-dimeional array
$list[] = [
    'title' => 'Clean out refrigerator',
    'priority' =>  3,
    'due' => '07/20/2016',
    'complete' => false,
];

//Create multi-dimensional array $list
//No longer necessary whe $task removed
//$list = array($task1, $task2);

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


//Access title of first task
echo $list[0]['title'];//1st array key 'title; for inner array


//Example from practical exercise  
$contacts [] = [
  'name' => 'Alena Holligan', 
  'email' => 'alena.holligan@teamtreehouse.com',
];
$contacts [] = [
  'name' => 'Dave McFarland', 
  'email' => 'dave.mcfarland@teamtreehouse.com',
];
$contacts [] = [
  'name' => 'Treasure Porth',
  'email' => 'treasure.porth@teamtreehouse.com',
];
$contacts [] = [
  'name' => 'Andrew Chalkley',
  'email' => 'andrew.chalkley@teamtreehouse.com',
];

//Interesting Strings
echo "<ul>\n";
echo "<li>" . $contacts[0]["name"] . " : " . $contacts[0]["email"] . "</li>\n";
echo "<li>" . $contacts[1]["name"] . " : " . $contacts[1]["email"] . "</li>\n";
echo "<li>" . $contacts[2]["name"] . " : " . $contacts[2]["email"] . "</li>\n";
echo "<li>" . $contacts[3]["name"] . " : " . $contacts[3]["email"] . "</li>\n";
echo "</ul>\n";
<------*/
?>