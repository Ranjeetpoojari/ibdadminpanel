<footer class="bg-white mt-2">
    <div class="container my-4">
      <div class="row rounded-3 bg-prim p-3">
        <div class="col-12 col-lg-6">
          <h6 class="text-white fs_16 fw_500 mb-0">Newsletter</h6>
          <p class="text-white fs_16 fw_400 mb-0">Be the first one to know  about discounts, offers and events</p>
        </div>
        <div class="col-12 mt-3 mt-lg-0 col-lg-6">
          <form action="{{url('/subscriptions')}}" method="post">
            @csrf
          <div class="input-group   email border-0 rounded-3">
            <span class="input-group-text border-0 bg-transparent text-white"><i class="bi bi-envelope"></i></span>
            <input type="email" name="email_id" class="form-control border-0 bg-transparent py-2 text-white" placeholder="Enter your email" aria-label="Amount (to the nearest dollar)" required>
            <span class="input-group-text border-0 bg-transparent text-white"><input type="submit" value="submit"  class="px-3 py-1 border-0 rounded-2 bg-white text-prim fw_500 fs_12"></span>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div class="container footer_logo">
      <div class="row">
        <div>

          <a class="navbar-brand d-block m-auto my-2" href="#"><img src="{{url('/assets/images/logo.png')}}" alt="" srcset="" class=""></a>
        </div>
        <p class="fs_16 text-center m-auto">Welcome to IBD construction, your premier choice for top quality interior as well as construction services with a couple of years of construction industry's practical experienc... <a
            href="/about" target="_blank" class="text-decoration-none">Read More</a></p>
      </div>
      
      <div class="row py-2 my-3 border-bottom ">
        <div class="col-6 col-sm-6 col-md-3">
          <ul class="px-0">
            <li><a class="text-decoration-none text-dark fw_700 d-inline-block text-capitalize fs_16 py-2">about</a></li>
            <li><a href="/about" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">about us</a></li>
            <li><a href="/contact" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">Contact Us</a> </li>
            <li><a href="/blog" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">Blog</a></li>

          </ul>
        </div>
        <div class="col-6 col-sm-6 col-md-3">
          <ul class="px-0">
            <li><a class="text-decoration-none text-dark fw_700 d-inline-block text-capitalize fs_16 py-2">Quick Links</a></li>
            <li><a href="/privacy" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">Privacy Policy</a></li>
            <li><a href="/termscondition" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">Terms & Condition</a></li>
            <li><a href="#" class="text-decoration-none text-dark fw_400 d-inline-block text-capitalize py-2">Join as Vendor</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <ul class="px-0">
            <li>
              <div class="d-flex footer_contact mt-3 mt-lg-0">
                <div class=""><i class="bi bi-telephone fs_25 text-icon fw_600"></i></div>
                <div class="">
                  <h5 class="text-icon fs_15 mb-0">For advertisement/promotion please call:-</h5>
                  <a href="tel:9137441197" class="text-dark fs_15 fw_600 text-decoration-none">+91 91374 41197</a>
              </div>
            </li>
            <li>
              <div class="d-flex footer_contact mt-3 mt-lg-0">
                <div class=""><i class="bi bi-envelope fs_25 text-icon fw_600"></i></div>
                <div class="">
                  <h5 class="text-icon fs_15 mb-0">Mail:</h5>
                  <a href="mailto:ibdinteriors470@gmail.com" class="text-dark fs_15 fw_600 text-decoration-none">ibdinteriors470@gmail.com</a>
                </div>
              </div>
            </li>
            
            <li>
              <div class="d-flex footer_contact mt-3 mt-lg-0">
                <div class=""><i class="bi bi-printer fs_25 text-icon fw_600"></i></div>
                <div class="">
                  <h5 class="text-icon fs_15 mb-0">Fax:</h5>
                  <a href="#" class="text-dark fs_15 fw_600 text-decoration-none">+1-000-0000</a>
                </div>
              </div>
            </li>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <ul class="px-0">
            <li>
              <div class="d-flex footer_contact mt-3 mt-lg-0">
                <div class=""><i class="bi bi-geo-alt fs_25 text-icon fw_600"></i></div>
                <div class="">
                  <h5 class="text-icon fs_18 mb-0">Address:</h5>
                  <a target="_blank" class="text-dark fs_15 fw_600 text-decoration-none">   
                    17/1/2c, 1+1 Floor, G. Ambekar Marg, Near Fish Market, jijamata Nagar, Kalachowki, Mumbai 400033.</a>
                </div>
              </div>
            </li>
          </div>
        </div>

      </div>

      </div>
      <div class="row d-flex justify-content-between container">
        <div class=" fs-15 fw-400 w-50 ps-5 py-2">© <script>document.write(new Date().getFullYear())</script>, All rights reserved</div>
        <div class=" fs-15 fw-300 w-50 text-end py-2">Developed By <a href="https://whizzact.com" class="text-decoration-none text-dark">WhizzAct</a></div>
      </div>
</footer>