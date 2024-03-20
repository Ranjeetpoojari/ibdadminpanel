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
              <input type="text" name="phone"  placeholder="Enter Phone nmber" id="contact_number" class=" my-2 mx-1 px-2 w-100 py-2 rounded-2 border-1"  required>
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
          <p class=" px-3 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, consequatur.</p>
          <ul class="ps-3">
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center" > <i class="bi bi-telephone border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp;&nbsp;<span>+91 82681 08343</span></a></li>
            <li class="my-3"><a href="#" class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-envelope border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp;&nbsp;<span>hello@whizzactsolutions.com</span></a></li>
            <li class="my-3"><a class="fs_14 text-white d-flex text-decoration-none align-items-center"><i class="bi bi-geo-alt border border-2 border-white rounded-circle px-2 py-1 fs_24 text-white"></i>&nbsp; &nbsp; <span>3, Kumbharwada, S.T. Road, Jai Mata Di Complex, Chembur, Mumbai, Maharashtra India - 400071.</span></a></li>
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
  <div class="container-fluid">
    <div class="row px-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15084.538597747996!2d72.88892787316455!3d19.05781659603758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s3%2C%20Kumbharwada%2C%20S.T.%20Road%2C%20Jai%20Mata%20Di%20Complex%2C%20Chembur%2C%20Mumbai%2C%20Maharashtra%20India%20-%20400071.!5e0!3m2!1sen!2sin!4v1708954039148!5m2!1sen!2sin"  height="400" class="w-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </main>
@include('common.footer')


@section('script')
@stop
@stop