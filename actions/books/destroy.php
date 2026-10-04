<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    echo "Data buku dengan ID $id telah dihapus.";
} else {
    echo "ID buku tidak valid.";
}
?>