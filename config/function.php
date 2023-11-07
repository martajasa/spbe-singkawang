<?php
// Konvesi yyyy-mm-dd -> dd-mm-yyyy dan memberi nama bulan
function tgl_eng_to_ind($tgl)
{
    $tanggal    = explode('-', $tgl);
    $kdbl        = $tanggal[1];

    if ($kdbl == '01') {
        $nbln = 'Januari';
    } else if ($kdbl == '02') {
        $nbln = 'Februari';
    } else if ($kdbl == '03') {
        $nbln = 'Maret';
    } else if ($kdbl == '04') {
        $nbln = 'April';
    } else if ($kdbl == '05') {
        $nbln = 'Mei';
    } else if ($kdbl == '06') {
        $nbln = 'Juni';
    } else if ($kdbl == '07') {
        $nbln = 'Juli';
    } else if ($kdbl == '08') {
        $nbln = 'Agustus';
    } else if ($kdbl == '09') {
        $nbln = 'September';
    } else if ($kdbl == '10') {
        $nbln = 'Oktober';
    } else if ($kdbl == '11') {
        $nbln = 'November';
    } else if ($kdbl == '12') {
        $nbln = 'Desember';
    } else {
        $nbln = '';
    }

    $tgl_ind = $tanggal[0] . " " . $nbln . " " . $tanggal[2];
    return $tgl_ind;
}

function hariIndo($hariInggris)
{
    switch ($hariInggris) {
        case 'Sunday':
            return 'Minggu';
        case 'Monday':
            return 'Senin';
        case 'Tuesday':
            return 'Selasa';
        case 'Wednesday':
            return 'Rabu';
        case 'Thursday':
            return 'Kamis';
        case 'Friday':
            return 'Jumat';
        case 'Saturday':
            return 'Sabtu';
        default:
            return 'hari tidak valid';
    }
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }
    return $hasil;
}

function namaKategori($namaKategori)
{
    switch ($namaKategori) {
        case '1':
            return 'Artikel';
        case '2':
            return 'Berita';
        case '3':
            return 'Materi';
        case '4':
            return 'Bukti Dukung';
        default:
            return 'Uncategorized';
    }
}
