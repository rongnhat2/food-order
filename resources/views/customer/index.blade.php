@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')
      <div class="food-slider-main-wrapper">
         <div class="container custom-container">
            <div class="banner-wrapper">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="slider-caption">
                        <h5>Món ngon mỗi ngày</h5> 
                        <p>Cho Thực Phẩm Tươi & Ngon tại nhà</p>
                        <a href="/category" class="custom-btn">Đặt hàng ngay!</a>
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="41" height="46" viewBox="0 0 41 46" fill="none" class="svg anim_circle replaced-svg">
                           <path d="M18.9046 8.21366L8.50758 18.6826C3.49576 23.7291 5.20563 32.247 11.7768 34.9683L22.1738 39.2741C28.758 42.0008 36 37.1615 36 30.035V15.2603C36 6.33463 25.1942 1.88054 18.9046 8.21366Z" stroke="#E9BF95" stroke-width="10"></path>
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                     <div class="slider-img">
                        <img src="{{ asset("customer/images/slider.png") }}" alt="img">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-layer">
            <img src="{{ asset("customer/images/section-layer.png") }}" alt="img">
         </div>
      </div>
      <!--  -->
      <div class="food-pickup-main-wrapper">
         <div class="container custom-container">
            <div class="food-pickup-box-wrapper">
               <div class="pickup-box">
                  <div class="pickup-text">
                     <h4>Chọn <span>món</span> </h4> 
                  </div>
                  <div class="pickup-img">
                     <img src="{{ asset("customer/images/img3.png") }}" alt="img">
                  </div>
               </div>
               <div class="pickup-box1">
                  <div class="pickup-text">
                     <h4>Giao  <span>hàng</span> </h4> 
                  </div>
                  <div class="pickup-img">
                     <img src="{{ asset("customer/images/img4.png") }}" alt="img">
                  </div>
               </div>
               <div class="pickup-box2">
                  <div class="pickup-text">
                     <h4>Thưởng <span>thức</span> </h4> 
                  </div>
                  <div class="pickup-img">
                     <img src="{{ asset("customer/images/img5.png") }}" alt="img">
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="food-how-work-main-wrapper">
         <div class="container custom-container">
            <div class="title-sec">
               <h2 class="title-heading">Hãy đặt hàng ngay</h2>
            </div>
            <div class="work-step">
               <div class="step-one">
                  <div class="work-img">
                     <img src="{{ asset("customer/images/icon-back.png") }}" alt="icon">
                     <span>
                        <svg width="59" height="52" viewBox="0 0 59 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M18.79 24.1499H55.07M16.37 16.1499H57.14M25.44 40.8899C26.4289 40.8899 27.3956 41.1831 28.2179 41.7326C29.0401 42.282 29.681 43.0629 30.0594 43.9765C30.4379 44.8901 30.5369 45.8954 30.3439 46.8653C30.151 47.8353 29.6748 48.7262 28.9755 49.4254C28.2763 50.1247 27.3854 50.6009 26.4155 50.7938C25.4456 50.9868 24.4402 50.8877 23.5266 50.5093C22.613 50.1309 21.8321 49.49 21.2827 48.6678C20.7333 47.8455 20.44 46.8788 20.44 45.8899C20.44 44.5638 20.9668 43.2921 21.9045 42.3544C22.8422 41.4167 24.1139 40.8899 25.44 40.8899ZM44.51 40.8899C45.4989 40.8899 46.4656 41.1831 47.2879 41.7326C48.1101 42.282 48.751 43.0629 49.1294 43.9765C49.5078 44.8901 49.6069 45.8954 49.4139 46.8653C49.221 47.8353 48.7448 48.7262 48.0455 49.4254C47.3463 50.1247 46.4554 50.6009 45.4855 50.7938C44.5156 50.9868 43.5102 50.8877 42.5966 50.5093C41.683 50.1309 40.9021 49.49 40.3527 48.6678C39.8033 47.8455 39.51 46.8788 39.51 45.8899C39.51 44.5638 40.0368 43.2921 40.9745 42.3544C41.9122 41.4167 43.1839 40.8899 44.51 40.8899ZM1.14001 1.6499H11.21L20.55 32.1499H51.79L1.14001 1.6499Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </span>
                  </div>
                  <div class="work-text">
                     <a href="/category"><h4>Chọn món ăn</h4></a>
                     <p>Hãy lựa chọn trong danh mục của chúng tôi</p>
                  </div>
               </div>
               <div class="step-two">
                  <div class="arrow-img">
                     <img src="{{ asset("customer/images/arrow.png") }}" alt="icon">
                  </div>
               </div>
               <div class="step-one">
                  <div class="work-img">
                     <img src="{{ asset("customer/images/icon-back.png") }}" alt="icon">
                     <span>
                        <svg width="60" height="59" viewBox="0 0 60 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M51.41 53.1H55.57M42.86 33.88C43.5997 33.88 44.3228 34.0994 44.9378 34.5103C45.5529 34.9213 46.0322 35.5054 46.3153 36.1888C46.5984 36.8722 46.6724 37.6242 46.5281 38.3497C46.3838 39.0752 46.0276 39.7416 45.5046 40.2646C44.9815 40.7877 44.3151 41.1439 43.5896 41.2882C42.8641 41.4325 42.1122 41.3584 41.4288 41.0754C40.7454 40.7923 40.1613 40.3129 39.7503 39.6979C39.3393 39.0828 39.12 38.3597 39.12 37.62V37.62C39.12 36.6281 39.514 35.6769 40.2154 34.9755C40.9168 34.2741 41.8681 33.88 42.86 33.88V33.88ZM56.06 46.8V53.15C56.0547 54.4347 55.5421 55.6653 54.6336 56.5737C53.7252 57.4821 52.4947 57.9948 51.21 58H6.70999C5.42624 57.9948 4.19672 57.4818 3.2899 56.5731C2.38308 55.6644 1.87263 54.4338 1.87 53.15V21.6C1.87526 20.318 2.38688 19.09 3.29342 18.1835C4.19995 17.2769 5.42797 16.7653 6.70999 16.76H51.21C52.492 16.7653 53.72 17.2769 54.6266 18.1835C55.5331 19.09 56.0447 20.318 56.05 21.6V28.93L56.06 46.8ZM46.17 8.60005L28.67 16.75L46.17 8.60005ZM50.46 16L44.76 3.77005C44.4084 3.02083 43.7744 2.44136 42.9967 2.15838C42.219 1.8754 41.3608 1.91196 40.61 2.26005L10.31 16.41L50.46 16ZM42.19 28.79H55.58C56.29 28.7927 56.9701 29.0759 57.4721 29.5779C57.9742 30.0799 58.2574 30.7601 58.26 31.47V43.27C58.264 43.6255 58.1977 43.9781 58.065 44.3079C57.9324 44.6376 57.7359 44.9379 57.4869 45.1916C57.2379 45.4452 56.9413 45.6472 56.6141 45.7859C56.2868 45.9247 55.9354 45.9974 55.58 46H42.19C40.1751 45.9921 38.245 45.1875 36.8212 43.7618C35.3973 42.3361 34.5953 40.405 34.59 38.39V36.4C34.5953 34.3834 35.3987 32.4508 36.8247 31.0248C38.2508 29.5988 40.1833 28.7953 42.2 28.79H42.19ZM1.87 21.65H5.99999H1.87ZM10.11 21.65H14.27H10.11ZM18.37 21.65H22.53H18.37ZM26.63 21.65H30.79H26.63ZM34.89 21.65H39.05H34.89ZM43.15 21.65H47.31H43.15ZM51.41 21.65H55.57H51.41ZM1.87 53.1H5.99999H1.87ZM10.11 53.1H14.27H10.11ZM18.37 53.1H22.53H18.37ZM26.63 53.1H30.79H26.63ZM34.89 53.1H39.05H34.89ZM43.15 53.1H47.31H43.15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </span>
                  </div>
                  <div class="work-text">
                     <a href="javascript:;"><h4>Đặt hàng và thanh toán</h4></a>
                     <p>Chúng tôi có các cổng thanh toán tự động.</p>
                  </div>
               </div>
               <div class="step-two">
                  <div class="arrow-img">
                     <img src="{{ asset("customer/images/arrow1.png") }}" alt="img">
                  </div>
               </div>
               <div class="step-one">
                  <div class="work-img">
                     <img src="{{ asset("customer/images/icon-back.png") }}" alt="icon">
                     <span>
                        <svg width="60" height="59" viewBox="0 0 60 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M2.89001 15.91V10.1H27.14V16.37H25.46M24.5 45.55C25.6296 46.9135 27.0333 48.0241 28.62 48.81C22.06 48.44 15.19 44.91 8.69001 42.93C8.04101 42.6212 7.49381 42.1333 7.11288 41.5238C6.73196 40.9144 6.5332 40.2087 6.54001 39.49V36.41C6.54001 35.41 7.33001 34.22 8.23001 34.14H23.1C37.74 34.14 18.64 38.59 24.53 45.58L24.5 45.55ZM28.62 48.81L38.26 48.92L28.62 48.81ZM38.26 48.92C38.9244 48.9597 39.5884 48.8355 40.1935 48.5582C40.7986 48.281 41.3263 47.8592 41.73 47.33L38.26 48.92ZM41.73 47.33C42.7793 45.4824 44.2071 43.8773 45.92 42.62C47.9125 41.465 50.2298 40.9979 52.5142 41.2907C54.7986 41.5835 56.9231 42.6199 58.56 44.24L41.73 47.33ZM49.46 41C50.0802 35.7081 49.3935 30.3449 47.46 25.38L42.87 14.74C42.2 13.2 34.72 15.62 34.79 17.46L49.46 41ZM50.99 17.94C51.377 17.9404 51.7627 17.984 52.14 18.07L51.46 23.66H50.99C48.84 23.66 47.1 22.38 47.1 20.79C47.1 19.2 48.84 17.92 50.99 17.92V17.94ZM51.36 49.3C51.8382 49.2901 52.3086 49.4227 52.7112 49.681C53.1138 49.9392 53.4305 50.3115 53.6209 50.7503C53.8113 51.1891 53.8667 51.6747 53.7803 52.1451C53.6938 52.6156 53.4693 53.0496 53.1354 53.3921C52.8014 53.7345 52.3731 53.9699 51.905 54.0681C51.4368 54.1664 50.95 54.1231 50.5066 53.9438C50.0631 53.7645 49.6831 53.4572 49.4148 53.0612C49.1465 52.6652 49.0021 52.1983 49 51.72V51.72C49 51.0826 49.2525 50.4711 49.7023 50.0194C50.1521 49.5677 50.7626 49.3127 51.4 49.31L51.36 49.3ZM51.36 45.43C52.6001 45.43 53.8123 45.7977 54.8434 46.4867C55.8745 47.1757 56.6782 48.1549 57.1527 49.3006C57.6273 50.4463 57.7515 51.707 57.5095 52.9232C57.2676 54.1395 56.6704 55.2567 55.7936 56.1336C54.9167 57.0104 53.7995 57.6076 52.5832 57.8495C51.367 58.0915 50.1063 57.9673 48.9606 57.4927C47.8149 57.0182 46.8356 56.2145 46.1467 55.1834C45.4577 54.1523 45.09 52.9401 45.09 51.7C45.09 50.0371 45.7506 48.4423 46.9264 47.2665C48.1023 46.0906 49.6971 45.43 51.36 45.43V45.43ZM13.91 49.31C14.3867 49.31 14.8526 49.4514 15.2489 49.7162C15.6453 49.981 15.9542 50.3574 16.1366 50.7977C16.319 51.2381 16.3667 51.7227 16.2737 52.1902C16.1807 52.6577 15.9512 53.0871 15.6141 53.4241C15.2771 53.7612 14.8477 53.9907 14.3802 54.0837C13.9127 54.1767 13.4281 54.129 12.9877 53.9466C12.5474 53.7642 12.171 53.4553 11.9062 53.0589C11.6414 52.6626 11.5 52.1967 11.5 51.72V51.72C11.5 51.0826 11.7525 50.4711 12.2023 50.0194C12.6521 49.5677 13.2626 49.3127 13.9 49.31H13.91ZM13.91 45.44C15.1501 45.44 16.3623 45.8077 17.3934 46.4967C18.4245 47.1857 19.2282 48.1649 19.7027 49.3106C20.1773 50.4563 20.3015 51.717 20.0595 52.9332C19.8176 54.1495 19.2204 55.2667 18.3436 56.1436C17.4667 57.0204 16.3495 57.6176 15.1332 57.8595C13.917 58.1015 12.6563 57.9773 11.5106 57.5027C10.3649 57.0282 9.38565 56.2245 8.69669 55.1934C8.00774 54.1623 7.64001 52.9501 7.64001 51.71C7.64001 50.0471 8.30059 48.4523 9.47645 47.2765C10.6523 46.1006 12.2471 45.44 13.91 45.44V45.44ZM10.08 34.14H1.57001V28.33H25.81V34.14H10.08ZM14.38 8.64001V34.14V8.64001ZM14.66 7.95001C8.66001 -5.90999 -3.19999 8.89001 14.66 7.95001C28.59 7.58001 19.8 -2.23999 15.16 6.34001C15 6.60001 14.76 7.64001 14.66 7.95001V7.95001ZM5.12001 28.06V22.26H29.36L29.55 28.33H25.81L5.12001 28.06ZM5.11001 22.26H1.68001L1.57001 16.18H25.81V22L5.11001 22.26Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </span>
                  </div>
                  <div class="work-text">
                     <a href="javascript:;"><h4>Giao hàng</h4></a>
                     <p>Chúng tôi sẽ đưa đơn hàng tới cửa nhà bạn</p>
                  </div>
               </div>
            </div>
            <div class="center-btn">
               <a href="/category" class="custom-btn">Đặt hàng ngay!</a>
            </div>
         </div>
      </div>
      <!--  -->

      <div class="food-today-dish-scroll-wrapper">
         <div class="container custom-container">
            <div class="today-scroll-wrapper">
               <div class="left-today">
                  <div class="title-sec">
                     <h2 class="title-heading">Ngon như mẹ nấu</h2>
                  </div>
                  <h2>Thực đơn hôm nay</h2>
                  <div class="input-box">
                     <input type="text" class="form-control" placeholder="Search Food"> 
                     <button>Tìm kiếm</button>
                  </div> 
                  
                  <div class="side-img mt-3">
                     <a href="/category" class="custom-btn">Đặt hàng ngay!</a>
                     <img src="{{ asset("customer/images/women.png") }}" alt="img">
                  </div>
               </div>
               <div class="right-today">
                  <div class="menu-tabs-wrapper">
                     <div class="menu-name">
                        <h3>Menu hôm nay</h3>
                     </div>
                     <div class="menu-tabs">
                        <div class="tabs-panel-wrapper">
                           <ul class="nav nav-tabs" id="tabnext" role="tablist">
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
                                       <span>{{ $value->prices }} đ</span>
                                    </div>
                                    <p class="cutting">{{ $value->description }}</p>
                                       <div class="btn-sec">
                                          <a href="javascript:;" class="custom-btn action-add-to-card" atr="Add to card" data-id="{{ $value->id }}">Add</a> 
                                       </div>
                                 </div>
                              </div>
                           <?php endforeach ?>

                        </div>
                        <!--  -->
                        <div class="view-btn-sec">
                           <a href="javascript:;" class="custom-btn">Xem tất cả</a>
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
                                 <h4><a href="javascript:;">Vada Pav</a></h4>
                                 <p class="cutting">{{ $value->description }}</p>
                                 <span>{{ $value->prices }} đ</span>
                                 <a href="javascript:;" class="custom-btn action-add-to-card" atr="Add to card" data-id="{{ $value->id }}">Add</a>
                              </div>
                           </div> 
                           <?php endforeach ?>
                        </div> 
                        <div class="view-btn-sec">
                           <a href="/category" class="custom-btn">View All</a>
                        </div>
                     </div>
                     
                   </div>
               </div>
            </div>
         </div>
      </div>

@endsection()

@section('sub_layout')

@endsection()


@section('js')

@endsection()
