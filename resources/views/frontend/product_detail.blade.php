@extends('layouts.site')
@section('title','Chi tiết sản phẩm')
@section('content')
<section class="content py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/sp1.webp') }}" class="img-fluid" alt="ADIDAS X9000L4">
            </div>
            <div class="col-md-6">
                <h1>Về sản phẩm</h1>
                <h4>ADIDAS X9000L4</h2>
                <h5>3.800.000₫</h3>
                <p>Adidas X9000L4 là một trong những dòng sản phẩm giày thể thao phổ biến và được yêu thích trên thị trường hiện nay. Đôi giày này được thiết kế với công nghệ Boost, giúp tạo ra cảm giác thoải mái và linh hoạt khi di chuyển. Bên cạnh đó, chất liệu Primeknit ở phần thân giày mang lại sự thoải mái và thoáng khí cho đôi chân.</p>
                <p>Đây là một đôi giày lý tưởng cho các hoạt động thể thao như jogging, running, hoặc thậm chí là sử dụng hàng ngày. Với thiết kế đẹp mắt và chất lượng đỉnh cao, Adidas X9000L4 đã trở thành một trong những lựa chọn hàng đầu của người tiêu dùng trên toàn thế giới.</p>
                <button class="btn btn-primary">Thêm vào giỏ hàng</button>
            </div>
        </div>
    </div>
</section>
@endsection
