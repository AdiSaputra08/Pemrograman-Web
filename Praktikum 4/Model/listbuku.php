<?php

require_once "buku.php";

class listbuku{
    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'James W.', 'Informatika', '2024'),
            new buku('Matematika Diskrit', 'Emely S.', 'Andi Publisher', '2017'),
            new buku('Kalkulus', 'Robert R.', 'Erlangga', '2020'),
            new buku('Metode Penelitian', 'Eka.', 'Informatika Sains', '2021'),
        );
        return $list_buku;
    }
}