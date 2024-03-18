<?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Fahmi<br/>";
//     echo "Senang berkenalkan dengan Anda<br/>";
//     }

//     perkenalan();
//     perkenalan()



// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalkan dengan Anda<br/>";
//     }

//     //memanggil fungsi yang sudah dibuat
//     perkenalan("Fahmi","Halo");

//     echo "<hr>";

//     $saya =  "Ian";
//     $ucapanSalam = "Selamat Pagi";

//     perkenalan($saya);


// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
//     }

//     echo "Umur saya adalah ". hitungUmur(2004, 2023) . "tahun "

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum"){
        echo $salam. ",";
        echo "Perkenalkan, Nama Saya ".$nama."<br>";
    

        echo "Saya berusia ". hitungUmur(2004, 2023) . "tahun</br>";
        echo "Senang berkenalan dengan anda</br>";
    }
    
    perkenalan ("Fahmi");
    ?>