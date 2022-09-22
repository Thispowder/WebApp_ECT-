<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpost</title>
</head>
<body>
    <h1 style="text-align:center;">Webbord KIKI</h1>
    <hr>
    ผู้ใช้ : <?php echo $_SESSION['usernsme']?>&nbsp; <br>
    
    <form>
    <table  style="width: 25%;   align="center">
        <tr><td>หมวดหมู่ :</td><td><select name="category">
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option>
    </select></td></tr>
        <tr><td>หัวข้อ :</td><td><input type="text" name="topic" size="30"></td></tr>
        <tr><td>เนื้อหา :</td><td><textarea name="" id="" cols="30" rows="2"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
    </form>
</body>
</html>