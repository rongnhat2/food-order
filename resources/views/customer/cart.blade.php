@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

   <!-- header end -->
   <div class="food-inner-banner-wrapper">
      <div class="container custom-container">
         <div class="inner-caption">
            <h3>Cart</h3>
            <ul>
               <li><a href="/">Home</a></li>
               <li>Cart</li>
            </ul>
         </div>
      </div>
   </div>
   <!--  -->
   <div class="food-inner-page-content-wrapper">
      <div class="container custom-container">
         <div class="inner-page-content">
            <div class="food-cart-main-wrapper">
               <div class="cart-strip-main-wrapper">
                  <div class="cart-item">
                     <div class="cart-item-img">
                        <img src="images/item/item1.png" alt="logo">
                        <h5>1x Khichadi</h5>
                     </div>
                  </div>
                  <div class="cart-item">
                     <p>Half</p>
                  </div>
                  <div class="cart-item">
                     <div class="quantity-field">
                       <button class="value-button decrease-button" onclick="decreaseValue(this)" title="Azalt">-</button>
                         <div class="number">0</div>
                       <button class="value-button increase-button" onclick="increaseValue(this, 5)" title="Arrtır">+
                       </button>
                     </div>
                  </div>
                  <div class="cart-item">
                     <h4>$100.00</h4>
                  </div>
                  <div class="cart-item">
                     <span><a href="javscript:;">X</a></span>
                  </div>
               </div>
               <!--  -->
               <div class="cart-strip-main-wrapper mt-4">
                  <div class="cart-item">
                     <div class="cart-item-img">
                        <img src="images/item/item2.png" alt="logo" />
                        <h5>1x Matar Paneer</h5>
                     </div>
                  </div>
                  <div class="cart-item">
                     <p>Full</p>
                  </div>
                  <div class="cart-item">
                     <div class="quantity-field" >
                       <button 
                         class="value-button decrease-button" 
                         onclick="decreaseValue(this)" 
                         title="Azalt">-</button>
                         <div class="number">0</div>
                       <button 
                         class="value-button increase-button" 
                         onclick="increaseValue(this, 5)"
                         title="Arrtır"
                       >+
                       </button>
                     </div>
                  </div>
                  <div class="cart-item">
                     <h4>$105.00</h4>
                  </div>
                  <div class="cart-item">
                     <span><a href="javscript:;">X</a></span>
                  </div>
               </div>
               <!--  -->
               <div class="cart-strip-main-wrapper mt-4">
                  <div class="cart-item">
                     <div class="cart-item-img">
                        <img src="images/item/item3.png" alt="logo" />
                        <h5>1x Dal Tadka</h5>
                     </div>
                  </div>
                  <div class="cart-item">
                     <p>Half</p>
                  </div>
                  <div class="cart-item">
                     <div class="quantity-field" >
                       <button 
                         class="value-button decrease-button" 
                         onclick="decreaseValue(this)" 
                         title="Azalt">-</button>
                         <div class="number">0</div>
                       <button 
                         class="value-button increase-button" 
                         onclick="increaseValue(this, 5)"
                         title="Arrtır"
                       >+
                       </button>
                     </div>
                  </div>
                  <div class="cart-item">
                     <h4>$60.00</h4>
                  </div>
                  <div class="cart-item">
                     <span><a href="javscript:;">X</a></span>
                  </div>
               </div>
               <!--  -->
               <div class="cart-strip-main-wrapper mt-4">
                  <div class="cart-item">
                     <div class="cart-item-img">
                        <img src="images/item/item4.png" alt="logo" />
                        <h5>1x Jeera Rice</h5>
                     </div>
                  </div>
                  <div class="cart-item">
                     <p>Full</p>
                  </div>
                  <div class="cart-item">
                     <div class="quantity-field" >
                       <button 
                         class="value-button decrease-button" 
                         onclick="decreaseValue(this)" 
                         title="Azalt">-</button>
                         <div class="number">0</div>
                       <button 
                         class="value-button increase-button" 
                         onclick="increaseValue(this, 5)"
                         title="Arrtır"
                       >+
                       </button>
                     </div>
                  </div>
                  <div class="cart-item">
                     <h4>$80.00</h4>
                  </div>
                  <div class="cart-item">
                     <span><a href="javscript:;">X</a></span>
                  </div>
               </div>
               <!--  -->
               <div class="cart-total-main-wrapper">
                  <div class="cart-item">
                     <div class="terms">
                        <form>
                           <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I have read and agreed to the Terms &amp; Conditions.</label>
                          </div>
                        </form>
                     </div>
                  </div>
                  <div class="cart-price">
                     <div class="price-list">
                        <p>Total of product pricing </p>
                        <span>$5.99</span>
                     </div>
                     <div class="price-list">
                        <p>Estimated Shipping Charges</p>
                        <span>$0.00</span>
                     </div>
                     <div class="price-list">
                        <p>Total</p>
                        <span>$345.00</span>
                     </div>
                  </div>
               </div>
               <a href="checkout.html" class="custom-btn">Proceed To Checkout</a>
            </div>
         </div>
      </div>
   </div>
   <!--  -->
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()
