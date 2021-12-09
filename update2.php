<?php

if(isset($_POST['submit'])){
    
    $nama=$_POST['nama'];
    $noPendaftaran=$_POST['noPendaftaran'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $poskod=$_POST['poskod'];
    $negeri=$_POST['negeri'];
    $jantina=$_POST['jantina'];
    $umur=$_POST['umur'];
    $raket=$_POST['raket'];
    if(isset($_POST['hobi1'])){
        $hobi1=$_POST['hobi1'];
    }
    if(isset($_POST['hobi2'])){
        $hobi2=$_POST['hobi2'];
    }
    if(isset($_POST['hobi3'])){
        $hobi3=$_POST['hobi3'];
    }


    if($nama== ''){
        ?><script>
        alert('Sila isi nama anda')
		window.location='update.php'
    </script><?php
    }
    elseif($noPendaftaran== ''){
        ?><script>
        alert('Sila isi no pendaftaran anda')
		window.location='update.php'
    </script><?php
    }
    elseif($kelas== ''){
        ?><script>
        alert('Sila isi kelas anda')
		window.location='update.php'
    </script><?php
    }
    elseif($alamat== ''){
        ?><script>
        alert('Sila isi alamat anda')
		window.location='update.php'
    </script><?php
    }
    elseif($poskod== ''){
        ?><script>
        alert('Sila isi poskod anda')
		window.location='update.php'
    </script><?php
    }
    elseif($negeri== ''){
        ?><script>
        alert('Sila isi negeri anda')
		window.location='update.php'
    </script><?php
    }
    elseif($jantina== ''){
        ?><script>
        alert('Sila isi jantina anda')
		window.location='update.php'
    </script><?php
    }
    elseif($umur== ''){
        ?><script>
        alert('Sila isi umur anda')
		window.location='update.php'
    </script><?php
    }
    elseif($raket== ''){
        ?><script>
        alert('Sila pilih raket')
		window.location='update.php'
    </script><?php
    }
    else{
        session_start();
        $_SESSION['nama']=$nama;
        $_SESSION['noPendaftaran']=$noPendaftaran;
        $_SESSION['kelas']=$kelas;
        $_SESSION['alamat']=$alamat;
        $_SESSION['poskod']=$poskod;
        $_SESSION['negeri']=$negeri;
        $_SESSION['jantina']=$jantina;
        $_SESSION['umur']=$umur;
        $_SESSION['raket']=$raket;
        $_SESSION['hobi1']=$hobi1;
        $_SESSION['hobi2']=$hobi2;
        $_SESSION['hobi3']=$hobi3;
        header("location:view.php");
    }
    
}