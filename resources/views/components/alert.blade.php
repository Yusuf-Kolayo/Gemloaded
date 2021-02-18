@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="text-white mt-6 px-6 py-4 border-0 rounded relative mb-4 bg-red-200">
  <span class="inline-block align-middle mr-8 text-black">
        {{$error}}
      </span> 
    </div>
@endforeach
@endif


@if(session('success'))  
<div class="text-white mt-6 px-6 py-4 border-0 rounded relative mb-4 bg-green-200">
  <span class="inline-block align-middle mr-8 text-black">
     {{session('success')}}
    </span> 
  </div>
@endif


@if(session('error')) 
<div class="text-white mt-6 p-2 border-0 rounded relative mb-4 bg-red-200">
  <span class="inline-block align-middle mr-8 text-black">
 {{session('error')}}
</span> 
</div>
@endif


{{-- <div class="text-white mt-6 px-6 py-4 border-0 rounded relative mb-4 bg-green-200">
  <span class="inline-block align-middle mr-8 text-black">
     New Artiste Created!
    </span> 
</div> --}}