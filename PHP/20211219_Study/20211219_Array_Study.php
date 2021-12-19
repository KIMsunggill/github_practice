<!--참고 동영상: https://www.youtube.com/watch?v=2eebptXfEvw&t=2247-->

<?php
$fruits = ['Banana', 'Apple', 'Orange'];
echo'<pre>';
var_dump($fruits);
echo'</pre>';
echo'<pre>';
//Get element by index
echo $fruits[0].'<br>'; //Banana
echo'</pre>';
//
echo'<pre>';
$fruits[0]='Peach';
echo $fruits[0].'<br>'; //Peach
echo'</pre>';

//Check if array has element at index
//isset
echo'<pre>';
var_dump(isset($expected_array_got_string[0])); //bool(false)
echo(isset($fruits[4])); //아무것도 안 뜬다.
echo(isset($fruits[0])); //'1'이라고 뜬다.
#isset — Determine if a variable is declared and is different than null
echo'</pre>';
// Append element
echo'<pre>';
$fruits[] = 'Banana';
var_dump($fruits);
echo'</pre>';

//Add element at the end of the array
array_push($fruits, 'Pear');
echo'<pre>';
var_dump($fruits);
echo'</pre>';

//Remove element at the end of the array
echo (array_pop($fruits));
array_pop($fruits);
echo'<pre>';
var_dump($fruits);
echo'</pre>';

//Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo'<pre>';
var_dump($fruits);
echo'</pre>';

//Remove element at the beginning of the array
array_shift($fruits);
echo'<pre>';
var_dump($fruits);
echo'</pre>';

//Split the string into an array
$string = "Banana, Apple, Peach";
echo'<pre>';
var_dump(explode(",", $string));
echo'</pre>';

//Combine array elemnets into an array
echo implode("&", $fruits);

//Check if element exist in the array
echo'<pre>';
var_dump(in_array('Apple', $fruits)); //bool(true)
echo'</pre>';

//Search element index in the array
echo'<pre>';
var_dump(array_search('Mango', $fruits)); //bool(false)
echo'</pre>';

//Merge two arrays
$vegetables = ["Potato", "Cucumber"];
echo'<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
#둘 다 같다.
echo'</pre>';

//Sorting of array
sort($fruits);
echo'<pre>';
var_dump($fruits);
echo'</pre>';

rsort($fruits); #역순으로 정렬
echo'<pre>';
var_dump($fruits);
echo'</pre>';
?>
