<?php
$programmingLanguages = ['PHP', 'JAVA', 'PYTHON'];

//accessing array
//using index (cannot use negative index and index out of bound)
echo $programmingLanguages[1];
$programmingLanguages[10] = "GO";

//to check if index exist use isset
var_dump(isset($programmingLanguages[10]));
var_dump(isset($programmingLanguages[7]));
var_dump(isset($programmingLanguages[1]));

//associative array (can be 2d as well)
$programmingLanguages = [
    'php' => '1.2',
    'c' => '1.2'
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
// var_dump($programmingLanguages);

//adding element to array
$programmingLanguages[] = 'C++';
array_push($programmingLanguages, 'C', 'ASSEMBLY', 'GO');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
//check elements in arrayx

//remove elements
//pop: remove last element
array_pop($programmingLanguages);//'GO' is removed
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
//shift: remove last element and reindex(rearrange index)
//unset element


