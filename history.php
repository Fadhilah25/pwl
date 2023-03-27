<?php
session_start();

if(isset($_GET['del'])){
    unset($_SESSION['history'][$_GET['del']]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat | Calculator</title>
</head>
<body>
    <div>
        <div>
            <header>
                <h1>Riwayat Perhitungan</h1>
                <a href="calculator.php">Kembali &raquo;</a>
            </header>

            <table>
                <?php foreach($_SESSION['history'] as $idx => $data): ?>
                <tr>
                    <td><?=$data[0]?></td>
                    <td><?=$data[1]?></td>
                    <td><?=$data[2]?></td>
                    <th><?=$data[3]?></th>
                    <td>
                        <a href="history.php?del=<?=$idx?>"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
</body>
</html>