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
            <h5  class="text-white fs_50 fw_700 mt-5 ms-5">About IBD Groups</h5>
            
            <nav aria-label="breadcrumb" class="ms-5">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-white fw-500 "><a href="/" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item text-white fw-500 active" aria-current="page">Search</li>
                </ol>
            </nav>
            </div>
        </div>

      </div>
    </section>
<section>
    <div class="container-fluid">
        <div class="filter_con w-90 m-auto">
<div class="row px-0 mt-2">
    <h6 class="my-2 text-captailize fw_500 fs_14">
        Quick Filters
    </h6>
    <div class="col-12 col-lg-8">
        <div class="d-flex flex-wrap justify-content-between">
            <buttom class="border px-4 py-3 rounded-2 text-capitalize mb-2">
                Verified
            </buttom>
            <buttom class="border px-4 py-3 rounded-2 text-capitalize mb-2">
                Trusted
            </buttom>
            <select class="form-select filter mb-2" aria-label="Default select example">
                <option selected>Sort By</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <select class="form-select filter mb-2" aria-label="Default select example">
                <option selected>Ratings</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <select class="form-select filter mb-2" aria-label="Default select example">
                <option selected>Brand</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            
        </div>
        <ul class="filter_list px-0">
            <li class="filter_iteam rounded-4 my-4">
                <div class="row px-3 py-3  ">
                    <div class="col-12 col-sm-4 col-xxl-3">
                        <div class="filter_img m-auto rounded-3">
                            <img src="{{url('/assets/images/cement.png')}}" alt="" srcset="" class="w-100 h-100 rounded-3">
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-xxl-9">
                        <div class="filter_content ms-1 ms-sm-0">
                            <div class="d-flex flex-wrap ">
                                <h6 class="fs_20 fw_400 mb-0">Rajaram Interior hardware</h6>
                                <div>
                                    <span class=" px-2 mx-1 py-1 rounded-2 text-blue bg-ter fs_12"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                                    <span class=" fs_12 mx-1 px-2 py-1 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                                </div>    
                                <div>
                                  <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                                </div>
                            </div>
                            <div class="d-flex my-2">
                                <div class="country fil d-flex mx-2">
                                  <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_15">IND</span>
                                </div>
                                <div class="city mx-2">
                                  <span class="text-capitalize fs_15">Mumbai</span>
                                </div>
                                <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 fs_15 text-capitalize">
                                  Wholesaler
                                </div>
                              
                              </div>
                              <ul class="d-flex flex-wrap px-0 ">
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">+50</a>
                                </ul>
                                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mt-2 rounded-2 text-center d-block text-decoration-none fw_500 filterbtn">Get Phone Number</a>
                        </div>
                    </div>
                 </div>
        </li>
            <li class="filter_iteam rounded-4 my-4">
                <div class="row px-3 py-3  ">
                    <div class="col-12 col-sm-4 col-xxl-3">
                        <div class="filter_img m-auto rounded-3">
                            <img src="{{url('/assets/images/cement.png')}}" alt="" srcset="" class="w-100 h-100 rounded-3">
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-xxl-9">
                        <div class="filter_content ">
                            <div class="d-flex flex-wrap ">
                                <h6 class="fs_20 fw_400 mb-0">Rajaram Interior hardware</h6>
                                <div>
                                    <span class=" px-2 mx-1 py-1 rounded-2 text-blue bg-ter fs_12"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                                    <span class=" fs_12 mx-1 px-2 py-1 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                                </div>    
                                <div>
                                  <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                                </div>
                            </div>
                            <div class="d-flex my-2">
                                <div class="country fil d-flex mx-2">
                                  <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_15">IND</span>
                                </div>
                                <div class="city mx-2">
                                  <span class="text-capitalize fs_15">Mumbai</span>
                                </div>
                                <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 fs_15 text-capitalize">
                                  Wholesaler
                                </div>
                              
                              </div>
                              <ul class="d-flex flex-wrap px-0 ">
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">+50</a>
                                </ul>
                                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mt-2 rounded-2 text-center d-block text-decoration-none fw_500 filterbtn">Get Phone Number</a>
                        </div>
                    </div>
                 </div>
        </li>
            <li class="filter_iteam rounded-4 my-4">
                <div class="row px-3 py-3  ">
                    <div class="col-12 col-sm-4 col-xxl-3">
                        <div class="filter_img m-auto rounded-3">
                            <img src="{{url('/assets/images/cement.png')}}" alt="" srcset="" class="w-100 h-100 rounded-3">
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-xxl-9">
                        <div class="filter_content ">
                            <div class="d-flex flex-wrap ">
                                <h6 class="fs_20 fw_400 mb-0">Rajaram Interior hardware</h6>
                                <div>
                                    <span class=" px-2 mx-1 py-1 rounded-2 text-blue bg-ter fs_12"><i class="bi bi-patch-check-fill"></i>&nbsp;&nbsp;Verified</span>
                                    <span class=" fs_12 mx-1 px-2 py-1 rounded-2 text-yellow bg-oct"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;&nbsp;Best saler</span>
                                </div>    
                                <div>
                                  <span class="text-yellow fs_12">4.6/5</span>&nbsp;<span class="fs_12">(256 Ratings)</span>
                                </div>
                            </div>
                            <div class="d-flex my-2">
                                <div class="country fil d-flex mx-2">
                                  <img src="{{url('/assets/images/india.png')}}" alt="" class="rounded-circle">&nbsp;<span class="text-uppercase fs_15">IND</span>
                                </div>
                                <div class="city mx-2">
                                  <span class="text-capitalize fs_15">Mumbai</span>
                                </div>
                                <div class="service_type rounded-2 text-prim bg-light-prim mx-2 px-2 fs_15 text-capitalize">
                                  Wholesaler
                                </div>
                              
                              </div>
                              <ul class="d-flex flex-wrap px-0 ">
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Color Paint</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Tiles</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">Pip</a>
                                <li class="bg-gray px-2 py-1  text-capitalize fs_12  mx-1 rounded-2 fw_500 my-1">+50</a>
                                </ul>
                                <a href="#" target="_blank" class="text-white text-capitalize bg-sec  py-2 mt-2 rounded-2 text-center d-block text-decoration-none fw_500 filterbtn">Get Phone Number</a>
                        </div>
                    </div>
                 </div>
        </li>
       
     
        </ul>
        <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link text-dark" target="_blank" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link text-dark" target="_blank" href="#">1</a></li>
              <li class="page-item"><a class="page-link text-dark" target="_blank" href="#">2</a></li>
              <li class="page-item"><a class="page-link text-dark" target="_blank" href="#">3</a></li>
              <li class="page-item"><a class="page-link text-dark" target="_blank" href="#">Next</a></li>
            </ul>
          </nav>
    </div>
    <div class="col-12 col-lg-4 d-flex justify-content-around flex-wrap">
        <div class="owl-carousel filter_slider owl-theme inner_slider  mx-lg-auto mb-3">
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-('/assets/images/3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        </div>
        <div class="owl-carousel filter_slider owl-theme inner_slider  mx-lg-auto mb-3">
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img2.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img2.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="filter_card position-relative">
            <img src="{{url('/assets/images/filter_img2.png')}}" alt="" srcset="" class="position-absolute z-1 rounded-4 w-100 h-100">
            <div class="position-absolute bg-dark z-2 w-100 h-100 rounded-4 opacity-25"></div>
            <div class="position-absolute z-3 w-100 h-50 bottom-0">
                <h6 class="text-white fw_500 fs_18 px-4 pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing </h6>
                <p class="text-white fw_400 fs_12 px-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
      </div>
        <div class="service_card border rounded-4 mx-auto mb-3">
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
    </div>
</section>

  
  </main>
@include('common.footer')


@section('script')
@stop
@stop