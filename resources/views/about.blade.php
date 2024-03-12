@extends('frontend.layout.app')
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
          
              <img src="{{url('/assets/images/filterpage.png')}}" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
            </div>
            <div class="banner_content_con position-absolute z-5 opacity-100 m-auto w-100 h-100 top-0 text-white">
            <h5  class="text-white fs_50 fw_700 mt-5 ms-5">About IBD Groups</h5>
            
            <nav aria-label="breadcrumb" class="ms-5">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-white fw-500 "><a href="#" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item text-white fw-500 active" aria-current="page">About us</li>
                </ol>
            </nav>
            </div>
          </div>
  
        </div>
      </section>
      <section>
      <div class="container">
        <div class="row">
            <h5  class=" fs_30 fw_500 mt-5 "> Aboutus</h5>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
            <p class="fs_15 fw-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores totam commodi nam voluptates impedit facere nemo doloremque eius voluptas eligendi consectetur nulla accusantium voluptatem ullam illo exercitationem praesentium laboriosam, ut iste? Repudiandae, consectetur quae nulla a, itaque quidem, labore at quibusdam nemo pariatur omnis hic corrupti rerum. Ab, iste praesentium!</p>
        </div>
      </div>
      </section>
</main>
@include('common.footer')


@section('script')
@stop
@stop