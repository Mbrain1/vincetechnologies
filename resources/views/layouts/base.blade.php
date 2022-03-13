<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vehicle Security System - Vince Technologies</title>


    {{-- <title> {{$siteSetting['meta_title']}}</title> --}}

    <meta name="keywords"   content="">
    <meta name="description"    content="We offer Biometric Attendance System Installation, CCTV Installation and Repair, Intercom System Installation, Computer Networking, Access Control & Asset tracking">
 
  <link rel="shortcut icon" href="{{asset('images/favicon.png').'?v='.uniqid()}}" type="image/x-icon">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >


   <link  rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  
  @stack('header')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"  />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"  />
  <link rel="stylesheet" href="{{asset("css/app.css")}}?v={{uniqid()}}">


  @livewireStyles
  
</head>
<body>

  

     {{$slot}}


 </body>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" ></script>
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script src="{{asset('js/app.js') }}" defer></script>



 <!-- Toast Notification -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    window.addEventListener('toaster', event => {

    if(event.detail.status == "success") toastr.success(event.detail.message);
        else if(event.detail.status == "warning")  toastr.warning(event.detail.message);
        else if(event.detail.status == "info")  toastr.info(event.detail.message);
        else if(event.detail.status == "error")  toastr.error(event.detail.message);
           
    })

        
</script>

 <script>

    config = {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        altInput: true,
        altFormat: "F j, Y (h:S K)",
        confirmIcon: "<i class='fas fa-check'></i>"
    }

     flatpickr("input[type=datetime-local]",config);
 </script>


 {{-- <script>
      var swiper = new Swiper(".mySwiper", {
         effect: 'coverflow',
        spaceBetween: 30,
        slidesPerView: 1,
        speed: 1000,
        initialSlide:1,
        loop: true,
          autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },
        centeredSlides: true,
        coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows : false
      },
      breakpoints: {
        // when window width is <= 499px
         1: {
            slidesPerView: 2,
          },
          // when window width is >= 768px
          768: {
            slidesPerView: 3,
            spaceBetween: 30
          },
          // when window width is >= 992px
          992: {
            slidesPerView: 2,
            spaceBetween: 30
          },
      }
      });
    </script> --}}




    <script>
      var swiper = new Swiper(".mySwiper", {
         effect: 'cards',
        spaceBetween: 30,
        slidesPerView: 1,
        speed: 1000,
        initialSlide:1,
        loop: true,
          autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },
        centeredSlides: true,
        CardsEffect: {
        rotate: 0,
        stretch: 100,
        depth: 300,
        modifier: 1,
        slideShadows : false
      }
      });
    </script>




     <script>
      var swiper = new Swiper(".mySwiper1", {
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
          shadow: false,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        loop: true,
          autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
        centeredSlides: true,
        coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows : false
      }
      });
    </script>

    <script>
        $(document).ready(function(){

            $(".image-gallery-container button").bind("click",(e) => {
                var filter = e.target.dataset.filter;

                if(filter == "all"){
                    $(".image-gallery-container .image").show(400);
                }else{
                    $(".image-gallery-container .image").not('.' + filter).hide(200);
                    $(".image-gallery-container .image").filter('.' + filter).show(400);
                }
            })

            $('.image-gallery-container').magnificPopup({
                delegate: 'a',
                type: 'image',
              mainClass: 'mfp-with-zoom', 
              gallery:{
                        enabled:true
                    },

              zoom: {
                enabled: true, 

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function(openerElement) {
                   
                  return openerElement.is('img') ? openerElement : openerElement.find('img');
              }
            }

            });

            });
    </script>

    <script>
      AOS.init();
    </script>

  @stack('script')

 @livewireScripts




</body>
</html>