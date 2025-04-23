@props(['src', 'title'])

<div class="container mx-auto p-4">
    <div class=" shadow-md rounded-lg " style="background-color: #1c1c1c"> 
        <div class="w-full h-[300px]">
            <img src="{{ $src }}" alt="Card Image" class="w-full object-cover rounded-t-lg" style="height: 200px; ">
        </div>   
        <div class="mt-4"> 
            <h1 class="text-white fs-6 text-center">{{ $title }}</h1>           
        </div>
    </div>
</div>