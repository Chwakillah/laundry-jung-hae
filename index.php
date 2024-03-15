<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jung-Hae Laundry</title>
    <link href="
    https://cdn.jsdelivr.net/npm/css-reset-and-normalize@2.3.6/css/reset-and-normalize.min.css
    " rel="stylesheet">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="container-nav">
            <img src="aset/logo.svg" alt="logo" class="logo">
            <ul>
                <li><a href="#hero" class="nav-link">Home</a></li>
                <li><a href="#layanan" class="nav-link">Layanan</a></li>
                <li><a href="#aboutus" class="nav-link">About Us</a></li>
                <li><a href="#komplain" class="nav-link">Komplain</a></li>
            </ul>
            <a href="login.php">
            <img src="aset/account_circle.svg" alt="profile" class="profil">
            </a>
        </div>
    </nav>
    <section id="hero">
        <div class="container-hero">
            <div class="hero-text-gambar">
                <div class="hero-text">
                    <h1>Jung-Hae</h1>
                    <h2>Laundry</h2>
                    <p>Solusi buat kamu yang malas cuci baju. Baju kering, ngga bikin dompet kering.</p>
                    <div class="hero-text-button">
                        <button class="buttonA"><a href="#layanan">Lihat Katalog</a></button>
                        <button class="buttonB"><a href="#about">Hubungi Kami</a></button>
                    </div>
                </div>
                <div class="hero-gambar">
                    <img src="aset/gambar.svg" alt="mesin cuci">
                </div>
            </div>
        </div>
    </section>
    <section id="layanan">
        <div class="container-layanan">
            <div class="layanan-text-gambar-menu">
                <h1>Layanan Kami</h1>
                <img src="aset/Group 3.svg" alt="carousel">
                <div class="layanan-menu">
                    <div class="menu-menu">
                        <img src="aset/1 2.svg" alt="">
                        <p>KOMPLIT</p>
                    </div>
                    <div class="menu-menu">
                        <img src="aset/1 2.svg" alt="">
                        <p>SETRIKA</p>
                    </div>
                    <div class="menu-menu">
                        <img src="aset/1 2.svg" alt="">
                        <p>SATUAN</p>
                    </div>
                    <div class="menu-selengkapnya">
                        <a href="#">Selengkapnya></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutus">
        <div class="container-about">
            <div class="about-text-gambar-kontak">
                <h1>About Us</h1>
                <div class="text-gambar-menu">
                    <img src="aset/GAMBAR-ABOUT (1).svg" alt="mesin cuci" class="mesin-cuci">
                    <div class="text-kontak">
                        <p>
                        <span>Sejak 2023,</span> Jung-Hae laundry hadir untuk melayani anda dengan sepenuh hati. Kami percaya dibalik pakaian yang bernoda tersembunyi kenangan yang berharga. Kami membawa kesegaran baru dalam dunia laundry dengan komitmen untuk menjadikan setiap cucian sebagai bagian dari perjalanan cerita Anda.
                        </p>
                        <div class="kontak">
                            <div class="kontaks">
                                <img src="aset/Vector.svg" alt="">
                                <h6>Gang Buntu, Indralaya</h6>
                            </div>
                            <div class="kontaks">
                                <img src="aset/phone.svg" alt="">
                                <h6>0895384851133</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="komplain">
        <div class="container-komplain">
            <h1>Keluhan</h1>
            <div class="komplain-form-gambar">
                <form action="/submit_complaint" method="post">
                    <div class="form">
                        <input type="text" id="nama" name="nama" required placeholder="Nama"><br>
                        <input type="tel" id="telepon" name="telepon" required placeholder="Telepon"><br>
                        <input type="text" id="no_pesanan" name="no_pesanan" required placeholder="ID Pesanan"><br>
                        <textarea id="deskripsi_keluhan" name="deskripsi_keluhan" rows="2" required placeholder="Keluhan"></textarea><br>
                        <button type="submit" name="keluhan">Kirim</button>
                    </div>
                </form>
                <img src="aset/keranjang.svg" alt="">
            </div>
        </div>
    </section>
    <footer>
        <div class="container-footer">
            <p>Let’s connect with us</p>
            <div class="footer-media-sosial">
                <a href="#">
                <img src="aset/instagram.png" alt="">
                </a>
                <a href="#">
                    <img src="aset/facebook.png" alt="">
                </a>
                <a href="#">
                    <img src="aset/twt.png" alt="">
                </a>
                <a href="#">
                    <img src="aset/dm.png" alt="">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>