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
            <p class="fs_15 fw-500">Welcome to IBD construction, your premier choice for top quality interior as well as construction services with a couple of years of construction industry's practical experience.</p>
            <p class="fs_15 fw-500">We are dedicated to delivering excellence in every job or project we undertake.
              Now, we are going online with the help of website (www.ibdinteriors.com).which we will reach upto million of peoples who compromise with quality and suffering to undelivered work on the time.
              So now,Every clients can get easily  number of service through our website on the time as per those requirement.</p>
          
        </div>
        <div class="row">
            <h5  class=" fs_20 fw_500 mt-1 "> Our Mission:-</h5>
            <p class="fs_15 fw-500">  Our mission is to surpass client expectations by providing superior construction solutions characterized by quality with new technology, tools and also with skilled workers.
              We strive to cultivate lasting relationships with our clients,built on trust, transparency and exceptional results..</p>
           
        </div>
        <div class="row">
            <h5  class=" fs_20 fw_500 mt-1 "> Our Valves:-</h5>
            <p class="fs_15 fw-500">  Quality:-we prioritize quality in every facet of our work from materials to craftsmanship.</p>
        </div>
        <div class="row">
            <h5  class=" fs_20 fw_500 mt-1 "> Client Satisfaction:-
            </h5>
            <p class="fs_15 fw-500">  Client satisfaction is more important for our team.
              We listen to our clients needs,communicate openly and deliver result that exceed expectations.</p>
        </div>
        <div class="row">
            <h5  class=" fs_20 fw_500 mt-1 "> Our Services:-
            </h5>
            <p class="fs_15 fw-500"> We deals with all construction as well as interiors work activities and major activities mentioned below:-</p>
            <ul class="decimal-list ps-4">
              <li>Architecture Designs</li>
              <li>Structural designs</li>
              <li>MEP Consultant</li>
              <li>Building demolition work</li>
              <li>Reinforced Cement Concrete work</li>
              <li>Civil work</li>
              <li>Electrical work</li>
              <li>Plumbing work</li>
              <li>Painting work.</li>
              <li>Waterproofing work</li>
              <li>Tiles work</li>
              <li>Furniture work</li>
              <li>Modular kitchen design and work</li>
              <li>Fire fighting work</li>
              <li>Fabrication work</li>
              <li>Gardening</li>
              <li> Passenger Lifts and car parking(Stack/puzzle) parking.</li>
              <li>Real estate Broker or channel partners </li>
            </ul>
            <p>and many more...</p>
        </div>
      </div>
      </section>
</main>
@include('common.footer')


@section('script')
@stop
@stop