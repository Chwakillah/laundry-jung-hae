<?php
require 'koneksi.php';
//daftar
if(isset($_POST['register'])){
    //jika tombol register di klik

    $email = $_POST['email'];
    $password = $_POST['password']; //belum enkripsi 

    //fungsi enkripsi
    $epassword = password_hash($password, PASSWORD_DEFAULT);

    //insert to db
    $insert = mysqli_query($koneksi, "insert into user (email,password) values ('$email','$epassword')");

    if($insert){
        echo '
        <script>
            alert ("Registrasi berhasil, selamat datang");
            window.location.href = "index.php"; 
        </script>
        '; //halaman login
    }else{
        //gagal insert arahkan ke register
        echo '
        <script>
            alert ("Registrasi gagal, coba lagi");
            window.location.href = "register.php"; 
        </script>
        ';
    }
}

//login
if(isset($_POST['login'])){
    //jika tombol register di klik

    $email = $_POST['email'];
    $password = $_POST['password']; 

    //cek ke db
    $cekdb = mysqli_query($koneksi, "select * from user where email = '$email'");
    $hitung = mysqli_num_rows(($cekdb)); //ngecek perbaris
    $pw = mysqli_fetch_assoc(($cekdb)); //mengambil data pw
    $passwordsekarang = $pw['password'];
    if($hitung>0){
        //ada
        //verif pw
        if(password_verify($password, $passwordsekarang)){
            //pw sama dan benar
            header('location: index.php');
        }else{
            //pw salah dan gagal
        echo '
        <script>
            alert ("Password salah");
            window.location.href = "login.php";
        </script>
        ';
        }
    }else{
        //gagal insert
        echo '
        <script>
            alert ("Akun tidak ditemukan!");
            window.location.href = "login.php";
        </script>
        ';
    }
}

//lupa kata sandi


//lupa kata sandi


if(isset($_POST['updatePassword'])) {
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Pengecekan apakah email ada di database
    $cekdb = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
    $hitung = mysqli_num_rows($cekdb);

    if($hitung > 0) {
        if($newPassword == $confirmPassword) {
            // Hash password baru sebelum menyimpannya
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            
            // Perbarui password di database
            $updatePassword = mysqli_query($koneksi, "UPDATE user SET password='$hashedPassword' WHERE email='$email'");
            // Periksa apakah query berhasil dijalankan
            if($updatePassword) {
                // Jika berhasil, arahkan ke halaman login
                echo '
                <script>
                alert ("Password berhasil diperbarui");
                window.location.href = "login.php";
                </script>
        ';
            } else {
                // Jika gagal, tampilkan pesan error
                echo '
                <script>
                alert ("Password gagal diperbarui");
                window.location.href = "lupasandi.php";
            </script>
        ';
            }
        } else {
            // Jika password tidak cocok, tampilkan pesan error
            echo '
        <script>
            alert ("Password baru dan konfirmasi password tidak cocok");
            window.location.href = "lupasandi.php";
        </script>
        ';
        }
    } else {
        // Jika email tidak ditemukan, tampilkan pesan error
        echo '
        <script>
            alert ("Akun tidak ditemukan!");
            window.location.href = "lupasandi.php";
        </script>
        ';
    }
}
?>