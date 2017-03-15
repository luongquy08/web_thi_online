<!DOCTYPE html>
<html lang="vi">
   <head>
      <?php include_once("headtag.php"); ?>
      <title>Profile page</title>
   </head>
   <body>
      <?php include_once("header.php"); ?>
      <div class="container">
         <div class="row">
            <ul class="breadcrumb">
               <li><a href="#"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
               <li><a href="#">Tài khoản</a></li>
            </ul>
         </div>
      </div>
      <div id="profile-section">
         <div class="container">
            <div class="row">
               <div class="col-xs-3 col-md-3" >
                  <img class="img-thumbnail" src="img/hinata.jpg" class="img-responsive" alt="Responsive image">
                  <input type="file">
               </div>
               <div class="col-xs-9 col-md-9">
                  <ul class="nav nav-tabs" id="k">
                     <li class="active"><a href="#inf" data-toggle="tab">Thông tin chung</a></li>
                     <li><a href="#secu" data-toggle="tab">Bảo mật tài khoản</a></li>
                     <li><a href="#his" data-toggle="tab">Lịch sử</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="inf">
                        <h3 class="text-center">Thông tin chung</h3>
                        <form class="form-horizontal">
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Họ & tên</label>
                              <input type="text" class="col-xs-10" class="form-control" value="Nguyễn Thị Nhàn">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Ngày sinh</label>
                              <input type="DATE" class="col-xs-10" class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Giới tính</label>
                              <div class="col-xs-10">
                                 <input type="radio" name="gender" value="nam"> Nam<br>
                                 <input type="radio" name="gender" value="nu"> Nữ
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2" >Quê</label>
                              <input type="text" class="col-xs-10" class="form-control" value="Hưng Yên">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2" >Số điện thoại</label>
                              <input type="text" class="col-xs-10" class="form-control" value="01633461337">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2" >Email</label>
                              <input type="email" class="col-xs-10" class="form-control"  value="nhannt97hy@gmail.com">
                           </div>
                           <div class="form-group">
                              <div class="col-xs-offset-2 col-xs-10">
                                 <button type="submit" class="btn btn-primary">Cập nhật</button>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane" id="his">
                        <h3 class="text-center">Lịch sử các bài kiểm tra</h3>
                        <div class="row">
                           <div class="col-xs-2">
                              <p>Ngày 1/2/2017</p>
                           </div>
                           <div class="col-xs-10">
                              <p><em>Bài kiểm tra 15' Dao động điều hòa</em></p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-2">
                              <p>Ngày 2/2/2017</p>
                           </div>
                           <div class="col-xs-10">
                              <p><em>Bài kiểm tra 45' Toán</em></p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-2">
                              <p>Ngày 3/2/2017</p>
                           </div>
                           <div class="col-xs-10">
                              <p><em>Bài kiểm tra 15' Tiếng Việt</em></p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-2">
                              <p>Ngày 4/2/2017</p>
                           </div>
                           <div class="col-xs-10">
                              <p><em>Bài kiểm tra 15' Hóa</em></p>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane" id="secu">
                        <h3 class="text-center">Thay đổi mật khẩu</h3>
                        <form class="form-horizontal">
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Mật khẩu cũ</label>
                              <input type="password" class="col-xs-10" class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Mật khẩu mới</label>
                              <input type="password" class="col-xs-10" class="form-control">
                           </div>
                           <div class="form-group">
                              <label class="control-lable col-xs-2">Xác nhận mật khẩu mới</label>
                              <input type="password" class="col-xs-10" class="form-control">
                           </div>
                           <div class="form-group">
                              <div class="col-xs-offset-2 col-xs-10">
                                 <button type="submit" class="btn btn-primary">Cập nhật</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include_once("footer.php"); ?>
   </body>
</html>