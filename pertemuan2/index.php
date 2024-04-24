<?php
//function -> program di dalam program

// 1. Built-in Function -> Fungsi yang sudah tersedia di PHP
// 2. User-Defined Function -> Fungsi yang dibuat oleh programmer

// date, time, mktime, strotime

// date -> tanggal hari ini
date_default_timezone_set("Asia/Jakarta");
echo date("l, j F Y H:i:s");

/*
l = nama hari versi lengkap
d = hari, format 01 sampai 31
j = hari, format 1 sampai 31
M = bulan, format 3 karakter (Jan, Feb, Mar...)
F = nama bulan versi lengkap
Y = Tahun
H = jam
i = menit
s = detik
*/

// time = jumlah detik sejak 1 Januari 1970
// echo time();

// mktime
echo mktime(0,0,0,12,7,1998); // jumlah detik dari 1 Januari 1970 - tanggal yang ditentukan

// strtotime = mengubah string menjadi tanggal
echo strtotime("24 April 2024");

// date_parse = memecah tanggal
print_r(date_parse("2024-04-24"));
?>