<?php 
//koneksi ke database
    $conn = mysqli_connect("localhost","root","","restoranrafi");

    //mengambil data dari tabel mahasiswa
    
    
    ////mengecek kesalahan pada koneksi anda
    // var_dump($result);
    // if (!$result) {
    //     echo mysqli_error($conn);
    // }

    //ambil data dari object result
    //mysqli_fetch_row
    //mysqli_fetch_assoc
    //mysqli_fetch_array
    //mysqli_fetch_object
    
    // while ($menu = mysqli_fetch_assoc($result)){
    //     var_dump($menu["nama"]);
    // }
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        //mengatasi user iseng -> htmlspecialchars
        $nama = htmlspecialchars($data["nama"]);
        $harga = htmlspecialchars($data["harga"]);
        //unggah foto
        $foto = unggah();
        if(!$foto){
            return false;
        }

        $query = "INSERT INTO menu
                    VALUES
                    ('', '$nama','$harga','$foto')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function unggah(){

        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];
        
        //cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
                alert('Pilih Gambar!');
            </script>";
            return false;
        }

        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                alert('File yang diunggah bukan gambar!');
            </script>";
            return false;
        }

        //cek jika ukurannya terlalu besar
        if ($ukuranFile > 1000000) {
            echo "<script>
                alert('Ukuran Gambar Terlalu Besar!');
            </script>";
            return false;
        }

        //lolos pengecekan, foto siap diunggah
        //generate nama foto baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName,'image/' . $namaFileBaru);

        return $namaFileBaru;

    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM menu WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        //mengatasi user iseng -> htmlspecialchars
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $harga = htmlspecialchars($data["harga"]);
        $fotoLama = htmlspecialchars($data["fotoLama"]);
        //cek apakah user pilih gambar baru / tidak
        if ($_FILES['foto']['error'] == 4) {
            $foto = $fotoLama;
        }else{
            $foto = unggah();
        }

        $query = "UPDATE menu SET 
                    nama = '$nama',
                    harga = '$harga',
                    foto = '$foto'
                  WHERE id = $id
                    ";
                    
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function registrasi($data){
        global $conn;
        
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username udah ada belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('Username Sudah Terdaftar');
                  </script>";
            return false;
        }

        //cek konfirmasi password
        if($password !== $password2){
            echo "<script>
                    alert('Konfirmasi Password Tidak Sesuai!');
                  </script>";
            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");
        
        return mysqli_affected_rows($conn);
    }

    //cari
    function cari($keyword){
        $query = "SELECT * FROM menu
                    WHERE
                    nama LIKE '%$keyword%' OR harga LIKE '%$keyword%'
                    ";
        return query($query);
    }

?>