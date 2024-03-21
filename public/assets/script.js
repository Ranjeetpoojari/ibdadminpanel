$(document).ready(function () {
    $(".outer-slider").owlCarousel({
      dots:false,
        loop: true,
        nav: true,

        responsive: {
            0: {
                
                autoWidth: false,
                items: 1
            },
            600: {
                autoWidth: true,
                items: 2
            },
            1000: {
                autoWidth: true,
                items: 3
            } // No comma here
        },  navText: ['<i class="bi bi-arrow-left-short  rounded-circle bg-gray fs_30 fw_500 bg-white start-0"></i>', '<i class="bi bi-arrow-right-short fs_30 fw_500 rounded-circle bg-white"></i>']
        // }
    });
  
    $(".inner_slider").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        autoWidth: true,
    });
  });
  
    $('.service').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1200:{
              items:3
          },
          1480:{
              items:4
          }
      }
  });
  $(document).ready(function(){
$("#contact_form").submit(function(){
    var name = $("#contact_name").val();
    var email = $("#contect_email").val();
    var topic = $("#contact_topice").val();
    var number = $("#contact_number").val();
    var message = $("#contact_message").val();
    var contact = /^[0-9][0-9]{9}$/;
    var emailparttern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var letter = /^[a-zA-Z\s]+$/;
    if(!letter.test(name)){
        alert("Name should empty and only Letter");
    }else if(!emailparttern.test(email)){
        alert("Please provide valid Email");
    }else if(!contact.test(number)){
        alert("Please vaild number");
    }else if(!letter.test(topic)){
        alert("give the Subject for meassage");
    }else if(message == ""){
        alert("meassage should not be empty");
    }else{
        console.log('success full')
    }
// alert('sheela');
});

    // Check each input for empty value
   
 });
  
  $(document).ready(function(){
    // $('.custom-side-nav').addClass('close-slide');
    $('.body-overlay').addClass('d-none');
    $('.custom-sider-button').on('click',function(){
        $('.custom-side-nav').addClass('close-slide');
        $('.body-overlay').removeClass('d-none');
    });
    $(".button-siide-close").on('click', function(){
        $('.custom-side-nav').removeClass('close-slide');
        $('.body-overlay').addClass('d-none');
    });
    $('.body-overlay').on('click',function(){
        $(this).addClass('d-none');
        $('.custom-side-nav').removeClass('close-slide');
    })

  });
  