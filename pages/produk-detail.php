<script src="assets/js/main.js"></script>

<?php


$id = $_GET['id'];

$produk = [

    1 => [
        "nama" => "Ayam Merah Jago",
        "harga" => "Rp 500.000",
        "gambar1" => "../assets/images/produk/merah1.jpg",
        "gambar2" => "../assets/images/produk/merah2.jpg",
        "gambar3" => "../assets/images/produk/merah3.jpg",
        "gambar4" => "../assets/images/produk/merah1.jpg",
        "deskripsi" => "Ayam merah jago terkenal kuat dan sehat."
    ],

    2 => [
        "nama" => "Ayam Bangkok",
        "harga" => "Rp 700.000",
        "gambar1" => "../assets/images/produk/ayam bangkok.jpg",
        "gambar2" => "../assets/images/produk/bangkok1.jpg",
        "gambar3" => "../assets/images/produk/bangkok2.jpg",
        "gambar4" => "../assets/images/produk/bangkok3.jpg",
        "deskripsi" => "Ayam Bangkok terkenal sebagai ayam petarung."
    ],

    3 => [
        "nama" => "Ayam Kampung",
        "harga" => "Rp 300.000",
        "gambar1" => "../assets/images/produk/ayam kampung.jpg",
        "gambar2" => "../assets/images/produk/kampung1.jpg",
        "gambar3" => "../assets/images/produk/kampung2.jpg",
        "gambar4" => "../assets/images/produk/kampung3.jpg",
        "deskripsi" => "Ayam kampung alami dan sehat."
    ],

    4 => [
        "nama" => "Ayam Petelur",
        "harga" => "Rp 250.000",
        "gambar1" => "../assets/images/produk/ayam petelur.jpg",
        "gambar2" => "../assets/images/produk/petelur1.jpg",
        "gambar3" => "../assets/images/produk/petelur2.jpg",
        "gambar4" => "../assets/images/produk/petelur3.png",
        "deskripsi" => "Ayam petelur berkualitas tinggi."
    ],

    5 => [
        "nama" => "Ayam Cemani",
        "harga" => "Rp 1.500.000",
        "gambar1" => "../assets/images/produk/ayam cemani.jpg",
        "gambar2" => "../assets/images/produk/cemani1.jpg",
        "gambar3" => "../assets/images/produk/cemani2.jpg",
        "gambar4" => "../assets/images/produk/cemani3.jpg",
        "deskripsi" => "Ayam Cemani terkenal dengan warna hitam pekat."
    ],

    6 => [
        "nama" => "Ayam Kalkun",
        "harga" => "Rp 900.000",
        "gambar1" => "../assets/images/produk/ayam kalkun.jpg",
        "gambar2" => "../assets/images/produk/kalkun 1.jpg",
        "gambar3" => "../assets/images/produk/kalkun2.jpg",
        "gambar4" => "../assets/images/produk/kalkun 3.jpg",
        "deskripsi" => "Ayam kalkun dengan ukuran besar."
    ]

];

$data = $produk[$id];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Detail Produk</title>
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <section class="detail-hero">
        <h1>Detail Produk</h1>
    </section>

    <section class="detail-container">

        <div class="detail-card">

            <!-- kiri -->
            <div class="detail-image">

                <img src="<?= $data['gambar1']; ?>" id="gambarUtama" class="main-img">

                <div class="thumbnail">
                    <img src="<?= $data['gambar1']; ?>" onclick="gantiGambar(this)">
                    <img src="<?= $data['gambar2']; ?>" onclick="gantiGambar(this)">
                    <img src="<?= $data['gambar3']; ?>" onclick="gantiGambar(this)">
                    <img src="<?= $data['gambar4']; ?>" onclick="gantiGambar(this)">
                </div>

            </div>

            <!-- kanan -->
            <div class="detail-info">

                <h2><?= $data['nama'] ?></h2>

                <h3 class="harga"><?= $data['harga'] ?></h3>

                <p>
                    <?= $data['deskripsi'] ?>
                </p>

                <h4>Tersedia Size</h4>

                <div class="size-produk">

                    <span>Kecil</span>
                    <span>Menengah</span>
                    <span>Jumbo</span>

                </div>

                <a href="https://wa.me/6285937020880" target="_blank" class="wa-order">

                    <img src="../assets/images/wa.png">

                    <p>Pesan Sekarang Dengan Klik Logo WhatsApp</p>

                </a>

            </div>

        </div>

    </section>

</body>

</html>