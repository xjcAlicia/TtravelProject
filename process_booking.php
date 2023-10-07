<?php
// 建立與 MySQL 數據庫的連接
$link = mysqli_connect("localhost","root",
                       "","ttravel_project")
        or die("Can not open MySQL database!<br/>");

// 從 POST 請求中獲取表單數據
$name = $_POST["contentName"];
$email = $_POST["contentEmail"];
$phone = $_POST["contentPhone"];
$guests = $_POST["contentGuests"];
$dateRange = $_POST["contentDateRange"];
$roomType = $_POST["contentRoomType"];

// SQL 查詢字串
$sql = "INSERT INTO booking (bname, bmail, bphone, bpeople, date_range, room_type) VALUES ('$name', '$email', '$phone', '$guests', '$dateRange', '$roomType')";

if ($result = mysqli_query($link, $sql)) {
    echo "<script>alert('訂房成功!');window.location.href = 'room.html';</script>";
} else {
    echo "<script>alert('訂房失敗，請稍後再重新填寫表單，感謝您的配合!');</script>";
}

// 關閉數據庫連接
$conn->close();
?>
