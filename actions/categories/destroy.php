<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    echo "Data kategori dengan ID $id telah dihapus.";
} else {
    echo "ID kategori tidak valid.";
}
?>