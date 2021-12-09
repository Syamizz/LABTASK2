<?php
    session_start();
    $nama = $_SESSION['nama'];
    $noPendaftaran=$_SESSION['noPendaftaran'];
    $kelas=$_SESSION['kelas'];
    $alamat=$_SESSION['alamat'];
    $poskod=$_SESSION['poskod'];
    $negeri=$_SESSION['negeri'];
    $jantina=$_SESSION['jantina'];
    $umur=$_SESSION['umur'];
    $raket=$_SESSION['raket'];
    $hobi1=$_SESSION['hobi1'];
    $hobi2=$_SESSION['hobi2'];
    $hobi3=$_SESSION['hobi3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
</head>
<style>
    body{
        background-image: linear-gradient(to left, #fbc2eb 0%, #a6c1ee 100%);
    }
    table,tr,th,td{
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>
<body >
    <h1>Maklumat pendaftaran</h1>
    <br>
    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo "$nama"; ?></td>
        </tr>
        <tr>
            <th>No Pendaftaran</th>
            <td><?php echo "$noPendaftaran"?></td>
        </tr>
        <tr>
            <th>Kelas</th>
            <td><?php echo "$kelas" ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo "$alamat" ?></td>
        </tr>
        <tr>
            <th>Poskod</th>
            <td><?php echo "$poskod" ?></td>
        </tr>
        <tr>
            <th>Negeri</th>
            <td><?php echo "$negeri" ?></td>
        </tr>
        <tr>
            <th>Jantina</th>
            <td><?php echo "$jantina" ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?php echo "$umur" ?></td>
        </tr>
        <tr>
            <th>Mempunyai raket badminton</th>
            <td><?php echo "$raket" ?></td>
        </tr>
        <?php 
        echo "<tr>";
        echo "<th rowspan='3'>Hobi</th>";
        echo "<td>$hobi1</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$hobi2</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$hobi3</td>";
        echo "</tr>";

       ?>

    </table>
    <br>
    <form action="update.php">
        <button id="btn" type="submit">Kemaskini Maklumat</button>
    </form>
    
</body>
</html>