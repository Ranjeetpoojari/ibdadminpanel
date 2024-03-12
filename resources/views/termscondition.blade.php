@extends('layouts.app')
@section('title','IBD Group | ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
@stop
@section('content')

@include('commons.nav')
<main>
    <!-- <section>
        <div class="container-fluid px-0 ">
          <div class="position-relative index_banner">
            <div class="index_banner w-100 position-absolute z-2">
              <img src="img\filterpage.png" alt="" srcset="" class="w-100 h-100">
            </div>
            <div class="overlay opacity-25 w-100 h-100 position-absolute z-3 bg-dark top-0">
            </div>
            <div class="banner_content_con position-absolute z-5 opacity-100 m-auto w-100 h-100 top-0 text-white">
            <h5  class="text-white fs_50 fw_700 mt-5 ms-5"> Tearms and Condition</h5>
            
            <nav aria-label="breadcrumb" class="ms-5">
                <ol class="breadcrumb">
                <li class="breadcrumb-item text-white fw-500 "><a href="#" class="text-decoration-none text-white">Home</a></li>
                <li class="breadcrumb-item text-white fw-500 active" aria-current="page">Tearms and Condition</li>
                </ol>
            </nav>
            </div>
          </div>
  
        </div>
      </section> -->
      <section>
      <div class="container">
        <div class="row">
            <h5  class=" fs_30 fw_500 mt-5 text-center">Tearms and Condition</h5>
            <p class="fs_18 fw-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto nisi vero officiis sapiente ut suscipit odit mollitia. Laborum consequatur dolor iste dolorem non odit excepturi iure molestias rem eligendi! Neque blanditiis quam quidem eligendi quia, nemo, architecto inventore impedit veniam illo ipsum placeat alias ipsam ipsa. Dolorum cum mollitia iure.</p>
            <ul class="decimal-list ps-4">
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, laudantium?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam aperiam, officiis quod distinctio recusandae quibusdam reiciendis culpa inventore rem eligendi vel ratione facere natus deserunt nam neque fugit tenetur, dolore adipisci ex odio magnam? Facere est sunt quo sed!</li>
            
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, laudantium?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam aperiam, officiis quod distinctio recusandae quibusdam reiciendis culpa inventore rem eligendi vel ratione facere natus deserunt nam neque fugit tenetur, dolore adipisci ex odio magnam? Facere est sunt quo sed!</li>
            
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, laudantium?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam aperiam, officiis quod distinctio recusandae quibusdam reiciendis culpa inventore rem eligendi vel ratione facere natus deserunt nam neque fugit tenetur, dolore adipisci ex odio magnam? Facere est sunt quo sed!</li>
            
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, laudantium?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ullam aperiam, officiis quod distinctio recusandae quibusdam reiciendis culpa inventore rem eligendi vel ratione facere natus deserunt nam neque fugit tenetur, dolore adipisci ex odio magnam? Facere est sunt quo sed!</li>
            
            </ul>

        </div>
      </div>
      </section>
  </main>
@include('commons.footer')


@section('script')
@stop
@stop