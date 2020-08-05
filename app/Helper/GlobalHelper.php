<?php

namespace App\Helper;

class GlobalHelper{
    public static function tgl_indo($tgl)
    {
        $bulan = array (
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $array = explode('-', $tgl);
        return $array[2] . ' ' . $bulan[ (int)$array[1] ] . ' ' . $array[0];
    }
}