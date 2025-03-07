<?php
    // mendefinisikan konstanta
    define ("PHI", 3.14);
    define ("DBNAME", "Inventori");
    define ("DBSERVER", "Localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kell = 2 * PHI * $jari;

    echo "Luas lingkaran :" .$jari.":" .$luas;
    echo "<br/> Keliling : " .$kell;
?>
<hr>
<?php
    echo "Nama Database : " .DBNAME;
    echo "<br/> Lokasi Database : " .DBSERVER;
?>
