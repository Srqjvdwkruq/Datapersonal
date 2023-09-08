<?php
include 'connect.php';
    $idmember = $_POST["idmember"];
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $phonenumber = $_POST["phonenumber"];
    $book = $_POST["book"];

    $sql = "INSERT INTO personal(idmember,fullname,gender,phonenumber,book) VALUES('$idmember','$fullname','$gender','$phonenumber','$book')";
    $dbquery = mysqli_query($con,$sql);
if ($dbquery)
    {
        echo "<table width='500' border='0' cellspacing='0' cellpadding='1' align='center' bgcolor='6699ff'>";
        echo "<tr>";
        echo "<td align='center'> โปรแกรมระบบสมัครสมาชิกร้านขายหนังสือ </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td align='center'>ระบบได้ทำการบันทึกข้อมูลของคุณ $fullname เรียบร้อยแล้ว</td>";
        echo "</tr>";
        echo "</table>";
    }else
    {
        echo "ไม่สามารถทำการบันทึกข้อมูลได้";
    }
mysqli_close();
?>
