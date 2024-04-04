@extends('layouts.app')
@section('title','IBD Group | ')
@section('style')

@stop
@section('content')

@include('common.nav')
<main>
  <div class="container">
    <div class="row my-5 shadow-sm">
      <div class="col-lg-8">
          <form action="{{url('/contact/save')}}" method="post" id="contact_form">
            @csrf
          <div class="row contact_form px-2 px-lg-5">
            <h5 class="mb-3 fs_24 mt-5">How can we help you ?</h5>
            <div class="col-md-6">
              <input type="text" name="name"  placeholder="Enter Your name" id="contact_name" class=" my-2 mx-1 px-2 w-100 py-2 rounded-2 border-1" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="phone"  placeholder="Enter Phone number" id="contact_number" class=" my-2 mx-1 px-2 w-100 py-2 rounded-2 border-1"  required>
            </div>
            <div class="col-md-6">
              <input type="text" name="email_id"  placeholder="Enter Email id" id="contect_email" class=" my-2 mx-1 px-2 w-100 py-2 rounded-2 border-1"  required>
            </div>
            <div class="col-md-6">
              <input type="text" name="subject"  placeholder="Enter the Subject" id="contact_topice" class=" my-2 mx-1 px-2 w-100 py-2 rounded-2 border-1" >
            </div>
            <div class="col-12">
            <textarea name="message" id="contact_message"  class="w-100 h-auto p-2 rounded-2" rows="7" placeholder="Your Meassage here.."  required></textarea>
            </div>
          <div class="col-12">
            <input type="submit" value="Submit" class="my-2 py-2 rounded-2 text-white  px-4 bg-prim">
          </div>
          </div>
        </form>
        </div>
        <div class="col-md-7 mt-5 mt-lg-0 col-lg-4 col-xl-4 bg-prim">
          <h5 class="my-3 fs_24 text-white fw_600 pt-4 px-3">Contact us</h5>
          <p class=" px-3 text-white">Pls feel free to reach out to us using the contact form below.
            We will make sure to respond to you as soon as possible.
            Thank you</p>
          <ul class="ps-3">
            <li class="my-3"><a href="tel:9137441197" class="fs_14 text-white d-flex text-decoration-none align-items-center" > <i class="bi bi-telephone border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp;&nbsp;<span>+91 91374 41197</span></a></li>
            <li class="my-3"><a href="mailto:ibdinteriors470@gmail.com" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-envelope border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp;&nbsp;<span>ibdinteriors470@gmail.com</span></a></li>
            <li class="my-3"><a href="tel:9137441197" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-geo-alt border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp; &nbsp; <span>17/1/2c, 1+1 Floor, G. Ambekar Marg, Near Fish Market, jijamata Nagar, Kalachowki, Mumbai 400033</span></a></li>
          </ul>
          <hr class="text-white mt-4">
          <ul class="px-3 d-flex justify-content-between">
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center" > <i class="bi bi-facebook border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i> </a></li>
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-whatsapp border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i></a></li>
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-instagram border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i></a></li>
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-linkedin border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i></a></li>
          </ul>
        </div>
    </div>
  </div>

  </main>
@include('common.footer')


@section('script')
@stop
@stop