<?php 

function registrasi($data){
        //koneksinya simpan dalam variabel terus variabel nya diakses secara global
        global $conn;
        
        // bikin variabel buat nyimpen password sm usernamenya
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
        mysqli_query($conn, "INSERT INTO tabel_kamu VALUES ('','$username','$password')");
        
        //nanti mengembalikan nilai -1 kalo gagal, terus 1 kalo berhasil, 
        return mysqli_affected_rows($conn);
    }

?>