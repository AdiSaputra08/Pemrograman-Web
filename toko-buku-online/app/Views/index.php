<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url()?> css/style.css">
  </head>

  <body>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="<?= base_url()?>chart" 
                class="btn btn-secondary">Keranjang Belanja<span class="badge 
                text-bg-secondary">1</span></a>
            </div>
        </div>
    </div>
    
        <div class="row bg-primary-subtle m-1">
                <div class="col-6 p-5">
                    <h1>Selamat datang Di Toko buku Online</h1>
                    <p>Kami Menyediakan Buku-Buku dari Berbagai penerbit Nasional</p>
                    <a href="#1" class="btn btn-succes">Lihat Produk</a>
                </div>
                <div class="col-6 p-5">
                    <h1>Temukan Buku Favorite Anda</h1>
                    <form action="">
                        <div class="mb-3">
                            <input type="text" class="form-control"
                            placeholder="Judul Buku">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control"
                            placeholder="Pengarang">
                        </div>
                        <div class="mb-3"></div>
                            <input type="text" class="form-control"
                            placeholder="Penerbit">
                            <div class="mb-3">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                        
                        </div>
                    </form>
            </div>
            <h2>Buku Best Seller</h2>
            <div class="row mb-5 g-3">
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                <img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            <div class="col-3"><img src="<?= base_url('images/buku1.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Belajar Coding Itu Penting</h5>
                      <p class="card-text">Rp. 100.000,-</p>
                      <a href="#" class="btn btn-primary">add to chart</a>
                    </div>
                  </div>
            </div>
            </div>
            <footer class="footer py-3">
            <div class="container footer">Copyright 2024. Toko Buku Online Kelas B Adi Saputra. All Rights Reserved.</div>
            </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>