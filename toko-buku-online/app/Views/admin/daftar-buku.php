<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Buku</h2>
<div class="">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn 
    btn-primary">Tambah buku</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
            <thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Belajar Coding Itu Penting</td>
                        <td>Sapardi Djoko Damono</td>
                        <td>Gramedia Pustaka Utama</td>
                        <td>2024</td>
                        <td>
                            <img src="<?= base_url('images/buku1.jpg')?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                            Rp.100.000.000
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-buku/edit')?>" class="btn
                            btn-success">Edit</a>
                            <a href="<?= base_url('admin/daftar-buku/hapus')?>" class="btn
                            btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>