<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body>
   <header>
   <section class="header bg-black text-white py-3">    
<div class="container bg-black text-white py-3">
<div class="row">
    <div class="col-md-2">
      <img src="https://i.pinimg.com/736x/5c/92/22/5c922274939c43d43503fab5cc4506c5.jpg" width="100%" height="80" alt="">
    </div>
    <div class="col-md-4 ">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
</div>
    </div>
    <div class="col-md-3 ">
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col-3">
              <div class="fs-3 ">
              <i class="fa-solid fa-phone"></i>
              </div>
            </div>
            <div class="col-9">Tư vấn hỗ trợ
              <br>
              <strong>0948622671</strong>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="col-3">
              <div class="fs-3"><i class="fa-solid fa-user"></i></div>
            </div>
            <div class="col-9">Xin chào!
              <br>
              <strong>Đăng nhập</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 ">
      <div class="row">
        <div class="col">
          <a href="#" class=" position-relative">
      <span class="fs-3"><i class="fa-regular fa-heart"></i></span>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
  0
    <span class="visually-hidden">unread messages</span>
  </span> 
    </a>
  </div>
        <div class="col">
          <a href="#" class=" position-relative">
      <span class="fs-3"><i class="fa-solid fa-cart-shopping"></i></span>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
  0
    <span class="visually-hidden">unread messages</span>
  </span> 
    </a>
  </div>
        <div class="col">
          <a href="#" class=" position-relative">
      <span class="fs-3"><i class="fa-solid fa-angles-right"></i></span>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
  0
    <span class="visually-hidden">unread messages</span>
  </span> 
    </a>
  </div>
  </div>
  </div>
  </div>
</div>
</section>
   </header>

   @yield('content')

   <footer>
   <section class="footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul style="list-style-type: none;">
                            <li><img src="https://bizweb.dktcdn.net/100/437/253/themes/878768/assets/logo.png?1681805246631" width="140" height="40" alt=""></li>
                            <li><i class="fa-solid fa-location-dot"></i>Tầng 6, Tòa nhà Ladeco, 266 Đội Cấn, Phường Liễu Giai, Quận Ba Đình, TP Hà Nội</li>
                            <li><i class="fa-solid fa-phone"></i>19006067</li>
                            <li><i class="fa-solid fa-headphones"></i>support@sapo.vn</li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul style="list-style-type: none;">
                            <li><h3>Về chúng tôi</h3></li>
                            <li>Trang chủ</li>
                            <li>Giới thiệu</li>
                            <li>Sản phẩm</li>
                            <li>Tin tức</li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul style="list-style-type: none;">
                            <li><h3>Chính sách</h3></li>
                            <li>Trang chủ</li>
                            <li>Giới thiệu</li>
                            <li>Sản phẩm</li>
                            <li>Tin tức</li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4090.6272853893815!2d105.82825854554005!3d21.027289280036154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0970fd0f07%3A0x5c4669128a34ef4e!2zQmEgxJDDrG5oLCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1693092055383!5m2!1svi!2s" width="400" height="200" style="border:0;"></iframe>
                    </div>
                </div>
                <hr>
                <p style="text-align: center; color: white;">Muốn mua giày đẹp hãy đến với chúng tôi</p>
            </div>
        </section>
   </footer>
</body>
</html>
