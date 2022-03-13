<div>
    @livewire("partials.modal.service")

     <div class="relative overflow-hidden">
   
         <section style="background-image:url('{{url('/images/vincetech-bg1.jpg')}}');background-position:center">

            @livewire("inc.header",["background" => false])

                 <div class="container mx-auto py-5 mt-10 h-[60vh] flex items-center">

                      <div class="md:w-2/4 text-center overflow-hidden">


                  <div class="swiper-container mySwiper1 bg-none">
                        <div class="swiper-wrapper">
                   
                            <div class="swiper-slide space-y-3">
                               <h1 class="font-semibold leading-tight text-[34px]">Welcome to Vince Technologies </h1>

                               <div class="text-[20px]">We Offer Most Reliable and Affordable Security System Installation Services</div>

                                <a class="py-3 px-4 rounded-full blue-2-bg text-white mx-2 inline-block" href="#services">Explore Services</a>
                            </div>

                             <div class="swiper-slide space-y-3">
                               <h1 class="font-semibold leading-tight text-[34px]">CCTV Installation and Repair </h1>

                               <div class="text-[20px]">Security System Installation Services</div>

                                <a class="py-3 px-4 rounded-full blue-2-bg text-white mx-2 inline-block" href="#services">Explore Services</a>
                            </div>

                             <div class="swiper-slide space-y-3">
                               <h1 class="font-semibold leading-tight text-[34px]">Intercom System Installation </h1>

                           <div class="text-[20px]">The whole world is now connected through some device or the other and we know the importance of it...</div>

                            <a class="py-3 px-4 rounded-full blue-2-bg text-white mx-2 inline-block" href="#services">Explore Services</a>
                            </div>

                             <div class="swiper-slide space-y-3">
                               <h1 class="font-semibold leading-tight text-[34px]">Biometric Attendance System Installation </h1>

                               <div class="text-[20px]">The world is running on automatic machines and so should we. No more keeping records manually...</div>

                                <a class="py-3 px-4 rounded-full blue-2-bg text-white mx-2 inline-block" href="#services">Explore Services</a>
                            </div>

                            <div class="swiper-slide space-y-3">
                               <h1 class="font-semibold leading-tight text-[34px]"> Computer Networking    </h1>

                               <div class="text-[20px]">Vince technologies help small to mid-sized organizations integrate technology with their business goals...</div>

                                <a class="py-3 px-4 rounded-full blue-2-bg text-white mx-2 inline-block" href="#services">Explore Services</a>
                            </div>

                    </div>
                </div>


                      </div>


                 </div>
            </section>




    <section class="gray-3-bg relative py-12" data-aos="fade-up" id="services">

         <div class="container mx-auto">

            <h2 class="text-center font-normal text-[34px] mb-5">Services</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-10" >
               

                 @foreach (App\Models\Category::all() as $item)
                     <div class="bg-white shadow border rounded relative overflow-hidden group">
                     
                          <img alt="" class=" w-full" src="{{asset('images')}}/{{$item->image}}"  />
                          
                          <div class="card text-center">
                              <h2 class="my-2 text-xl font-semibold"><a href="{{route('category',['service' => $item->slug])}}">{{$item->name}}</a></h2>
                        
                              <article class="text-[14px] my-2 ">
                                {{$item->description}}
                              </article>

                              <div class="flex justify-center mt-5">
                                  <button class="btn blue-2-bg text-white rounded-full px-10 service-modal">Enquire Now</button>
                              </div>
                          </div>

                          <a href="{{route('category',['service' => $item->slug])}}" class="btn gray-4-bg text-white rounded-full px-10 hidden group-hover:block absolute top-5 right-5"><i class="fas fa-store"></i> Products</a>
                     </div>
                 @endforeach

            </div>

         </div>
    </section>


 <section class="bg-white relative py-12" data-aos="fade-up" id="about">

         <div class="container mx-auto">


                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
               
                    <div class="card">
                        <h2 class="font-semibold text-[34px]">About Us</h2>
                        <div class=" text-[20px] mb-2 ">Who We Are</div>

                        <p class="text-left">Every person and institution has different needs according to their work. But security systems are something that should not be compromised. They should not be installed without consulting an expert. We Vince technologies believe in safeguarding your valuables and hence we deal in all the security system installation and repairing services to make sure that your assets are protected. We also provide the comprehensive skills to ensure your systems meet your expectations, the building specifications, and all code requirements.</p>
                    </div>

                     <div class="card">
                        <img src="{{asset('images/who-we-are.jpeg')}}" class="md:-rotate-2 md:shadow-2xl md:shadow-blue-400 rounded-3xl h-[350px] w-full object-cover" />
                    </div>

                </div>

         </div>
    </section>


 <section class="gray-3-bg relative py-12" data-aos="fade-up" id="gallery">

         <div class="container mx-auto image-gallery-container py-5">

             <h2 class="text-center font-medium text-[34px]">Gallery</h2>



               <div class="border-b border-gray-200 dark:border-gray-700 my-5">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white" data-filter="all">All</button>
                        </li>
                        <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white"   data-filter="cctv">CCTV</button>
                        </li>
                        <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white" data-filter="intercom">Intercom</button>
                        </li>
                        <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white" data-filter="biometric">Biometric</button>
                        </li>
                         <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white" data-filter="networking">Solar</button>
                        </li>
                         <li class="mr-2">
                            <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 focus:bg-[#021283] focus:text-white" data-filter="access-control">Access Control</button>
                        </li>
                    </ul>
                </div>


               <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
                   <div  class="image relative cctv group">
                       <a href="{{asset('images/gallery/cctv/cctv-01.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/cctv/cctv-01.jpeg')}}" alt="" /></a>

                       <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">CCTV Camera Repair</div>
                   </div>

                    <div  class="image relative cctv group">
                       <a href="{{asset('images/gallery/cctv/cctv-02.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/cctv/cctv-02.jpeg')}}" alt="" /></a>

                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">CCTV Camera Installation</div>

                   </div>


                    <div  class="image relative cctv group">
                       <a href="{{asset('images/gallery/cctv/cctv-03.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/cctv/cctv-03.jpeg')}}" alt="" /></a>

                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">CCTV Camera Repairs</div>
                   </div>

                    <div  class="image relative intercom group">
                       <a href="{{asset('images/gallery/intercom/intercom-01.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/intercom/intercom-01.jpeg')}}" alt="" /></a>

                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">Intercom System Installation</div>

                   </div>

                    <div  class="image relative intercom group">
                       <a href="{{asset('images/gallery/intercom/intercom-02.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/intercom/intercom-02.jpeg')}}" alt="" /></a>

                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">Intercom System Installation</div>
                   </div>

                    <div  class="image relative biometric group">
                       <a href="{{asset('images/gallery/biometric/biometric-01.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/biometric/biometric-01.jpeg')}}" alt="" /></a>

                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">Biometric Attendance System Installation</div>
                   </div>

                    <div  class="image relative networking group">
                       <a href="{{asset('images/gallery/networking/networking-01.png')}}"><img class="h-full w-full" src="{{asset('images/gallery/networking/networking-01.png')}}" alt="" /></a>
                        <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">Network Rack with switch and patch panel</div>
                   </div>

                

                   <div  class="image relative access-control group">
                       <a href="{{asset('images/gallery/access-control/access-control-01.jpeg')}}"><img class="h-full w-full" src="{{asset('images/gallery/access-control/access-control-01.jpeg')}}" alt="" /></a>
                          <div class="absolute bottom-0 w-full py-3 transition-all duration-300 bg-white text-center font-semibold  opacity-0 group-hover:opacity-100  group-hover:block">Access Control</div>
                   </div>




               </div>

         </div>
    </section>




    <section class="py-12" style="background-image:linear-gradient( rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9) ), url('images/cctv.jpg');background-position:center" data-aos="fade-up" id="testimonial">

         <div class="container mx-auto space-y-5">

                <h2 class="text-center font-medium text-[34px]">Testimonials</h2>

                  <div class="swiper-container   mySwiper">
                        <div class="swiper-wrapper">
                   
                        <div class="card bg-white flex flex-col items-center swiper-slide">
                            
                             <img src="{{asset('images/who-we-are.jpeg')}}" class="rounded-full" height="80" width="80" />

                            <div class="text-center  font-semibold text-[18px] my-2">Ubong Akaniyene</div>

                            <p class="text-center font-light">We are provided with the best security system for our home needs and we are happy about it. Overall great installation services provided.</p>
                        </div>


                         <div class="card bg-white flex flex-col items-center swiper-slide">
                            
                             <img src="{{asset('images/who-we-are.jpeg')}}" class="rounded-full" height="80" width="80" />

                            <div class="text-center  font-semibold text-[18px] my-2">Chukwudi Emeka</div>

                            <p class="text-center font-light">They have a rang of products and they will provide you with the one you are searching for, with the installation service that is very convenient.</p>
                        </div>


                         <div class="card bg-white flex flex-col items-center swiper-slide">
                            
                             <img src="{{asset('images/who-we-are.jpeg')}}" class="rounded-full" height="80" width="80" />

                            <div class="text-center  font-semibold text-[18px] my-2">Roy segun</div>

                            <p class="text-center font-light">Recommending one and all to check out the security systems they are providing. They are out savoir in need and will guid you to buy the best one in affordable price.</p>
                        </div>



                </div>

                <div class="swiper-pagination"></div>
                  </div>

                

         </div>
    </section>





     <section class="py-12 bg-white" data-aos="fade-up" id="contact" wire:ignore.self>

         <div class="container mx-auto">

                <h2 class="text-center font-medium text-[34px]">Contact Us</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
               
                    <div class="card">
                       <div class="md:w-3/4">

                        <div class="flex justify-start my-7">
                           <div class="mr-4 blue-2 text-[30px]"><i class="fas fa-map-marker-alt"></i></div>
                           <p class="font-semibold">Our Office Address Suite 207, second floor peace plaza, 300 Oron Road , Uyo, Akwa Ibom State</p>
                       </div>


                       <div class="flex justify-start my-7">
                           <div class="mr-4 blue-2 text-[30px]"><i class="fas fa-mail-bulk"></i></div>
                           <p>
                               <div class="font-semibold">General Enquiries</div>
                               <div><a href="mailto:info@vincetechnologies.com">info@vincetechnologies.com</a></div>
                           </p>
                       </div>


                       <div class="flex justify-start my-7">
                           <div class="mr-4 blue-2 text-[30px]"><i class="fas fa-phone-volume"></i></div>
                           <p>
                               <div class="font-semibold">Call Us</div>
                               <div><a href="tel:+2348068345971">+2348068345971</a></div>
                           </p>
                       </div>

                        <div class="flex justify-start my-7">
                           <div class="mr-4 blue-2 text-[30px]"><i class="fas fa-clock"></i></div>
                           <p>
                               <div class="font-semibold">Our Timing</div>
                               <div>Mon - Sat, 08:00 AM - 06:00 PM</div>
                           </p>
                       </div>



                       </div>
                    </div>


                     <div class="card">
                        <form class="space-y-3" wire:submit.prevent="contact" >
                            <div class="form-group">
                                <input type="text" class="form-control font-light" placeholder="Your Name" wire:model.defer="name" />
                                @error("name") <span class="text-red-500 text-xs">{{$message}}</span> @endError
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control font-light" placeholder="Your Email"  wire:model.defer="email"/>
                                @error("email") <span class="text-red-500 text-xs">{{$message}}</span> @endError
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control font-light" placeholder="Subject"  wire:model.defer="subject"/>
                                @error("subject") <span class="text-red-500 text-xs">{{$message}}</span> @endError
                            </div>

                            <div class="form-group">
                                <textarea type="text" class="form-control font-light" placeholder="Your Message" wire:model.defer="message"></textarea>
                                @error("message") <span class="text-red-500 text-xs">{{$message}}</span> @endError
                            </div>


                             <div class="form-group flex justify-center mt-5">
                                  <button type="submit" class=" blue-2-bg text-white rounded-full  py-3 px-5 text-[14px]">Submit <span wire:loading>loading...</span></button>
                              </div>

                        </form>
                    </div>

                 
                </div>

         </div>
    </section>


    <section>
        <div class="w-full "><iframe width="100%" height="400" frameborder="0" scrolling="no" marginHeight="0" marginWidth="0"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Vince%20Technologies+(Vince%20Technologies)&t=p&z=20&ie=UTF8&iwloc=B&output=embed"></iframe></div>       
    </section>
    
  </div>


  @livewire("inc.footer")


</div>