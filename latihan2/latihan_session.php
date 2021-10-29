<?php 
    session_start();
    if(!isset($_SESSION["counter"])){
        $_SESSION["nama"] = "prakwebprosession";
        $_SESSION["counter"] = 0;
    }
    echo "<br> Nama : " . $_SESSION["nama"];
    $_SESSION["counter"]++;
    echo "<br> Anda telah melihat halaman ini sebanyak : " . $_SESSION["counter"]. " kali";
?>

<!-- session_start();
    unset($_SESSION["nama"]);
    //hapus data session spesifik
    session_destroy();
    //hapus semua data session
-->