<div class="hidden bg-black bg-opacity-50 fixed flex justify-center items-center h-screen w-full py-5" wire:ignore.self style="z-index: 300;" id="service-modal-overlay">
        <div class="bg-white space-y-3 card h-full overflow-y-scroll" style="z-index: 1000;">
            <header class="flex justify-between py-3">
                <div>
                    <h4 class="font-bold">Send Enquiry</h4>
                    <p>Answer these questions to help us serve you better</p>
                 </div>

                <button class="modal-cancel rounded-full btn  "><i class="fas fa-times"></i></button>
            </header>

            <div>
                <form class="space-y-3 text-sm">
                    <div class="grid md:grid-cols-2 gap-x-2 w-full">
                        <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900" wire:model.defer="first_name">First Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900" wire:model.defer="last_name">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900" wire:model.defer="phone_number">Phone</label>
                            <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900" wire:model.defer="email">Email</label>
                            <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900">What type security system installation services are you looking for ? <span class="text-red-500">*</span></label>
                    </div>

                    
                    @foreach ($services as $item)
                        <div class="form-group">
                            <input type="radio" id="s{{$item->id}}" class="accent-blue-900"  wire:model.lazy="service" value="{{$item->id}}" />
                            <label for="s{{$item->id}}">{{$item->name}}</label>
                        </div>
                    @endforeach
                    

                     <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900">Who are you? <span class="text-red-500">*</span></label>
                    </div>

                    
                    <div class="form-group">
                            <input type="radio" class="accent-blue-900" name="who-we-are" id="s8" />
                            <label for="s8">Individual</label>
                    </div>

                     <div class="form-group">
                            <input type="radio" class="accent-blue-900" name="who-we-are" id="s9" />
                            <label for="s9">Corporate</label>
                    </div>

                     <div class="form-group">
                            <input type="radio" class="accent-blue-900" name="who-we-are" id="s10" />
                            <label for="s10">Other</label>
                    </div>


                     <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900">Your Preferred date and Time for Installation <span class="text-red-500">*</span></label>
                            <input type="datetime-local" class="form-control" placeholder="Select Date and Time"  wire:model.defer="date">
                        </div>

                    <div class="form-group">
                            <label class="font-semibold text-sm caret-blue-900">Please specify your requirement in details <span class="text-red-500">*</span></label>

                            <textarea class="form-control resize-none" rows="5" wire:model.defer="requirement"></textarea> 
                    </div>


                    <div class="form-group flex justify-end">
                           <button class="btn blue-2-bg text-white rounded-full px-10">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>


@push("script")

<script>
    $(document).ready(() => {
        var status = 0;
        $(".modal-cancel,.service-modal,#service-modal-overlay").click(() => {
            if(status == 0){
                $("#service-modal-overlay").css("display","flex").hide().fadeToggle();
                $("body,html").css("overflow-y","hidden");
                status = 1;
            }else{
                $("#service-modal-overlay").css("display","none").show().fadeToggle();
                $("body,html").css("overflow-y","auto");
                status = 0;
            }
            
        })

        $("#service-modal-overlay > div").click((e) => e.stopPropagation())

    })
</script>

@endPush