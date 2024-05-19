@extends('layouts.site')
@section('title','Trang Chu')
@section('content')

<section class="menu bg-body-tertiary ">
    <div class="container ">
      <div class="row ">
        <div class="col-md-3 py-3"><strong>Danh mục sản phẩm</strong></div>
        <div class="col-md-9 ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand d-none" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent ">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sản phẩm
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Adidas</a></li>
                <li><a class="dropdown-item" href="#">Nike</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sale off</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-dark">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-dark">Tuyển dụng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-dark">Liên hệ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        </div>
      </div>
    
    </div>
    </section>
    
<div class="slider">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ ('assets/images/slider1.webp') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/images/slider2.webp') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/images/slider3.webp') }}" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
      </div>
      

    <section class="content py-3">
        <div class="container">
          <div class="product-list mb-3">
            <div><h1 style="text-align: center;"">Sản phẩm mới</h1></div>
            <div class="product_list-s py-3">
              <div class="row">
              <div class="col-md-3">
              <img src="{{ ('assets/images/sp1.webp') }}" class="img-fluid" alt="">
                <h4> ADIDAS X9000L4</h4>
                <h3>3.800.000₫</h3>
                </div>
                <div class="col-md-3">
                <img src="{{ ('assets/images/sp2.webp') }}" class="img-fluid" alt="">
                <h4> ADIDAS STAN SMITH</h4>
                <h3>2.400.000₫</h3>
                </div>
                <div class="col-md-3">
                <img src="{{ ('assets/images/sp3.webp') }}" class="img-fluid" alt="">
                <h4> Ultraboost DNA X LEGO</h4>
                <h3>4.500.000₫</h3>
                </div>
                <div class="col-md-3">
                <img src="{{ ('assets/images/sp4.webp') }}" class="img-fluid" alt="">
                <h4> Adidas ULTRABOOST 21</h4>
                <h3>3.500.000₫</h3>
                </div>
            </div>
            </div>
          </div>
        </div>
        </section>
        <section class="content py-3">
            <div class="container">
              <div class="product-list mb-3">
                <div><h1 style="text-align: center;"">Sản phẩm khuyến mãi</h1></div>
                <div class="product_list-s py-3">
                  <div class="row">
                    <div class="col-md-3">
                    <img src="{{ ('assets/images/sp5.webp') }}" class="img-fluid" alt="">
                    <h4> NIKE AF1 ALL WHITE</h4>
                    <h3>2.600.000₫</h3>
                    </div>
                    <div class="col-md-3">
                    <img src="{{ ('assets/images/sp6.webp') }}" class="img-fluid" alt="">
                    <h4> Nike Blazer x sacai x KAWS</h4>
                    <h3>5.100.000₫</h3>
                    </div>
                    <div class="col-md-3">
                    <img src="{{ ('assets/images/sp7.webp') }}" class="img-fluid" alt="">
                    <h4> Nike Air Max 90</h4>
                    <h3>5.100.000₫</h3>
                    </div>
                    <div class="col-md-3">
                    <img src="{{ ('assets/images/sp8.webp') }}" class="img-fluid" alt="">
                    <h4> NIKE Kyrie Infinity</h4>
                    <h3>4.829.000₫</h3>
                    </div>
                </div>
                </div>
              </div>
            </div>
            </section>
            <section class="post">
                <div class="container">
                    <div class="row">
                        <h2>Bài viết mới</h2>
                        <div class="row">
    <div class="col-md-3">
        <img src="https://blog.maika.ai/wp-content/uploads/2024/03/content-hay-ve-giay-dep-2-1200x793.jpg" alt="Adidas Ultraboost" class="img-fluid">
    </div>
    <div class="col-md-9">
        <h4>Giới thiệu về đôi giày Adidas Ultraboost</h4>
        <p>Adidas Ultraboost là một trong những dòng sản phẩm giày thể thao phổ biến và được yêu thích trên thị trường hiện nay. Đôi giày này được thiết kế với công nghệ Boost, giúp tạo ra cảm giác thoải mái và linh hoạt khi di chuyển. Bên cạnh đó, chất liệu Primeknit ở phần thân giày mang lại sự thoải mái và thoáng khí cho đôi chân.</p>
        <p>Đây là một đôi giày lý tưởng cho các hoạt động thể thao như jogging, running, hoặc thậm chí là sử dụng hàng ngày. Với thiết kế đẹp mắt và chất lượng đỉnh cao, Adidas Ultraboost đã trở thành một trong những lựa chọn hàng đầu của người tiêu dùng trên toàn thế giới.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <img src="https://thumb.phunutoday.vn/resize/328x182/files/news/2023/09/06/tai-sao-giay-the-thao-co-mau-day-phia-sau-cong-dung-bat-ngo-nhieu-nguoi-chua-biet-sao-giay-da-lai-khong-co-210539.jpg" alt="Adidas Ultraboost" class="img-fluid">
    </div>
    <div class="col-md-9">
        <h4>Giới thiệu về đôi giày Adidas Ultraboost</h4>
        <p>Adidas Ultraboost là một trong những dòng sản phẩm giày thể thao phổ biến và được yêu thích trên thị trường hiện nay. Đôi giày này được thiết kế với công nghệ Boost, giúp tạo ra cảm giác thoải mái và linh hoạt khi di chuyển. Bên cạnh đó, chất liệu Primeknit ở phần thân giày mang lại sự thoải mái và thoáng khí cho đôi chân.</p>
        <p>Đây là một đôi giày lý tưởng cho các hoạt động thể thao như jogging, running, hoặc thậm chí là sử dụng hàng ngày. Với thiết kế đẹp mắt và chất lượng đỉnh cao, Adidas Ultraboost đã trở thành một trong những lựa chọn hàng đầu của người tiêu dùng trên toàn thế giới.</p>
    </div>
</div>

                    </div>
                </div>
            </section>
@endsection