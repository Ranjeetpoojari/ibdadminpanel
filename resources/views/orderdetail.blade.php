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
              <img src="{{url($vendor->profile_image)}}" alt="{{$vendor->business_name}}" srcset="" class="w-100 h-100">
            </div>
            <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
            </div>

          </div>
  
        </div>
      </section>
      <section>
        <div class="container">
            <div class="row">
            <div class="col-6 ">
              <h1 class="fw_500 fs_30 text-prim my-3">{{$vendor->business_name}}</h1>
            <div class="d-flex flex-wrap my-2">
                <div class="country fil d-flex mx-2">
                  <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_16">IND</span>
                </div>
                <div class="city mx-2 d-none">
                  <span class="text-capitalize fs_16">Mumbai</span>
                </div>
                <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 fs_15 text-capitalize">
                  Wholesaler
                </div>
                <span class="text-yellow fs_16">{{$vendor->rate}}/5</span>&nbsp;<span class="fs_16">({{$vendor->total_rate}} Ratings)</span>
                @if($vendor->is_verfied==1) <span class=" px-2 mx-1 py-1 rounded-2 text-blue bg-ter fs_15"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>@endif
                <span class=" fs_15 mx-1 px-2 py-1 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
              </div>
              <div class="d-flex contact_owner">
            <div class="d-flex justify-content-center flex-wrap w-100p"> 
              <a onclick="getPhoneNumber()" class="text-center text-capitalize text-prim mt-2 rounded-2 text-center d-block text-decoration-none fw_500 rounded-circle mx-2"><i class="bi bi-telephone"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark">Get phone number</p>
              </a>
           
            </div>
            <div class="d-flex justify-content-center flex-wrap w-100p"> 
              <a onclick="sendWhatsapp({{$vendor->id}})" target="_blank" class="text-center text-capitalize text-prim mt-2 rounded-2 text-center d-block text-decoration-none fw_500  rounded-circle mx-2"><i class="bi bi-whatsapp"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark"> Whatsapp Chat</p>
              </a>
           
            </div>
            <div class="d-flex justify-content-center flex-wrap w-100p d-none"> 
              <a href="#" class="text-center text-capitalize text-prim  mt-2 rounded-2 text-center d-block text-decoration-none fw_500  rounded-circle mx-2"><i class="bi bi-chat-right-text"></i>
                <p class="fs_12 text-capitalize fw_400 mt-2 text-center text-dark">Send Enquiry</p>
              </a>
          

              </div>
          
            </div>
            <li class="my-2 phoneNumber d-none"><i class="bi bi-telephone"></i> &nbsp;&nbsp;<a href="#" target="_blank" class="text-dark">{{$vendor->contact_number}}</a></li>
            </div>
            <div class="col-6">
              <h2 class="fw_600 fs_24 text-capitalize py-3">Company Information</h2>
              <h3 class="fw_400 fs_20 text-capitalize" >{{$vendor->business_name}}</h3>
          <ul>
            <li class="my-2"><i class="bi bi-geo-alt fw-bold"></i> &nbsp;&nbsp;{{$vendor->address}} {{$vendor->city}} {{$vendor->state}} {{$vendor->pincode}}</li>
            <li class="my-2 phoneNumber d-none"><i class="bi bi-telephone"></i> &nbsp;&nbsp;<a href="tel:{{$vendor->contact_number}}" target="_blank" class="text-dark">{{$vendor->contact_number}}</a></li>
            <li class="my-2 emailId d-none"><i class="bi bi-telephone"></i> &nbsp;&nbsp;<a href="mailto:{{$vendor->contact_email}}" target="_blank" class="text-dark">{{$vendor->contact_email}}</a></li>
            <li class="my-2"><i class="bi bi-clock-history"></i>&nbsp;&nbsp;Open Now :Mon - Sat :- 9:30 am - 6:30 pm</li>
            <li class="my-2"><i class="bi bi-link"></i>&nbsp;&nbsp;<a href="#" target="_blank" class="fs_24 text-prim me-2"><i class="bi bi-facebook"></i></a><a href="#" target="_blank" class="fs_24 text-prim  me-2"><i class="bi bi-twitter"></i></a></li>
          </ul>
            </div>
        </div>
        <input type="hidden" name="company_id" id="company_id" value="{{$vendor->user_id}}">
        <input type="hidden" name="company_number" id="company_number" value="{{$vendor->contact_number}}">
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
<script>
  function getPhoneNumber(){
    var company_id = $("#company_id").val();
    $.get("/company/lead/"+company_id+'?source=call', function(res){
      $('.emailId').removeClass('d-none');
      $('.phoneNumber').removeClass('d-none');
    });
  }

  // function sendWhatsapp(id){
  //   var company_id = $("#company_id").val();
  //   $.get("/company/whatsapp/"+company_id, function(res){
      
  //   });
  // }
  function sendWhatsapp(vendorId) {
      var phoneNumber = $("#company_number").val();
      var company_id = $("#company_id").val();
      var message = 'Hello, I want to inquire about the product from IBD Group ';
      var encodedMessage = encodeURIComponent(message);
      var whatsappURL = 'https://wa.me/' + phoneNumber + '?text=' + encodedMessage;
      $.get("/company/lead/"+company_id+'?source=whatsapp', function(res){ });

      window.open(whatsappURL, '_blank');
  }


</script>
@stop
@stop