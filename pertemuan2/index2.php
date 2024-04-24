<?php 
// built infunction untuk manipulasi teks

// explode, implode, strlen, strcmp

// strlen = mengetahui panjang string
echo strlen ("Hello World");

// str_word_count = menghitung jumlah kata
echo str_word_count("");

// strcmp = membandingkan dua buah string/kata
// strcasecmp = membandingkan 2 string berdasarkan ukuran huruf
$kata1 = "katak";
$kata2 = "katak";

if (strcmp($kata1, $kata2) !== 0){
    echo "$kata1 tidak sama dengan $kata2";
} else { 
    echo "$kata1 sama dengan $kata2";
}

// explode = memecah string jadi array
print_r(explode("-", "AYAM-GOYENG-ENAK-SEKALI"));
print_r(explode(",", "Miftahul, Adeh, Ratna"));

// implode = menggabungkan array menjadi string
$str = array("Selamat", "Datang", "di", "Pemrograman", "PHP");
echo implode(" ", $str);

// strtolower = mengubah huruf besar menjadi huruf kecil
echo strtolower("HARAP TENANG SEDANG BELAJAR");
// strtoupper = mengubah huruf kecil menjadi huruf besar
echo strtoupper("ada udang di balik gnadu");
// substr = mengambil beberapa karakter di dalam string
$kata3 = "Pelatihan";
echo substr($kata3, 2, 5);
echo substr($kata3, -7, 5); // ambil dari belakang
?>