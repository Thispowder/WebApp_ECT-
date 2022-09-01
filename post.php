<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <h1 align="center">Webboard KIKI</h1>
    <hr>
    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br><br>
        <table style="width: 10%;  border: 2px solid black;">
        <tr><td style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea rows="4" cols="35"></textarea></td></tr>
        <tr><td align="center"><input type="submit" name="submit" value="ส่งข้อความ"></td></tr>
        </table><br>
        <a href="index.html">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>