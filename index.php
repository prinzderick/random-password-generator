<?php
$lower_chars = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

$upper_chars = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

$numbers = array('0','1','2','3','4','5','6','7','8','9');

$special_chars = array('!','@','#','$','%','^','&','*','(',')','_','-','+','=','{','}','\','|',':',';','?','/','.',','`','~','[',']');


function generate_base(){
  $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+={}\|:;?/.,`~[]";
  $shfl = str_shuffle($comb);
  $lenght = rand(5,10);
  $base = substr($shfl,0,$lenght);
  return $base;
}

function generate_password($base,$lower_chars,$upper_chars,$numbers,$special_chars){
  $value=$domain[array_rand($lower_chars)];
	$base=$base.$value;
  
  $value=$domain[array_rand($upper_chars)];
	$base=$base.$value;
  
  $value=$domain[array_rand($numbers)];
	$base=$base.$value;
  
  $value=$domain[array_rand($special_chars)];
	$base=$base.$value;
  
  $password = str_shuffle($base);
  return $password;
}

for($i = 0;$i < 12; $i++){
  $base = generate_base();
  $password = generate_password($base,$lower_chars,$upper_chars,$numbers,$special_chars);
  echo 'Password: '.$password.' Lenght: '.strlen($password).'<br>';
}


?>
