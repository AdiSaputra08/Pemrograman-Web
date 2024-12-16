<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="cul">#</th>
                <th scope="cul">Nama pelanggan</th>
                <th scope="cul">Tanggal</th>
                <th scope="cul">Total</th>
                <th scope="cul">Status</th>
                <th scope="cul">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Adi Saputra</td>
                <td>11 Desember 2024 14.06 WIB</td>
                <td>Rp.100.000</td>
                <td>
                    <span class="badge bg-warning">Proses</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn
                    btn-success">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn
                    btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>