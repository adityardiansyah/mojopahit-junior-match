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

    public static function tgl_indo_not_munite($tgl)
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
        $arr = explode(' ', $tgl);
        $array = explode('-', $arr[0]);
        return $array[2] . ' ' . $bulan[ (int)$array[1] ] . ' ' . $array[0];
    }

    public static function limit_word($value, $limit = 130)
    {
        if(strlen($value) > $limit){
            $word = mb_substr($value, 0, $limit)."...";
        }else{
            $word = $value;
        }
        return $word;
    }
}