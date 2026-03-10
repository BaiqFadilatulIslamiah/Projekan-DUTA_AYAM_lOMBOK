<nav class="navbar">

    <div class="container nav-wrapper">

        <div class="logo">
            <img src="assets/images/logo.png" alt="Logo Duta Ayam Lombok">
        </div>

        <ul class="menu">
            <li><a href="index.php?page=beranda"
                    class="<?= ($page == 'beranda') ? 'active' : '' ?>">Home</a></li>
            <li><a href="index.php?page=produk"
                    class="<?= ($page == 'produk') ? 'active' : '' ?>">Produk</a></li>
            <li><a href="index.php?page=galeri"
                    class="<?= ($page == 'galeri') ? 'active' : '' ?>">Galeri</a></li>
            <li><a href="index.php?page=about"
                    class="<?= ($page == 'about') ? 'active' : '' ?>">Tentang Kami</a></li>
        </ul>

    </div>
</nav>