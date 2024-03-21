<header>
  @php
  $categories = \App\Models\Category::where('is_active', "active")->get();
@endphp
  <div class="body-overlay d-none"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-wrap position-relative">
      <div class="navbar_container m-auto ">
        <div class="d-flex justify-content-between my-2">
          <a class="navbar-brand d-block" href="/"><img src="{{url('/assets/images/logo.png')}}" alt="" srcset="" class=""></a>
          <button class="navbar-toggler custom-sider-button" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="custom-side-nav">
            <div class="d-flex">
              <div class="custom-side-logo">
                <img src="{{url('/assets/images/logo.png')}}" alt="" srcset="">
              </div>
              <div class="button-siide-close d-flex align-items-center justify-content-end me-3"><i class="bi bi-x-lg "></i></div>
            </div>
            @if ($categories)
            @foreach ($categories as $item)
                @php
                    $subcategories = \App\Models\Subcategory::where('is_active', "active")->where('category_id', $item->id)->get();
                @endphp
                    @if(count($subcategories) == 0) <a href="{{url('/search?category='.$item->slug)}}" class="fw-300 text-capitalize text-decoration-none fs_15 fw-500 ps-4 py-2 d-block text-dark">{{$item->name}}</a> @endif
                    @if(count($subcategories)>0)
            <div class="accordion accordion-flush px-1" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{$item->slug}}" aria-expanded="false" aria-controls="flush-collapseOne">
                    {{$item->name}}
               
                  </button>
                </h2>
                <div id="{{$item->slug}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body px-3">
                    @if($subcategories)
                    <ul class="px-0">
                    @foreach ($subcategories as $item)
                    <li><a href="{{url('/search?subcategory='.$item->slug)}}" class="fw-300 text-capitalize text-dark text-decoration-none fs_15 fw-500 ps-2 py-1 d-block">{{$item->name}}</a></li> 
                      @endforeach
                    </ul>
                     @endif
                  </div>
                </div>
              </div>
            </div>
            @endif 
            @endforeach
            @endif
          </div>
          <div class="collapse navbar-collapse flex-end" id="navbarSupportedContent">
            <ul class="d-flex align-items-center ms-auto">
              <li class="">
                <a href="{{url('/contact')}}" class="px-3 py-1 fw-300 text-capitalize text-dark text-decoration-none mt-2">Need Help?</a>
              </li>
              <li>
                <a href="#" class="px-3 py-1 fw-300 text-dark text-decoration-none mt-2">Join as
                  Vendor</a>
              </li>
              <li class="d-none">
                <a href="#" target="_blank" class="px-3 py-1 fw-300 text-dark text-decoration-none mt-2"><img
                    src="{{url('/frontend/images/bell.png')}}" alt="" srcset=""></a>
              </li>
              <li>
                <a href="#" target="_blank"
                  class="px-3 py-1 fw-300 text-dark text-decoration-none mt-2 px-5 py-2 text-white rounded-2 bg-prim">login</a>
              </li>

            </ul>
          </div>
        </div>


      </div>
      <hr class="border border-dark w-100 my-2 d-none d-lg-block">
      <div class="navbar_container m-auto d-none d-lg-flex">
        <ul class="d-flex align-items-center px-0 mb-1 dropdown_option">
        
          @if ($categories)
              @foreach ($categories as $item)
                  @php
                      $subcategories = \App\Models\Subcategory::where('is_active', "active")->where('category_id', $item->id)->get();
                  @endphp
                <li class="custom-dropdown position-relative nowrap">
                  @if(count($subcategories) == 0) <a href="{{url('/search?category='.$item->slug)}}" class="fw-300 text-capitalize text-decoration-none fs_15 fw-500 ps-2 py-1 d-block"> @endif
                    <div class="custom-button me-3 text-black text-capitalize" style="width:auto!important;">{{$item->name}}&nbsp; @if(count($subcategories)>0) <i class="bi bi-chevron-down fs_18 fw_700"></i> @endif </div>
                    @if(count($subcategories) == 0) </a> @endif
                  @if($subcategories)
                  <ul class="custom-menu position-absolute z-9 bg-light px-0">
                    @foreach ($subcategories as $item)
                      <li><a href="{{url('/search?subcategory='.$item->slug)}}" class="fw-300 text-capitalize text-decoration-none fs_15 fw-500 ps-2 py-1 d-block">{{$item->name}}</a></li> 
                    @endforeach
                  </ul>
                  @endif
                </li>
              @endforeach
          @endif
          
        </ul>
        

      </div>

    </nav>
</header>
