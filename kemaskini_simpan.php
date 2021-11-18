<?php
require 'conn.php';

$idmakananbasah = $_POST['idmakananbasah'];
$namamakanan = $_POST['namamakanan'];
$hargamakanan = $_POST['hargamakanan'];

$sql = "UPDATE senaraimakanan SET namamakanan = ?, hargamakanan = ? WHERE idmakananbasah = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sdi', $namamakanan, $hargamakanan, $idmakananbasah);
$stmt->execute();

if ($conn->error) {
    ?>
    <script>
        alert('Maaf! Nama makanan tersebut sudah wujud dalam senarai');
        window.location = 'index.php';
    </script>
    <?php
    exit;
} else {
    header('location: index.php');
}