<?php
echo "<h1>====Program Menghitung Nilai Akhir====</h1>";
echo "Nama Lengkap : Shifa Ayu Rosidiana <br /> Kelas : X RPL 1 <br />";

$nilaiHarian = 89*30/100;
$nilaiUts = 88*30/100;
$nilaiUas = 87*40/100;
$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;

echo "Nilai Harian : $nilaiHarian <br />";
echo "Nilai UTS : $nilaiUts <br />";
echo "Nilai UAS : $nilaiUas <br />";
echo "Nilai Akhir : $nilaiAkhir <br />";

if($nilaiAkhir >=90 && $nilaiAkhir <=100){
    echo "Predikat Nilai : A+";
} else if ($nilaiAkhir >=85 && $nilaiAkhir <=89){
    echo "Predikat Nilai : A";
} else if ($nilaiAkhir >=80 && $nilaiAkhir <=84){
    echo "Predikat Nilai : B+";
} else if ($nilaiAkhir >=76 && $nilaiAkhir <=79){
    echo "Predikat Nilai : B";
} else if ($nilaiAkhir >=60 && $nilaiAkhir <=75){
    echo "Predikat Nilai : C";
} else if ($nilaiAkhir >=40 && $nilaiAkhir <=59){
    echo "Predikat Nilai : D";
} else if ($nilaiAkhir >=0 && $nilaiAkhir <=39){
    echo "Predikat Nilai : E";
} else{
    echo "anda tidak mendapatkan Predikat";
}
?>