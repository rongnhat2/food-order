@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

   <!-- header end -->
   <div class="food-inner-banner-wrapper">
      <div class="container custom-container">
         <div class="inner-caption">
            <h3>Giỏ hàng</h3>
            <ul>
               <li><a href="/">Home</a></li>
               <li>Giỏ hàng</li>
            </ul>
         </div>
      </div>
   </div>
   <!--  -->
   <div class="food-inner-page-content-wrapper">
      <div class="container custom-container">
         <div class="inner-page-content">
            <div class="food-cart-main-wrapper">
               <div class="cart-list">
                  
               </div> 
               <div class="cart-total-main-wrapper"> 
                  <div class="cart-price"> 
                     <div class="price-list">
                        <p>Tổng</p>
                        <span class="total-price"></span>
                     </div>
                  </div>
               </div>
               <a href="/checkout" class="custom-btn on-checkout">Đặt hàng</a>
               <a href="#" class="custom-btn on-update">Cập nhật đơn hàng</a>
            </div>
         </div>
      </div>
   </div>
   <!--  -->
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/js/page/cart.js') }}"></script>
@endsection()
