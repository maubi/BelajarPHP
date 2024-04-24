<?php 

function tanggal($jumlah_hari)
{ 
    $tanggal_mendatang = date('Y-m-d', strtotime("+$jumlah_hari days"));
    $hari_mendatang = date('l', strtotime($tanggal_mendatang));

    switch ($hari_mendatang) {
        case 'Sunday':
            $hari_mendatang = 'Minggu';
            break;
        case 'Monday':
            $hari_mendatang = 'Senin';
            break;
        case 'Tuesday':
            $hari_mendatang = 'Selasa';
            break;
        case 'Wednesday':
            $hari_mendatang = 'Rabu';
            break;
        case 'Thursday':
            $hari_mendatang = 'Kamis';
            break;
        case 'Friday':
            $hari_mendatang = 'Jumat';
            break;
        case 'Saturday':
            $hari_mendatang = 'Sabtu';
            break;
        default:
            $hari_mendatang = 'Hari tidak valid';
            break;
    }

    return "Tanggal setelah $jumlah_hari hari = $tanggal_mendatang. <br> Nama hari = $hari_mendatang";
}

$jumlah_hari = 100;
$hasil = tanggal($jumlah_hari);

echo $hasil;

?>
