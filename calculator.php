<?php
include "function.php";

$hasil = "0";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];
    $hasil = hitung($angka1, $angka2, $operator);
    add_session_hist($angka1, $angka2, $operator, $hasil);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
     <div class="container">
                <h2>Welcome To Calculator</h2>
                <a href="history.php">Lihat Riwayat &raquo;</a>
            <form action="" method="post">
                <table>
                    <tr>
                        <th>Angka 1</th>
                        <th>operator</th>
                        <th>Angka 2</th>
                    </tr>
                    <tr>
                        <td>
                        <input type="text" name="angka1">
                        </td>
                    
                        <td>
                            <select name="operator" id="">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="x">x</option>
                            <option value="/">/</option>
                            </select>
                        </td>

                        <td>
                            <input type="text" name="angka2">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit" value="HITUNG"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div id="hasil"><?=$hasil?></div>
                        </td>
                    </tr>
                </table>
            </form>
    
    </div>
</body>
</html>