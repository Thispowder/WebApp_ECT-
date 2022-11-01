<?php
    session_start();
    if(isset($_SESSION['id'])){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>register</title>
</head>
<body>
    <div class="container">
    <h1 style="text-align:center">Webboard Asahi</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card text-dark bg-white bordor-primary">
                <div class="card-header bg-primary bg-primary text-white">กรอกข้อมูล</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อบัญชี : </label>
                            <div class="col-md-9">
                                <input type="text" name="login" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">รหัสผ่าน : </label>
                            <div class="col-md-9">
                                <input type="password" name="pwd" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">ชื่อ-นามสกุล : </label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label pt-0">เพศ : </label>
                            <div class="col-md-9">
                                <div class="form-check">
                               <input type="radio" class="form-check-input" name="gender" value="m" required>
                               <label class="form-check-label">ชาย</label>
                             </div>
                                <div class="form-check">
                               <input type="radio" class="form-check-input" name="gender" value="f" required>
                               <label class="form-check-label">หญิง</label>
                             </div>
                             <div class="form-check">
                               <input type="radio" class="form-check-input" name="gender" value="o" required>
                               <label class="form-check-label">อื่นๆ</label>
                             </div>                            
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label">E-Mail : </label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-primary btn-sm" type="submit"><i class="bi bi-save2"></i> สมัครสมาชิก </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>  
    </div>
</body>
</html>