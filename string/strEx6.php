<?php
$string = "Quick brown fox jumps over the lazy fox dog";
// echo strpos($string,"fox"); //case 
$offset = strripos($string,"fox");
echo $offset;
// echo $offset !== false ? 'word is found' : "word not found";//code act same;
// if($offset !== false){//code act same;
//     echo "word is found";
// }else{
//     echo "word is not found";
// }