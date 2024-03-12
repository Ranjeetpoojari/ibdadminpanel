@extends('layouts.app')
@section('title','IBD Group | ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
@stop
@section('content')

@include('common.nav')
<main>
    <section>
      <div class="container-fluid px-0 ">
        <div class="position-relative index_banner">
          <div class="index_banner w-100 position-absolute z-2">
            <img src="{{url('/assets/images/index_banner.png')}}" alt="Banner" srcset="" class="w-100 h-100">
          </div>
          <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
          </div>
          <div class="banner_content_con position-absolute z-5 opacity-100 m-auto w-100 h-100 top-0 text-white">
            <div class="banner_content d-block my-5 m-auto">
              <h1 class="fw-bold text-white text-center">Find a wide range of local services at your fingertips.</h1>
              <p class="text-center text-lg-start">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for</p>
              <div class="input-group mb-3 index_search">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search fw-bold fs_20"></i></span>
                <input type="search" class="form-control " placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="text-capitalize ps-1 ps-md-5">
                Popular Search:- &nbsp;
                <a href="#" target="_blank" class="text-white d-inline-block">Construction Resource</a>
                <a href="#" target="_blank" class="text-white d-inline-block">Electrician</a>
                <a href="#" target="_blank" class="text-white d-inline-block">Painter</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section>
    <div class="container-fluid  py-3 ">
      <h3 class="text-capitalize fs_25 fw_600 my-2">Explore A to Z Category</h3>
      <div class="category_con w-90  m-auto"  style="width:100%; height:40px; overflow:hidden;" id="listContainer">

       
        <ul class="px-0 d-flex flex-wrap" >
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Rcc work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Shuttering
              contractor</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Badge</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Siporex </a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Plaster work.</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Tiles</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">marble</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Civil Work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Rcc work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Shuttering
              contractor</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Badge</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Siporex </a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Plaster work.</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Tiles</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">marble</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Civil Work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Rcc work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Shuttering
              contractor</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Badge</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Siporex </a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Plaster work.</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Tiles</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">marble</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Civil Work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Civil Work</a></li>
          <li class="m-2"><a href="#" targat="_blank"
              class="px-3 py-2 rounded-pill text-dark fw_500 fs-15 bg-light text-decoration-none ">Civil Work</a></li>
        </ul>
      </div>
    </div>
    </section>
    <section>
      <div class="container-fluid px-0">
       <div class="w-90 m-auto">
        <div class="owl-carousel owl-theme outer-slider" >
          <div class="inner_card_parent mx-2 d-none d-lg-block">
            <div class="owl-carousel owl-theme inner_slider d-none d-lg-block">
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
            </div> 
          </div>
          <div class="service_cat rounded-4 position-relative mx-2">
            <img src="{{url('/assets/images/outer_img.png')}}" alt="" srcset="" class="w-100 h-100 rounde-4 position-absolute z-1">
            <div class="position-absolute w-100  bottom-0 z-2 card_overrlay"></div>
            <div class="position-absolute w-100 bottom-0 z-5 card_overlay_content">
              <h6 class="fw_600 fs_18 text-white ps-2">Electrician</h6>
              <div class="d-flex justify-content-between text-white ">
                <p class="fw_500 fs_12 ps-2">Explore</p>
                <p class="fw_300 fs_16 pe-3"><i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>
          <div class="service_cat rounded-4 position-relative mx-2">
            <img src="{{url('/assets/images/outer_img.png')}}" alt="" srcset="" class="w-100 h-100 rounde-4 position-absolute z-1">
            <div class="position-absolute w-100  bottom-0 z-2 card_overrlay"></div>
            <div class="position-absolute w-100 bottom-0 z-5 card_overlay_content">
              <h6 class="fw_600 fs_18 text-white ps-2">Electrician</h6>
              <div class="d-flex justify-content-between text-white ">
                <p class="fw_500 fs_12 ps-2">Explore</p>
                <p class="fw_300 fs_16 pe-3"><i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>
          <div class="inner_card_parent mx-2 d-none d-lg-block">
            <div class="owl-carousel owl-theme inner_slider">
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
              <div class="inner-card rounded-4 position-relative">
                <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                  <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                  <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                  <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   </div>
              </div>
            </div> 
          </div>
          <div class="service_cat rounded-4 position-relative mx-2">
            <img src="{{url('/assets/images/outer_img.png')}}" alt="" srcset="" class="w-100 h-100 rounde-4 position-absolute z-1">
            <div class="position-absolute w-100  bottom-0 z-2 card_overrlay"></div>
            <div class="position-absolute w-100 bottom-0 z-5 card_overlay_content">
              <h6 class="fw_600 fs_18 text-white ps-2">Electrician</h6>
              <div class="d-flex justify-content-between text-white ">
                <p class="fw_500 fs_12 ps-2">Explore</p>
                <p class="fw_300 fs_16 pe-3"><i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>
          <div class="service_cat rounded-4 position-relative mx-2">
            <img src="{{url('/assets/images/outer_img.png')}}" alt="" srcset="" class="w-100 h-100 rounde-4 position-absolute z-1">
            <div class="position-absolute w-100  bottom-0 z-2 card_overrlay"></div>
            <div class="position-absolute w-100 bottom-0 z-5 card_overlay_content">
              <h6 class="fw_600 fs_18 text-white ps-2">Electrician</h6>
              <div class="d-flex justify-content-between text-white ">
                <p class="fw_500 fs_12 ps-2">Explore</p>
                <p class="fw_300 fs_16 pe-3"><i class="bi bi-arrow-up-right"></i></p>
              </div>
            </div>
          </div>
        </div>
       </div>
    </div>
    </section>
    <section>
      <div class="container-fluid">
        <div class="row my-4">
          <div class="service_container w-90 m-auto">
            <h2 class="fs_30 fw_500 mb-4 text-capitalize">Best Service Provider</h2>
            <div class="owl-carousel owl-theme service">
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="country d-flex mx-2">
                    <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_12">IND</span>
                  </div>
                  <div class="city mx-2">
                    <span class="text-capitalize fs_12">Mumbai</span>
                  </div>
                  <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 text-capitalize">
                    Wholesaler
                  </div>
                  
                </div>
                <div class="address px-2 ">
                <p class="fs_15 text-secondary fw_12 mb-1">  Address : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <ul class="d-flex px-0 ">
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Color Paint</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Tiles</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Pip</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">+50</a>
                  </ul>
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img2.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="country d-flex mx-2">
                    <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_12">IND</span>
                  </div>
                  <div class="city mx-2">
                    <span class="text-capitalize fs_12">Mumbai</span>
                  </div>
                  <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 text-capitalize">
                    Wholesaler
                  </div>
                  
                </div>
                <div class="address px-2 ">
                <p class="fs_15 text-secondary fw_12 mb-1">  Address : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <ul class="d-flex px-0 ">
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Color Paint</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Tiles</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Pip</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">+50</a>
                  </ul>
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img3.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="country d-flex mx-2">
                    <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_12">IND</span>
                  </div>
                  <div class="city mx-2">
                    <span class="text-capitalize fs_12">Mumbai</span>
                  </div>
                  <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 text-capitalize">
                    Wholesaler
                  </div>
                  
                </div>
                <div class="address px-2 ">
                <p class="fs_15 text-secondary fw_12 mb-1">  Address : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <ul class="d-flex px-0 ">
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Color Paint</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Tiles</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Pip</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">+50</a>
                  </ul>
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img4.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                <div class="d-flex">
                  <div class="country d-flex mx-2">
                    <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_12">IND</span>
                  </div>
                  <div class="city mx-2">
                    <span class="text-capitalize fs_12">Mumbai</span>
                  </div>
                  <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 text-capitalize">
                    Wholesaler
                  </div>
                  
                </div>
                <div class="address px-2 ">
                <p class="fs_15 text-secondary fw_12 mb-1">  Address : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <ul class="d-flex px-0 ">
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Color Paint</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Tiles</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">Pip</a>
                  <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500">+50</a>
                  </ul>
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="service_container w-90 m-auto">
            <h2 class="fs_30 fw_500  mb-4 text-capitalize"> Verified Salers</h2>
            <div class="owl-carousel owl-theme service">
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
             
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img2.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img3.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
             
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            <div class="service_card border rounded-4 m-auto">
              <div class="service_img position-relative">
                <img src="{{url('/assets/images/service_img4.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="service-content">
                <div class="d-flex">
                  <div class="ps-2 col-10">
                    <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                    <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                  </div>
                  <div class="col-2">
                  <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                  </div>
                </div>
                
                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
              </div>

            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid px-0">
        <div class="w-90 m-auto">
          <div class="owl-carousel owl-theme outer-slider" >
            <div class="inner_card_parent mx-2 d-none d-lg-block">
              <div class="owl-carousel owl-theme inner_slider" >
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
              </div> 
            </div>
            <div class="inner_card_parent mx-2 servce_parent">
              <div class="service_card border rounded-4">
                <div class="service_img position-relative">
                  <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                  <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                  <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                </div>
                <div class="service-content">
                  <div class="d-flex">
                    <div class="ps-2 col-10">
                      <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                      <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                    </div>
                    <div class="col-2">
                    <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                    </div>
                  </div>
                
                  <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
                </div>
  
              </div>
            </div>   
            <div class="inner_card_parent mx-2 servce_parent">
              <div class="service_card border rounded-4">
                <div class="service_img position-relative">
                  <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                  <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                  <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                </div>
                <div class="service-content">
                  <div class="d-flex">
                    <div class="ps-2 col-10">
                      <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                      <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                    </div>
                    <div class="col-2">
                    <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                    </div>
                  </div>
                
                  <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
                </div>
  
              </div>
            </div>   
            <div class="inner_card_parent mx-2 d-none d-lg-block">
              <div class="owl-carousel owl-theme inner_slider" >
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
                <div class="inner-card rounded-4 position-relative">
                  <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="rounded-4 w-100 h-100 position-absolute top-0 z-1">
                  <div class="inner-overlay position-absolute z-2 rounded-4 bg-prim"></div>
                    <div class="inner-content position-absolute z-5 start-0 bottom-0 h-50 ">
                    <h5 class="text-white ms-5 fs_18 w-50">Lorem ipsum dolor sit amet, consectetur adipiscing</h5>
                    <p class="text-white ms-5 fs_15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                     </div>
                </div>
              </div> 
            </div>
            <div class="inner_card_parent mx-2 servce_parent">
              <div class="service_card border rounded-4">
                <div class="service_img position-relative">
                  <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                  <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                  <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                </div>
                <div class="service-content">
                  <div class="d-flex">
                    <div class="ps-2 col-10">
                      <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                      <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                    </div>
                    <div class="col-2">
                    <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                    </div>
                  </div>
                
                  <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
                </div>
  
              </div>
            </div>   
            <div class="inner_card_parent mx-2 servce_parent">
              <div class="service_card border rounded-4">
                <div class="service_img position-relative">
                  <img src="{{url('/assets/images/service_img.png')}}" alt="" srcset="" class="w-100 h-100 position-absolute z-1">
                  <span class="position-absolute top-0 ms-2 px-2 mt-2 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                  <span class="position-absolute top-0  mt-2 fs_15 px-2 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                </div>
                <div class="service-content">
                  <div class="d-flex">
                    <div class="ps-2 col-10">
                      <h5 class="fw_500 fs_16 mb-0 mt-2">Rajaram Interior hardware</h5>
                      <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                    </div>
                    <div class="col-2">
                    <span class="py-1 px-2 rounded-circle bg-gray d-inline-block mt-2"><i class="bi bi-bookmark "></i></span>
                    </div>
                  </div>
                
                  <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mb-3 m-2 rounded-2 text-center d-block text-decoration-none fw_500">Get Phone Number</a>
                </div>
  
              </div>
            </div>   
         </div>
        </div>
    </section>
    <section>
      <div class="container-fluid px-0 my-5">
        <div class="advtisement_con w-90 m-auto rounded-4">
        <div class="row px-0">
          <div class="col-12 col-md-6 rounded-end-4 p-0 bg-prim advtisement_content">
          
              <h2 class="fs_50 fw_700 text-white mx-4 my-3 m-lg-5 ">Lorem ipsum is placeholder text</h2>
           <p class="fs_16 fw_500 text-white px-4 px-lg-5 adv_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
         <a href="#" target="_blank" class="text-white fw_500 text-decoration-none fs_16 d-block mt-lg-4 mx-3 mx-lg-5 text-capitalize mb-3 mb-lg-0">join Now</a>
         
          </div>
          <div class="col-12 col-md-6 rounded-end-4 px-0">
            <div class="advtisement_img rounded-end-4">

              <img src="{{url('/assets/images/adv.png')}}" alt="" srcset="" class="w-100 h-100 rounded-end-4">
            </div>
          </div>
          </div>
        </div>
      </div>

    </section>
    <section>
      <div class="container-fluid px-0 my-5">
        <div class="advtisement_con w-90 m-auto rounded-4">
        <div class="row px-0 border rounded-4">
          <div class="col-12 col-md-6 rounded-end-4 px-0">
            <div class="advtisement_img2 rounded-end-4 my-3 ">

              <img src="{{url('/assets/images/adv_vector.png')}}" alt="" srcset="" class="w-100 h-100 rounded-end-4">
            </div>
          </div>
          <div class="col-12 col-md-6 rounded-end-4 p-0  advtisement_content2">
          
              <h2 class="fs_50 fw_700 text-end text-prim mx-4 mx-lg-5 my-3 my-lg-5">Lorem ipsum is placeholder text</h2>
           <p class="fs_16 fw_500 text-end px-4 px-lg-5 adv_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
           <div class="d-flex justify-content-end me-3 me-lg-5">
             <a href="#" target="_blank" class=" text-end fw_500 text-decoration-none fs_16 d-inline-block mt-2 mt-lg-4 text-capitalize bg-gray rounded-2 py-1 px-3 text-dark">Know more</a>
           </div>
          </div>
          </div>
        </div>
      </div>

    </section>
  </main>
  @include('common.footer')


@section('script')
@stop
@stop