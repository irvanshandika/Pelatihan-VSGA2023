<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP - VSGA 2023</title>
</head>
<body>
    <?php 
        if(isset($_POST['nama'])){
            if($_POST['nama' == 'kosong']){
                echo "<h4>Nama Belum Dimasukkan !</h4>";
            }
            else{
                echo "<h1 style='color: red'>". $_POST['nama'] . "</h1>";
            }
        }
    ?>
    <h4>Masukkin Nama Anda: </h4>
    <form action="form.php" method="get">
        <table>
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama"></td>
                <td><input type="submit" value="cek"></td>
            </tr>
        </table>
    </form>
</body>
</html>