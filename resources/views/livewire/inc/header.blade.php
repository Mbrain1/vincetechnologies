<nav class="{{$background ? 'gray-3-bg' : ''}}">
    <div class="container nav-1 mx-auto md:flex justify-between items-center py-1 hidden">
        <div><span><i class="fas fa-telephone"></i><a href="tel:+2348068345971">+2348068345971</a></span> | <span><i class="fas fa-mail"></i><a href="mailto:info@vincetechnologies.com">info@vincetechnologies.com</a></span> </div>

        <div><span>Login</span> | <span>Sign Up</span></div>
    </div>
   <div class="container nav-1 mx-auto flex justify-between items-center py-4">
          <a href="{{ route('home') }}"><img alt="" src="{{asset('/images/logo.png')}}" width="130" /></a>

          <ul class="hidden md:flex">
            <li><a href="#home">HOME</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="#testimonial">TESTIMONIALS</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>

          <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-grey-200 group">
              <div class="w-5 h-1 bg-gray-600 mb-1"></div>
              <div class="w-5 h-1 bg-gray-600 mb-1"></div>
              <div class="w-5 h-1 bg-gray-600"></div>

              <div class="z-50 absolute top-0 -right-full h-screen w-8/12 bg-white border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                    <ul class="flex flex-col items-center w-full text-base cursor-pointer  border-b">

                      <li class="py-4 px-6 w-full text-left text-white blue-2-bg text-[14px]">
                        <div><strong>Welcome</strong></div>
                        <div><span>Login</span> | <span>Sign Up</span></div>
                      </li>

                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#home"><i class="text-[14px] mr-2 fas fa-home"></i> Home</a></li>
                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#services"><i class="text-[14px] mr-2 fas fa-cog"></i> Services</a></li>
                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#about"><i class="text-[14px] mr-2 fas fa-info-circle"></i> About Us</a></li>
                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#gallery"><i class="text-[14px] mr-2 fas fa-image"></i> Gallery</a></li>
                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#testimonial"><i class="text-[14px] mr-2 fas fa-quote-left"></i> Testimonials</a></li>
                      <li class="hover:bg-gray-200 py-4 px-6 w-full text-left"><a href="#contact"><i class="text-[14px] mr-2 fas fa-phone"></i> Contact Us</a></li>
                    </ul>
              </div>

          </button>
      </div>

</nav>