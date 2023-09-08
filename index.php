<!DOCTYPE html>
<head>
    <title>ระบบสมัครสมาชิกร้านขายหนังสือ</title>
</head>
<body>
    <form method="post" action="data.php">
        <table width='400' border="0" align="center" cellspacing="1" cellpadding="2" bgcolor="6699ff">
            <tr>
                <td colspan="2" align="center"><h4><font color="#ffffff">โปรแกรมระบบสมัครสมาชิก</font></h4></td>
            </tr>
            <tr>
                <td width="101">รหัสสมาชิก</td>
                <td width="213"><input type="text" name="idmember"></td>
            </tr>
            <tr>
                <td>ชื่อ-สกุล</td>
                <td><input type="text" name="fullname"></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td>
                <input type="checkbox" name="gender">ชาย
                <input type="checkbox" name="gender">หญิง
                </td>
            </tr>
            <tr>
                <td>เบอร์โทรศัพท์</td>
                <td><input type="text" name="phonenumber"></td>
            </tr>
            <tr>
                <td>หนังสือที่ชอบ</td>
                <td><input type="text" name="book"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="บันทึก">&nbsp;
                <input type="reset" name="reset" value="ยกเลิก"></td>
            </tr>
        </table>
    </form>
</body>
</html>