<!DOCTYPE html>
<!-- 
   Template Name: Mother's Recipe HTML
   Version: 1.0.0
   Author: Webstrot 
   
   -->
<!--[if IE 8]> 
<html lang="en" class="ie8 no-js">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9 no-js">
      <![endif]-->
      <!--[if !IE]><!-->
      <html lang="zxx" dir="ltr">
         <!--[endif]-->
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mother's Recipe HTML</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
       <!-- fav icon link  -->
       <link rel="icon" href="images/fav.png" type="image/x-icon" />
      <!--Template style -->
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/animate.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/animate.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/bootstrap.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/fonts.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/font-awesome.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/font-awesome.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/custom-select.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/owl.carousel.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/owl.theme.default.min.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/toggle.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/style.css") }}" />
      <link rel="stylesheet" type="text/css" href="{{ asset("customer/css/responsive.css") }}" />
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
      <style type="text/css" media="screen">
         .cutting{
            padding: 0 !important;
            margin: 12px auto 0 auto !important;
            overflow: hidden;
             text-overflow: ellipsis;
             line-height: 25px !important;
             -webkit-line-clamp: 3;
             height: 75px;
             display: -webkit-box;
             -webkit-box-orient: vertical;
         }
         .suggest-list{
            position: relative;
         }
         .suggest-list .suggess-wrapper{
             position: absolute;
             top: 100%;
             left: 0px;
             width: 100%;
             max-width: 500px;
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 0 0 4px 4px;
             background-color: #fff;
             z-index: 1000;
         }
         .suggest-list .suggess-wrapper a{
           color: #000;
         }
         .suggest-list .suggess-wrapper p{
           font-size: 10px;
           margin: 0 0 3px 0;
         }
         .suggess-item .highlight {
           background-color: yellow;
         }
      </style>    
   </head>
   <body>
      <!-- help-fix -->
      <div id="preloader">
         <div id="status">
            <img src="{{ asset("customer/images/loader.gif") }}" id="preloader_image" alt="loader">
         </div>
      </div>
      <!-- top to return -->
      <a href="javascript:;" id="return-to-top" class="change-bg2"> <i class="fas fa-angle-double-up"></i></a>
      <!-- header start -->
      <div class="main-header-wrapper1">
         <div class="right-sidebar" id="right-sidebar">
            <div class="toggle-top-header">
               <button class="sidebar-close"></button>
            </div>
            <div class="toggle-content">
               <ul>
                 <li class="mega-menu-item"><a href="/"><small>01</small>  Home</a> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                   </svg></span>
                  </li>
                  <li class="mega-menu-item"><a href="about-us.html"><small>02</small> About us</a> <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                   </svg></span>
                  </li> 
               </ul>
            </div>
         </div>
         <!--  -->
         <div class="cart-details" id="cart-sidebar">
            <div class="toggle-top-header">
               <button class="cart-close"></button>
            </div>
            <div class="toggle-content">
               <p>No Product in the Cart</p>
            </div>
         </div>
         <!--  -->
         <div class="sb-main-header1">
            <div class="menu-items-wrapper menu-item-wrapper3 d-xl-block d-lg-block d-md-none d-sm-none d-none">
               <div class="ps_header_bottom">
                  <div class="row">
                     <div class="col-lg-8 col-md-6 col-12">
                        <div class="left-header-side">
                           <div class="menu-bar">
                              <a href="javascript:;">
                                 <span class="sidebar-toggle">
                                    <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <rect width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="14" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="14" y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="14" y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="27" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="27" y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                       <rect x="27" y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                    </svg>
                                 </span>
                              </a>
                           </div>
                           <a href="/" class="main-logo"><img src="{{ asset("customer/images/logo.png") }}" alt="Logo"></a>
                           <div class="input-box suggest-list">
                              <input type="text" class="form-control product-search-field " placeholder="Enter your Delivery Location">  
                              <button type="submit">Search</button>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="right-logo cart-count">
                           <ul> 
                              <li>
                                 <a href="javascript:;" class="cart-toggle">
                                    <span>
                                       <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15.1669 12.3335H12.8334V19.3335H15.1669V12.3335Z" fill="#EB0029"/>
                                          <path d="M10.5 12.3335H8.16653V19.3335H10.5V12.3335Z" fill="#EB0029"/>
                                          <path d="M19.8334 12.3335H17.4999V19.3335H19.8334V12.3335Z" fill="#EB0029"/>
                                          <path d="M22.2396 7.66696L19.692 0.666992L17.4999 1.46429L19.7567 7.66696H8.24177L10.5 1.46429L8.30792 0.666992L5.75923 7.66696H0V10.0004H2.33344L4.28293 21.6988C4.49363 22.9644 5.71618 24 7.00032 24H21.0003C22.283 24 23.5066 22.9644 23.7177 21.6988L25.6668 10.0004H27.9999V7.66696H22.2396ZM21.4157 21.3159C21.3919 21.4569 21.1434 21.6669 20.9999 21.6669H6.99997C6.85647 21.6669 6.60797 21.4569 6.58417 21.3148L4.69838 10.0004H23.3012L21.4157 21.3159Z" fill="#EB0029"/>
                                       </svg>
                                    </span>
                                    <small class="count">0</small> 
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- responsive menu bar start -->
            <div class="mobile-menu-wrapper d-xl-none d-lg-none d-md-block d-sm-block">
               <div class="container-fluid">
                  <div class="row">
                     <div class=" col-md-4 col-sm-4 col-6">
                        <div class="mobil-left-side">
                           <div class="toggle-main-wrapper" id="sidebar-toggle">
                              <span><svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="14" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="14" y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="14" y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="27" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="27" y="12" width="5" height="5" rx="2.5" fill="#111111"/>
                                 <rect x="27" y="24" width="5" height="5" rx="2.5" fill="#111111"/>
                                 </svg>
                                 </span>
                             
                           </div>
                           <div class="mobile-logo">
                              <a href="">
                              <img src="images/logo.png" alt="logo">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8 col-sm-8 col-6">
                        <div class="d-flex  justify-content-end">
                           <div class="right-logo">
                              <ul>
                                 <li class="search-btn">
                                    <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </span>
                                    <div class="search-open">
                                       <input type="text" class="form-control" placeholder="Search">
                                       <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div> 
                                 </li>
                                 <li class="signup"><a href="javascript:;"> Sign Up </a></li>
                                 <li>
                                    <a href="javascript:;">
                                       <span>
                                          <svg width="28" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M15.1669 12.3335H12.8334V19.3335H15.1669V12.3335Z" fill="#EB0029"></path>
                                             <path d="M10.5 12.3335H8.16653V19.3335H10.5V12.3335Z" fill="#EB0029"></path>
                                             <path d="M19.8334 12.3335H17.4999V19.3335H19.8334V12.3335Z" fill="#EB0029"></path>
                                             <path d="M22.2396 7.66696L19.692 0.666992L17.4999 1.46429L19.7567 7.66696H8.24177L10.5 1.46429L8.30792 0.666992L5.75923 7.66696H0V10.0004H2.33344L4.28293 21.6988C4.49363 22.9644 5.71618 24 7.00032 24H21.0003C22.283 24 23.5066 22.9644 23.7177 21.6988L25.6668 10.0004H27.9999V7.66696H22.2396ZM21.4157 21.3159C21.3919 21.4569 21.1434 21.6669 20.9999 21.6669H6.99997C6.85647 21.6669 6.60797 21.4569 6.58417 21.3148L4.69838 10.0004H23.3012L21.4157 21.3159Z" fill="#EB0029"></path>
                                          </svg>
                                       </span>
                                       <small>5</small> 
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="sidebar">
               <div class="sidebar_logo">
                  
               </div>
               <div id="toggle_close">&times;</div>
               <div id='cssmenu'>
                  <ul class="float_left">
                     <li class="has-sub">
                        <a href="/">Trang chủ</a>
                     </li> 
                     <li class="has-sub">
                        <a href="/">Món ăn</a>
                     <li>
                  </ul>
               </div>
            </div>
            <!-- responsive menu End -->
         </div>
      </div>
      <!-- header end -->

      @yield('body')

      <footer class="food-footer-main-wrapper">
         <div class="container custom-container">
            <div class="food-footer-content-wrapper">
               <div class="footer-links">
                  <div class="footer-logo">
                     <a href="/"> <img src="images/footer-logo.png" alt="img"> </a>
                  </div>
                  <div class="contact-details">
                     <span><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.753 1.32654L9.98166 16.8692C9.84405 17.1526 9.61333 17.2942 9.28953 17.2942C9.24905 17.2942 9.18834 17.2861 9.10739 17.2699C8.92929 17.2295 8.78561 17.1384 8.67632 16.9967C8.56704 16.8551 8.51239 16.6952 8.51239 16.5171V9.52288H1.51818C1.34009 9.52288 1.18021 9.46824 1.03855 9.35895C0.896882 9.24967 0.805812 9.10598 0.765336 8.92788C0.72486 8.74979 0.74105 8.57979 0.813907 8.41789C0.886763 8.25599 1.00414 8.13456 1.16605 8.05361L16.7087 0.282265C16.814 0.225599 16.9314 0.197266 17.0609 0.197266C17.2794 0.197266 17.4616 0.27417 17.6073 0.427977C17.7287 0.541309 17.8036 0.680951 17.8319 0.846901C17.8603 1.01285 17.834 1.17273 17.753 1.32654Z" fill="#EB0029"/>
                        </svg>
                        </span>
                        <span>8901 Marmora Road, New York, NY  10013 <a href="javascript:;">Get Direction</a> </span>
                  </div>
                  <div class="contact-details">
                     <span><svg width="13" height="18" viewBox="0 0 13 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.32318 0.628151L3.24445 0.333618C4.10835 0.0579209 5.03134 0.504002 5.40122 1.37561L6.13755 3.11199C6.45777 3.86802 6.27968 4.75761 5.69746 5.31072L4.07496 6.85017C4.17514 7.77144 4.48508 8.67816 5.00394 9.57032C5.49666 10.4335 6.15756 11.189 6.94752 11.7922L8.89623 11.1414C9.63428 10.8957 10.4391 11.1791 10.8912 11.8444L11.9469 13.3941C12.4734 14.1681 12.3784 15.2349 11.7251 15.8908L11.0256 16.5937C10.3287 17.2933 9.33289 17.5475 8.41248 17.2599C6.23773 16.5817 4.24021 14.5688 2.4165 11.2211C0.590224 7.86819 -0.0544951 5.02218 0.483199 2.68646C0.709236 1.70354 1.40875 0.920115 2.32318 0.628151Z" fill="#EB0029"/>
                        </svg>

                        </span>
                        <span>+1800 650 5620  </span>
                  </div>
                  <div class="contact-details">
                     <span><svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.1881 1.15373L14.0672 2.02941L9.29474 5.57592L4.52227 1.99438L3.4014 1.1187C3.13735 0.900259 2.815 0.764086 2.47431 0.727054C2.13361 0.690021 1.78954 0.753756 1.48472 0.910363C1.17989 1.06697 0.927714 1.30957 0.75942 1.6081C0.591126 1.90663 0.514114 2.24797 0.537925 2.58985V12.739C0.537925 13.0548 0.663397 13.3578 0.886739 13.5811C1.11008 13.8044 1.413 13.9299 1.72885 13.9299H4.52227V7.16966L9.29474 10.7512L14.0672 7.16966V13.9299H16.8606C17.1765 13.9299 17.4794 13.8044 17.7027 13.5811C17.9261 13.3578 18.0515 13.0548 18.0515 12.739V2.58985C18.068 2.25092 17.9856 1.91452 17.8145 1.62154C17.6433 1.32855 17.3907 1.0916 17.0874 0.939477C16.7841 0.787357 16.4431 0.726624 16.1059 0.76466C15.7687 0.802695 15.4499 0.937862 15.1881 1.15373V1.15373Z" fill="#EB0029"/>
                        </svg>
                        

                        </span>
                        <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88edf0e9e5f8e4edc8efe5e9e1e4a6ebe7e5">[email&#160;protected]</a> </span>
                  </div>
               </div>
               <div class="footer-links">
                  <h3 class="footer-title">Menu</h3>
                  <ul>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Burgers</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Desserts</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Sides</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Pizza</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Pasta</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Drinks</a>
                     </li>
                  </ul>
               </div>
               <div class="footer-links">
                  <h3 class="footer-title">Company</h3>
                  <ul>
                     <li>
                        <a href="about-us.html"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> About</a>
                     </li>
                     <li>
                        <a href="shop.html"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Menu</a>
                     </li>
                     <li>
                        <a href="shop.html"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Shop</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Testimonials</a>
                     </li>
                     <li>
                        <a href="blog-single.html"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Blog</a>
                     </li>
                     <li>
                        <a href="contact-us.html"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Contact Us</a>
                     </li>
                  </ul>
               </div>
               <div class="footer-links">
                  <h3 class="footer-title">Support</h3>
                  <ul>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> How to Order</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Where We Deliver</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> FAQs</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Contact</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Terms and Contiotions</a>
                     </li>
                     <li>
                        <a href="javascript:;"> <span><svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11.4998 0.839844H6.99976L11.9998 7.83984L6.99976 14.8398H11.4998L16.4998 7.83984L11.4998 0.839844Z" fill="#EB0029"/>
                           <path d="M4.49976 0.839844H-0.000244141L4.99976 7.83984L-0.000244141 14.8398H4.49976L9.49976 7.83984L4.49976 0.839844Z" fill="#EB0029"/>
                           </svg>
                           </span> Privacy Policy</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>

      <div class="bottom-footer">
         <div class="container custom-container">
            <div class="bottom-footer-wrapper">
               <div class="fotter-left">
                  <span>Copyright © 2023-24 Mother's Recipe. | All rights reserved.</span>
               </div>
               <div class="fotter-right">
                  <ul>
                     <li><a href="contact-us.html">Contact us</a></li>
                     <li><a href="javascript:;">Pricing</a></li>
                     <li><a href="javascript:;">Licensing terms</a></li>
                     <li><a href="javascript:;">Terms of use</a></li>
                     <li><a href="javascript:;">Privacy Policy</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- Side Panel -->
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{ asset("customer/js/jquery-3.6.0.min.js") }}"></script>
      <script src="{{ asset("customer/js/bootstrap.min.js") }}"></script>
      <script src="{{ asset("customer/js/wow.js") }}"></script>
      <script src="{{ asset("customer/js/owl.carousel.min.js") }}"></script>
      <!-- <script src="{{ asset("customer/js/sticky.js") }}"></script> -->
      <script src="{{ asset("customer/js/custom.js") }}"></script>
      <script src="{{ asset("customer/js/page/api.js") }}"></script>
      <script src="{{ asset("customer/js/page/layout.js") }}"></script>
      <script>
          
       </script>
   </body>
</html>