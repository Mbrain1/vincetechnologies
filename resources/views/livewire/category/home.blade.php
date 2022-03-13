<div>
    @livewire("partials.modal.service")

     <div class="relative overflow-hidden">
   

            @livewire("inc.header",["background" => true])


     <section class="py-12 bg-white" data-aos="fade-up">

         <div class="container mx-auto">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
               
                    <div class="card">
                        <img alt="" class=" w-full" src="{{asset('images')}}/{{$category->image}}"  />
                    </div>


                     <div class="card">
                        <h2 class="my-2 text-xl font-semibold">{{$category->name}}</h2>

                         <article class="text-[14px] my-2 ">
                                {{$category->description}}
                        </article>

                        <h2 class="my-2 text-xl font-semibold">Products</h2>

                        <div class="grid grid-cols-2">
                            @foreach ($category->product as $item)
                                <div>
                                    <h2 class="text-xl font-semibold">{{$item->name}}</h2>
                                    <div>{{$item->stock_status}}</div>
                                    <div>Quantity: {{$item->quantity}}</div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                 
                </div>

         </div>
    </section>


    
  </div>


  @livewire("inc.footer")


</div>