<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MATAKULIAH</title>
</head>

<body>
    <h2>Edit Matakuliah</h2>
    <h4>Dila Fadilah - 181011400744</h4>
    <hr><br>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_mk where kd_mk = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>

        <form method="post" action="aksi_edit_mk.php">
            <table>
                <tr>
                    <td><label for="kd_mk">kode matakuliah</label></td>
                    <td>:</td>
                    <td><input type="text" name="kd_mk" value="<?php echo $data['kd_mk']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="nm_mk">nama matakuliah</label></td>
                    <td>:</td>
                    <td><input type="text" name="nm_mk" value="<?php echo $data['nm_mk']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="sks">sks</label></td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="sks" value="2">2<br>
                        <input type="radio" name="sks" value="3">3<br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"> </input> <input type="button" value="BATAL" onclick="window.location.href='mk_list.php'"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>