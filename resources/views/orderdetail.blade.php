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
              <img src="{{url('/assets/images/filter_img.png')}}" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
            </div>

          </div>
  
        </div>
      </section>
      <section>
        <div class="container">
            <div class="row">
            <div class="col-6">
              <h1 class="fw_500 fs_30 text-prim my-3">Agrasen Ispat Pvt Ltd</h1>
            <div class="d-flex my-2">
                <div class="country fil d-flex mx-2">
                  <img src="img\india.png" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_16">IND</span>
                </div>
                <div class="city mx-2">
                  <span class="text-capitalize fs_16">Mumbai</span>
                </div>
                <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 fs_15 text-capitalize">
                  Wholesaler
                </div>
                <span class="text-yellow fs_16">4.6/5</span>&nbsp;<span class="fs_16">(256 Ratings)</span>
                <span class=" px-2 mx-1 py-1 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                <span class=" fs_15 mx-1 px-2 py-1 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="d-flex contact_owner">
            <div class="d-flex justify-content-center flex-wrap w-100p"> 
              <a href="#" target="_blank" class="text-center text-capitalize text-prim   mt-2 rounded-2 text-center d-block text-decoration-none fw_500 rounded-circle mx-2"><i class="bi bi-telephone"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark">Get phone number</p>
              </a>
           
            </div>
            <div class="d-flex justify-content-center flex-wrap w-100p"> 
              <a href="#" target="_blank" class="text-center text-capitalize text-prim   mt-2 rounded-2 text-center d-block text-decoration-none fw_500  rounded-circle mx-2"><i class="bi bi-whatsapp"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark"> Whatsapp Chat</p>
              </a>
           
            </div>
            <div class="d-flex justify-content-center flex-wrap w-100p"> 
              <a href="#" target="_blank" class="text-center text-capitalize text-prim  mt-2 rounded-2 text-center d-block text-decoration-none fw_500  rounded-circle mx-2"><i class="bi bi-chat-right-text"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark">Send Enquiry</p>
              </a>
          

              </div>
          
            </div>
            </div>
            <div class="col-6">
              <h2 class="fw_600 fs_24 text-capitalize py-3">Company Information</h2>
              <h3 class="fw_400 fs_20 text-capitalize" >Agrasen Ispat Pvt Ltd</h3>
          <ul>
            <li class="my-2"><i class="bi bi-geo-alt fw-bold"></i> &nbsp;&nbsp;5048/ 5049, Bima Complex, Kalamboli, Navi Mumbai - 410218 (Near KWC Steel Market)</li>
            <li class="my-2"><i class="bi bi-telephone"></i> &nbsp;&nbsp;<a href="#" target="_blank" class="text-dark">09845218728</a></li>
            <li class="my-2"><i class="bi bi-globe2"></i>&nbsp;&nbsp;<a href="#" target="_blank" class="text-dark"></a>https://www.agrasenispat.in</li>
            <li class="my-2"><i class="bi bi-clock-history"></i>&nbsp;&nbsp;Open Now :Mon - Sun :- 9:30 am - 6:30 pm</li>
            <li class="my-2"><i class="bi bi-link"></i>&nbsp;&nbsp;<a href="#" target="_blank" class="fs_24 text-prim me-2"><i class="bi bi-facebook"></i></a><a href="#" target="_blank" class="fs_24 text-prim  me-2"><i class="bi bi-twitter"></i></a></li>
          </ul>
            </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row px-0">
        
          </div>
        </div>
      </section>
  </main>
@include('common.footer')


@section('script')
@stop
@stop