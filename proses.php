<?php
	 	session_start();
		include "includes/koneksi.php";
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
       
        $login = mysql_query("SELECT * FROM tbpegawai WHERE nama='$nama' AND pass='$pass'");
        $hasil = mysql_num_rows($login);
        $r = mysql_fetch_array($login);
        if ($hasil > 0)
        {
			
          
          session_register("id");
          session_register("nama");
          session_register("pass");
		  
		  $_SESSION[id]     = $r[id];
          $_SESSION[nama]     = $r[nama];
          $_SESSION[pass]     = $r[pass];
		  
          header('location:home.php');
        }
        else{ echo "LOGIN GAGAL! <br> <a href='login.php'><< Kembali</a>"; }
?>