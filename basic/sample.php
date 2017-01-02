
 <?php  echo "hello world!<br/>"; //hello world expression ?>
 <?php  echo "hello"." world!"; ?><br/>
 <?php echo 1+1;?></br>

 <?php
 $var = 10;
 echo $var;
 echo "<br/>";
 $var = 100;
 echo $var;
 ?> <br/>

 <?php
 $target = "Hello";
 $forget = "World!";
 $phrase = $target ." ". $forget;
 echo $phrase;
 ?><br/>

 <?php
 echo "$phrase again <br/>";
 // best expression
 echo "{$phrase} again <br/>";
 ?> <br/>

 <?php
 $first = "The color black is black";
 $second = " but black is blacker than black.";
 $third = $first;
 $third .= $second;
 echo $third;
 ?><br/>

 Lowercase: <?php echo strtolower($third);?><br/>
 Uppercase: <?php echo strtoupper($third);?><br/>
 Lowercase first: <?php echo ucfirst($third);?><br/>
 Lowercase word: <?php echo ucwords($third);?><br/>
<br/>
 Length: <?php echo strlen($third);?><br/>
 trim: <?php echo "A" . trim(" B C D ") . "E";?><br/>
 find: <?php echo strstr($third, "black");?><br/>
 replace of string: <?php echo str_replace("color", "combination", $third);?><br/>
 <br/>
 repeat: <?php echo str_repeat($third, 2);?><br/>
 make substring: <?php echo substr($third, 4, 11);?><br/>
 find position: <?php echo strpos($third, "than");?><br/>
 find character: <?php echo strchr($third, "n");?><br/>
 <br/>

 <?php
 $num1 = 3;
 $num2 = 4;
 ?>
 Basic Math: <?php echo ((2+1+$num1)*$num2)/2-3;?><br/>
 <br/>
 absolute value:    <?php echo abs(0-300);?><br/>
 exponential:       <?php echo pow(2,8);?><br/>
 square root:       <?php echo sqrt(100);?><br/>
 modulo:            <?php echo fmod(20,7);?><br/>
 random:            <?php echo rand();?><br/>
 random (min,max):  <?php echo rand(1,4);?><br/>
 <br/>
 +=: <?php echo $num2 += 4;?><br/>
 -=: <?php echo $num2 -= 4;?><br/>
 *=: <?php echo $num2 *= 3;?><br/>
 /=: <?php echo $num2 /= 4;?><br/>
 <br/>
 increment: <?php $num2++; echo $num2;?><br/>
 decrement: <?php $num2--; echo $num2;?><br/>
 <br/>
 <?php echo $float = 3.144;?><br/>
 <?php echo $float +7;?><br/>
 <br/>
 round: <?php echo round($float, 2);?><br/>
 ceiling: <?php echo ceil($float);?><br/>
 floor: <?php echo floor($float);?><br/>
 <br/>

 <?php $integer = 3;?><br/>
 <?php echo "is {$integer} integer? " . is_int($integer);?><br/>
 <?php echo "is {$float} integer? " . is_int($float);?><br/>
 <br/>
 <?php echo "is {$integer} float? " . is_float($integer);?><br/>
 <?php echo "is {$float} float? " . is_float($float);?><br/>
 <br/>
 <?php echo "is {$integer} numeric? " . is_numeric($integer);?><br/>
 <?php echo "is {$float} numeric? " . is_numeric($float);?><br/>

 <h2>Arrays</h2>

 The output is  <?php
 $numbers = array(4,8,18,14,34,12);
 // or $numbers = array (0 => 4,1 => 8,2 => 18,3 => 14,4 => 34,5 => 12)
 ?>
 <?php echo $numbers [2]; ?>

 <?php $array = array(4,"dog","fish",array("x","y","z"));?><br/>
 The output is <?php echo $array[2]; ?><br/>
 The output is <?php echo $array[3][2]; ?><br/>
 <?php echo $array[4] = "mouse";?> <br/>
 <?php echo $array[5] = "rat";?>
 <pre>
     <?php print_r($array);?>
 </pre>

 <h2>Associative Arrays</h2>

 <?php $assoc = array ("first_name" => "Ramel", "last_name" => "Atillo");?>
 <?php echo $assoc ["first_name"];?><br/>
 <?php echo $assoc ["first_name"]." ".$assoc ["last_name"];?><br/>
 <br/>

 <h2>function Arrays</h2>

 count: <?php echo count($numbers);?><br/>
 max value: <?php echo min($numbers);?><br/>
 min value: <?php echo max($numbers);?>
 <pre>
     sort: <?php echo sort ($numbers); print_r($numbers);?><br/>
     reverse sort: <?php echo rsort ($numbers); print_r($numbers);?><br/>
 </pre>
implode: <?php echo $num_string = implode(", ", $numbers);?><br/>
 <pre>explode: <?php print_r(explode(", ",$num_string));?></pre>

 18 in array?: <?php echo in_array(18, $numbers); // returns true/false  or 1/0?><br/>
 19 in array?: <?php echo in_array(19, $numbers); // returns true/false  or 1/0?><br/>
 <br/>

 <?php
    $var1 = 3;
    if(is_float($var1)){
     echo "it is a float";
 }
 else{
     echo "it is not a float";
 }
 ?> <br/>

 <?php
 define("MAX_WIDTH", 400);
 echo MAX_WIDTH;
 ?><br/>





