@extends('layouts.app')
@section('title','IBD Group | ')
@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
@stop
@section('content')

@include('common.nav')
<main>
  <section>
    <div class="container">
      <div class="row">
          <h1 class="fs_24 text-dark mt-5 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat ducimus, quis iure impedit officia debitis veritatis ut magni nihil.</h1>
          <div class="detail_date fs_18 fw_500 text-prim mb-3">22/02/2024</div>
          <div class="blogdetail_img m-auto">
              <img src="{{url('/assets/images/innerimage.png')}}" alt="" srcset="" class="w-100 h-100 rounded-3">
          </div>
          <div class="blogdetial_content mt-4">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati similique explicabo dolorem odit aliquam nulla adipisci, nostrum error tenetur, temporibus voluptates quidem necessitatibus odio repellat reiciendis cum facilis voluptate doloribus rem, provident earum. A eum culpa deleniti? Voluptas sed dolorum rem provident commodi eligendi necessitatibus unde tenetur, fugit, soluta error quis rerum distinctio officia, magnam ducimus? Quis, deleniti provident! Pariatur tempora tempore error repellat deserunt molestias officia ab expedita temporibus id adipisci nam labore alias, commodi similique dignissimos, aperiam magnam tenetur animi ipsam sunt nihil culpa? Nobis pariatur provident suscipit velit facere dicta delectus saepe impedit? Neque, praesentium consequatur? Eaque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quos quod pariatur veritatis eligendi. Architecto dolore ipsum, expedita voluptatum vitae maiores quod eum quidem aut repudiandae, quibusdam voluptatem sint ad perspiciatis! Culpa in repellendus quos magnam aliquam deserunt adipisci deleniti, qui neque mollitia, recusandae consequuntur voluptatem veritatis porro. Commodi harum officiis ducimus sed maxime, vitae doloribus ea, non laudantium inventore perspiciatis quae dignissimos minima consequatur debitis placeat voluptate necessitatibus voluptatibus tempora! Perspiciatis in sit totam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil in repellat maiores facere consequuntur ea cumque debitis architecto consectetur voluptatibus, enim ab soluta! Excepturi recusandae assumenda, cumque a autem unde ullam id! Odit porro consectetur accusantium quas sequi recusandae, dolore natus, voluptatum suscipit totam minima voluptatibus consequuntur illo mollitia rem!</p>
          </div>
      </div>
    </div>
  </section>
</main>
@include('common.footer')


@section('script')
@stop
@stop