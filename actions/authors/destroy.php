<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    echo "Data penulis dengan ID $id telah dihapus.";
} else {
    echo "ID penulis tidak valid.";
}
?>