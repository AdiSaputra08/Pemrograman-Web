<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>MANUSIA TEMPAT SALAH DAN DOSA</h5>
    <h5>Rp. 100,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. Muaro Jambi - Muaro Bulian Km 16, Sungai Duren.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BSI Adi Saputra</h5>
    <h5>Rek. 701230020</h5>

    <div class="mt-5">
    <form action="<?= base_url('submit') ?>" method="POST">
            <button type="submit" class="btn btn-succes">Submit Order</button>
    </form>
        <a href="<?= base_url('submit') ?>"class="btn btn-success">Submit Order</a>
    </div>
</div>
<?= $this->endSection()?>