<?php
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){
    echo "huruf kecil ditemukan !";
}else{
    echo "tidak ada huruf kecil !";
}
?>