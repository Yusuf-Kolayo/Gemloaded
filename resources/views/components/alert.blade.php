@if(count($errors) > 0)
@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endforeach
@endif


@if(session('success')) 
<div class="alert alert-success">
     {{session('success')}}
</div> 
@endif


@if(session('error')) 
<div class="alert alert-danger">
 {{session('error')}}
</div> 
@endif

<div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-blue-200">
    <span class="text-xl inline-block mr-5 align-middle">
      <i class="fas fa-bell"></i>
    </span>
    <span class="inline-block align-middle mr-8 text-black">
      <b class="capitalize">blue!</b> This is a blue alert - check it out!
    </span>
    <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
      <span>×</span>
    </button>
  </div>