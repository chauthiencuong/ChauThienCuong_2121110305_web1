@extends('layouts.site')
@section('title','San pham')
@section('content')
<section class="content py-3">
        <div class="container">
          <div class="product-list mb-3">
            <div><h1 style="text-align: center;"">Tất cả sản phẩm</h1></div>
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
@endsection