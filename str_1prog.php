<?php

  echo 'This is a simple string'."\n";

  echo 'You can also have embedded newlines in strings this way as it is okay to do'."\n";

  echo 'Arnold once said: "I`ll be back"'."\n";

  echo 'You delete c:\*.*'."\n";
   
  //$expand = 'A';
  //$either = 'B';
  echo 'Variables do not $expand $either'."\n";

?>

<?php

  $juice = "apple";

  echo "He drank some $juice juice.".PHP_EOL;
  
  echo "He drank some juice made of $juices"."\n";

  echo "He drank some juice made of {$juice}"."\n";


?>

<?php

$str = 'string';
echo "The character at index-2 is $str[-2].".PHP_EOL;

$str[-3] = 'o';
echo "Changing the character at index -3 to O gives $str.".PHP_EOL;

?>

 <?php
  /*
  //show all errors
  error_reporting(E_ALL);

  $great = "fantastic";

  echo "This is { $great}";

  echo "This is {$great}";

  echo "THis square is {$square->width}00 centimeters broad.";

  echo "This works: {$arr['key']}";

  echo "This works: {$arr[4][3]}";

  echo "This is wrong: {$arr[foo][3]}"."\n";
  echo "This work: ".$arr['foo'][3]."\n";
  echo "This is value of the var named $name : {${$name}}";
  echo "This is the value of var named by the return value of getName(): {${getName()}}"."\n";

 // echo "This is the value of the var named by the return value of \$object->getName(): {${object->getName()}}";
  
  echo "This is the return value of getName():{getName()}";



*/
?>  

<?php

  class foo{

      var $bar = 'I am bar.';
      
  }
  $foo = new foo();
  $bar = 'bar';
  $baz = array('foo','bar','baz','quix');
  echo "{$foo->$bar}\n";
  echo "{$foo->{$baz[1]}}\n";

?>

<?php

   $str = "This is a test";
   $first = $str[0];
   $third = $str[2];
   echo "$first\t$third";
   $str = 'This is still a test';
   $last = $str[strlen($str)-1];
   echo "$last\n";
   $str = 'Look at the sea';
   $str[strlen($str)-1] = 'e';

   echo "$str\n";



?>
