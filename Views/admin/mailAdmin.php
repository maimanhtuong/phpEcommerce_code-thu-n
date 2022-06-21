<form method="post" action="index.php?controller=mailAdmin&action=sendMail"> 
  <div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control bg-light" name="email" placeholder="Nhập email của bạn">
  </div>
  <div class="mb-3">
  <label class="form-label">Nội dung liên hệ</label>
  <textarea class="form-control bg-light" name="noidunglienhe" rows="5"></textarea>
  </div>  
  <div class="mb-3">
     <button  type="submit" class="btn btn-primary">GỬI LIÊN HỆ</button>
  </div>
 </form>