<?php require_once 'config.php';?>
<?php
$del_id= filter_input(INPUT_POST,'id');
$sql = "DELETE FROM nasa WHERE id = $del_id";
 if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . $conn->error;
}
?>