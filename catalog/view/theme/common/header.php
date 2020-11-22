<!doctype html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column h-100">
<!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-4 py-4">
          <h4 class="text-white">สวัสดีคุณ xx</h4>
          <p class="text-muted">เข้าใช้งานระบบล่าสุดเมื่อวันที่ x <br>มีคนต้องการติดต่อคุณจำนวน x</p>
        </div>
        <div class="col-4 py-4">
          <h4 class="text-white">สมาชิก</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">เข้าสู่ระบบ</a></li>
            <li><a href="#" class="text-white">สมัครสมาชิก</a></li>
            <li><a href="#" class="text-white">ข้อมูลส่วนตัว</a></li>
            <li><a href="#" class="text-white">ยืนยันตัวตน</a></li>
          </ul>
        </div>
        <div class="col-4 py-4">
          <h4 class="text-white">เส้นทาง</h4>
          <ul class="list-unstyled">
            <li>
              <a href="#" class="text-white">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                </svg> หน้าหลัก
              </a>
            </li>
            <li><a href="#" class="text-white">ขายของ</a></li>
            <li><a href="#" class="text-white">ประมูล</a></li>
            <li><a href="#" class="text-white">พูดคุย</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="d-flex justify-content-between text-center">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>ซื้อขายเกม</strong> &nbsp;
      </a>
    </div>
    <form class=" p-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="ค้นหา">
        <div class="input-group-append">
          <!-- <select name="" class="form-control" id=""><option value="">1</option></select> -->
          <button type="submit" class="btn btn-secondary">ค้นหา</button>
        </div>
      </div>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</header>