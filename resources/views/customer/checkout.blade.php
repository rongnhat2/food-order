@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')


      <!-- header end -->
      <div class="food-inner-banner-wrapper">
         <div class="container custom-container">
            <div class="inner-caption">
               <h3>Đặt hàng</h3>
               <ul>
                  <li><a href="/">Home</a></li>
                  <li>Đặt hàng</li>
               </ul>
            </div>
         </div>
      </div>
      <!--  -->
      <div class="food-inner-page-content-wrapper">
         <div class="container custom-container">
            <div class="inner-page-content">
               <div class="product-panel-wrapper">
                  <div class="recipe-text w-100">

                     <div class="related-form-wrappepr">
                        <div class="title-sec">
                           <h2 class="title-heading">Thông tin khách hàng</h2>
                        </div>
                        <form class="order-formdata">
                           <div class="error-log"></div>
                           
                           <div class="form-group row">
                              <div class="col-md-6 col-12">
                                 <label>Họ và tên</label>
                                 <input type="text" name="name" class="form-control require data-name"  required="" placeholder="Enter Here">
                              </div>
                              <div class="col-md-6 col-12">
                                 <label>Địa chỉ</label>
                                 <input type="text" name="name" class="form-control require data-address" required="" placeholder="Enter Here">
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-md-6 col-12">
                                 <label>Email</label>
                                 <input type="email" name="email" class="form-control require data-email" required="" placeholder="Enter Here">
                              </div>
                              <div class="col-md-6 col-12">
                                 <label>Điện thoại.</label>
                                 <input type="tel" name="email" class="form-control require data-phone" required="" placeholder="Enter Here">
                              </div>
                           </div> 
                           <button type="button" class="submitForm custom-btn action-checkout">Đặt hàng</button>
                        </form>
                     </div>

                  </div>
                  <!--  -->
               </div> 
            </div>
         </div>
      </div>
      <!--  -->

@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/js/page/checkout.js') }}"></script>
@endsection()
