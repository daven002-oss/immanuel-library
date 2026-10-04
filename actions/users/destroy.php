<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    echo "Data user dengan ID $id telah dihapus.";
} else {
    echo "ID user tidak valid.";
}
?>