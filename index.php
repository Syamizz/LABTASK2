<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LABTASK2</title>
</head>
<style>
    body{
        background-image: linear-gradient(to left, #fbc2eb 0%, #a6c1ee 100%);
    }
</style>
<body>
    <h1>Pendaftaran Ahli Kelab Badminton</h1>
    <hr>
    <form action="index2.php" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" class="form-control" name="nama"></td>
            </tr>
            <tr>
                <th>No pendaftaran</th>
                <td><input type="text" maxlength="12" class="form-control" name="noPendaftaran"></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td><input type="text" class="form-control" name="kelas"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea style="resize: none;" class="form-control" name="alamat" cols="40" rows="2"></textarea></td>
            </tr>
            <tr>
                <th>Poskod</th>
                <td><input type="text" maxlength="5" class="form-control" name="poskod"></td>
            </tr>
            <tr>
                <th>Negeri</th>
                    <td>
                        <select name="negeri" id="negeri" class="form-control">
                        <option value=""></option>
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Melaka">Melaka</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Pulau Pinang">Pulau Pinang</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Labuan">Labuan</option>
                        <option value="Putrajaya">Putrajaya</option>
                        </select></td>  
                    </tr>
            <tr>
                <th>Jantina</th>
                <td>
                    <input type="radio" class="form-control" id="Lelaki" name="jantina" value="Lelaki">
                    <label for="Lelaki">Lelaki</label>&nbsp;&nbsp;
                    <input type="radio" class="form-control" id="Perempuan" name="jantina" value="Perempuan">
                    <label for="Perempuan">Perempuan</label><br>
                </td>
            </tr>
            <tr>
                <th>Umur</th>
                <td><input type="number" class="form-control" name="umur" ></td>
            </tr>
            <tr>
                <th >Hobi</th>
                <td><input type="checkbox" id="hobi1" name="hobi1" value="Bermain badminton">
                    <label for="hobi1"> Bermain badminton</label><br>
                    <input type="checkbox" id="hobi2" name="hobi2" value="Berbasikal">
                    <label for="hobi2">Berbasikal</label><br>
                    <input type="checkbox" id="hobi3" name="hobi3" value="Membaca buku">
                    <label for="hobi3">Membaca buku</label><br><br></td>
            </tr>
            <tr>
                <th>Mempunyai raket badminton</th>
                <td>
                    <input type="radio" class="form-control" id="ada" name="raket" value="Ada">
                    <label for="ada">Ya</label>&nbsp;&nbsp;
                    <input type="radio" class="form-control" id="tidak" name="raket" value="Tidak Ada">
                    <label for="tidakada">TIdak</label><br>
                </td>
            </tr>

        </table>
        <hr>
        <div class="form-group">
            <button id="btn"name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>