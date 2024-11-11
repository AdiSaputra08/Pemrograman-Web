<?php

require_once "Model/listBuku.php";

class BukuController{
    
    public function jalankan(){

        //menggunakan model 
        $dataModel = new DaftarBukuModel();

        //mengirim dataModel ke BukuView dan menampilkannya
        include "View/BukuView.php";
    }
    public function edit(){
        $id_buku = $_GET['id_buku'];

        $daftar_buku = new listBuku();
        $buku = $daftar_buku->getBukuById($id_buku);

        if($buku){
            include_once "view/EditBukuView.php";
        }else{
            header("location :https://localhost/index.php");
            exit;
        }
    }
    public function update(){
        echo "update";
    }
    public function simpan(){
        // mengambil nilai dari from tambah pada BukuView
    $judull = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    // buat objek buku dari class buku
    $buku = new Buku($judull, $pengarang, $penerbit, $tahun);

    // menyimpan buku dengan method simpan di class ListBuku
    $daftar_buku = new listBuku();
    $status = $daftar_buku -> simpan($buku);

    // membuat sesion untuk menampilkan pesan berhasil atau gagal
    session_start();
    if($status){
        $_SESSION['message'] = "Daftar buku dengan judul " . $buku->getJudul() ." Berhasil disimpan";
    } 

    // redirect ke index.php
    header('location https:localhost//index.php');
    }
    public function hapus(){
        $id_buku = $_POST['id_buku']{

            $daftar_buku = new listBuku()
            $status = $daftar_buku->hapus($id_buku)

            session_start();
            if($status){
             $_SESSION['message'] = "Daftar buku dengan judul " . 
             $buku->getJudul() ." Berhasil disimpan";
            } 
        
        }
    }
}