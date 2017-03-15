<!DOCTYPE html>
<html lang="vi">
   <head>
      <?php include_once("headtag.php"); ?>
       <title>Trang đăng ký</title>
   </head>
   <body>
      <?php include_once("header.php"); ?>
       <div class="container">
           <div class="row">
               <ul class="breadcrumb">
                  <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
                  <li><a href="#">Trang đăng ký</a></li>
               </ul>
            </div>
       </div>
      <div id="register-page-section">
         <div class="container">
            <div class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                  <form class="form-horizontal">
                     <h3 class="text-center">ĐĂNG KÝ TÀI KHOẢN NGAY<br>
                        Để học tập và giao lưu với hàng triệu học viên trên mọi miền đất nước
                     </h3>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Tên đăng nhập</label>
                        <div class="col-xs-10">
                           <input type="text" class="form-control" placeholder="Nhập tên đăng nhập của bạn tại đây ...">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Mật khẩu</label>
                        <div class="col-xs-10">
                           <input type="password" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Xác nhận mật khẩu</label>
                        <div class="col-xs-10">
                           <input type="password" class="form-control">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Email</label>
                        <div class="col-xs-10">
                           <input type="email" class="form-control" placeholder="Nhập email của bạn tại đây ...">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Số điện thoại</label>
                        <div class="col-xs-10">
                           <input type="text" class="form-control" placeholder="Nhập số điện thoại của bạn tại đây ...">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Giới tính</label>
                        <div class="col-xs-10">
                           <input type="radio" name="gender" value="nam"> Nam<br>
                           <input type="radio" name="gender" value="nu"> Nữ
                        </div>
                     </div>
                      <div class="form-group">
                          <div class="col-xs-2"></div>
                          <div class="col-xs-10"><input type="submit" class="btn btn-info" name="btn-register" value="Đăng ký"></div>
                      </div>
                    
                  </form>
               </div>
               <div class="col-md-3"></div>
            </div>
         </div>
      </div>
      <?php include_once("footer.php"); ?>
   </body>
</html>