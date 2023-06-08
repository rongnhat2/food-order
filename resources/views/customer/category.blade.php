@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')

  <div class="food-inner-banner-wrapper">
     <div class="container custom-container">
        <div class="inner-caption">
           <h3>Món ăn</h3>
           <ul>
              <li><a href="/">Trang chủ</a></li>
              <li>Món ăn</li>
           </ul>
        </div>
     </div>
  </div>
  <!--  -->
     <div class="food-inner-page-content-wrapper">
        <div class="container custom-container">
           <div class="inner-page-content">
              <div class="side-panel-box-wrapper">
                 <div class="side-panel-wrapper">
                    <!--  -->
                    <div class="side-bar-strip">
                       <div class="title-sec">
                          <h2 class="title-heading">Danh mục</h2>
                       </div> 
                       <ul>
                          <li> <a href="javascript:;"> <span></span> Chicken Salad Pieces</a> </li>
                          <li> <a href="javascript:;"> <span></span> Vegetable Sausage</a> </li>
                       </ul>
                    </div> 
                    <div class="side-bar-strip mb-0"> 
                       <div class="clear-btn">
                          <a href="javascript:;" class="custom-btn">Xóa danh mục</a>
                       </div>
                    </div>
                    <!--  -->
                 </div>

              </div>
             
              <div class="product-panel-wrapper">
                 <div class="right-today">
                    <div class="menu-tabs-wrapper">
                       <div class="menu-name">
                          <h3>Danh mục món ăn</h3>
                       </div>
                       <div class="menu-tabs">
                          <div class="tabs-panel-wrapper">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"> <span><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M25.1064 1.59155H8.36877V4.38115H25.1064V1.59155Z" fill=""/>
                                   <path d="M25.1064 11.3552H8.36877V14.1448H25.1064V11.3552Z" fill=""/>
                                   <path d="M25.1064 21.1187H8.36877V23.9083H25.1064V21.1187Z" fill=""/>
                                   <path d="M2.7896 5.77597C4.33025 5.77597 5.5792 4.52703 5.5792 2.98638C5.5792 1.44572 4.33025 0.196777 2.7896 0.196777C1.24895 0.196777 0 1.44572 0 2.98638C0 4.52703 1.24895 5.77597 2.7896 5.77597Z" fill=""/>
                                   <path d="M2.7896 15.5396C4.33025 15.5396 5.5792 14.2907 5.5792 12.75C5.5792 11.2094 4.33025 9.96045 2.7896 9.96045C1.24895 9.96045 0 11.2094 0 12.75C0 14.2907 1.24895 15.5396 2.7896 15.5396Z" fill=""/>
                                   <path d="M2.7896 25.3031C4.33025 25.3031 5.5792 24.0541 5.5792 22.5135C5.5792 20.9728 4.33025 19.7239 2.7896 19.7239C1.24895 19.7239 0 20.9728 0 22.5135C0 24.0541 1.24895 25.3031 2.7896 25.3031Z" fill=""/>
                                   </svg>
                                   </span> </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> <span><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M11.5556 11.5556H0V1.44444C0 1.06135 0.152182 0.693954 0.423068 0.423068C0.693954 0.152182 1.06135 0 1.44444 0H11.5556V11.5556ZM26 1.44444C26 1.06135 25.8478 0.693954 25.5769 0.423068C25.306 0.152182 24.9386 0 24.5556 0H14.4444V11.5556H26V1.44444ZM1.44444 26H11.5556V14.4444H0V24.5556C0 24.9386 0.152182 25.306 0.423068 25.5769C0.693954 25.8478 1.06135 26 1.44444 26ZM26 24.5556V14.4444H14.4444V26H24.5556C24.9386 26 25.306 25.8478 25.5769 25.5769C25.8478 25.306 26 24.9386 26 24.5556Z" fill=""/>
                                   </svg>
                                   </span> </button>
                                </li>
                              </ul> 
                          </div>
                       </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                          <div class="custom-inner-tab-main-wrapper">
                             <?php foreach ($food as $key => $value): ?>
                              <div class="food-product-main-wrapper">
                                 <div class="product-img">
                                    <img src="{{ $value->image }}" alt="img" style="object-fit: cover; height: 100%">
                                    <div class="img-top-btn">
                                       <a href="javascript:;">New</a> 
                                    </div>
                                 </div>
                                 <div class="product-text">
                                    <div class="product-rate">
                                       <h3><a href="javascript:;">{{ $value->name }}</a></h3>
                                       <span>{{ $value->price }} đ</span>
                                    </div>
                                    <p class="cutting">{{ $value->description }}</p>
                                       <div class="btn-sec">
                                          <a href="javascript:;" class="custom-btn action-add-to-card" atr="Add to card" data-id="{{ $value->id }}">Thêm</a> 
                                       </div>
                                 </div>
                              </div>
                           <?php endforeach ?>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                          <div class="food-kitchen-grid-wrapper">
                            <?php foreach ($food as $key => $value): ?>
                           <div class="food-kitchen-main-wrapper"> 
                              <div class="kitchen-img">
                                 <img src="{{ $value->image }}" alt="img" style="object-fit: cover; height: 100%">
                              </div>
                              <div class="kitchen-text">
                                 <h4><a href="javascript:;">{{ $value->name }}</a></h4>
                                 <p class="cutting">{{ $value->description }}</p>
                                    <span>{{ $value->price }} đ</span>
                                    <a href="javascript:;" class="custom-btn action-add-to-card" atr="Add to card" data-id="{{ $value->id }}">Thêm</a>
                              </div>
                           </div> 
                           <?php endforeach ?>
                          </div>
                       </div>
                     </div> 
                 </div>
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
