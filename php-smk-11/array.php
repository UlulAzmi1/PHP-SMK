<?php 

    // array dimensi

    // $nama = array("joni","tejo","budi","siti",100,2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) { 
    //     //echo $i;
    //     echo $nama[$i]."<br>";
    // }
    
    // foreach ($nama as $k) {
    //     echo $k.'<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "Joni" => "Surabaya",
    //     "Budi" => "Malang Raya",
    //     "Tejo" => "Jakarta",
    //     "Siti" => "Sidoarjo"
    // );

    $nama['Joni']="Surabaya";
    $nama['Budi']="Malang Raya";
    $nama['Tejo']="Jakarta";
    $nama['Siti']="Sidoarjo";
    $nama['Edi']="Semarang";

    var_dump($nama);

    echo "<br>";

    // echo $nama['Budi'];

    foreach ($nama as $k => $v) {
        echo $k."=>".$v;

        echo "<br>";
    }

?>