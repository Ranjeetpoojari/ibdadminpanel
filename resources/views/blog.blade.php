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
              <img src="{{url('/assets/images/filterpage.png')}}" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
            </div>
            <div class="banner_content_con position-absolute z-5 opacity-100 m-auto w-100 h-100 top-0 text-white">
            <h5  class="text-white fs_50 fw_700 mt-5 ms-5"> Blogs</h5>
            
            <nav aria-label="breadcrumb" class="ms-5">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-white fw-500 "><a href="#" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item text-white fw-500 active" aria-current="page">Blogs</li>
                </ol>
            </nav>
            </div>
          </div>
  
        </div>
      </section>
      <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                </div>
          
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                  </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
                        </div>
                    </div>
                   
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog_card my-3">
                        <a href="blogdetail.html" target="_blank" class="blog_img">
                            <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 p-2 rounded-2">
                        </a>
                        <div class="blog_content position-relative">
                            <span class="date position-absolute bg-prim text-white fw_500 fs_20 px-3 py-2 text-capitalize rounded-2 ms-4">22 jan</span>
                           <a href="blogdetail.html" class="text-decoration-none"><h5 class="fw_500 fs_25 mt-4 ms-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </h5></a> 
                            <p class="fw_400 fs_16 ms-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quasi ab excepturi nam accusamus, suscipit expedita repellat mollitia placeat odio.</p>
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