@extends("layouts.layout")


@section("titolo")
    Home
@endsection

@section("hero")
    <section style="background-image: url('{{ Vite::asset('resources/images/jumbotron.jpg') }}'); background-size: cover;  height: 400px;"></section>
@endsection

@section("contenuto")
    <button class="btn btn-primary px-4 py-3 fw-bold position:absolute" style="margin-top: -30px; margin-left: -30px;">CURRENT SERIES</button>

    <div class=" mt-5 row row-cols-6 g-4 ">
        @foreach ($comics as $comic)
        <div class="col">
            <x-card
                src="{{ $comic['thumb'] }}"
                title="{{ $comic['title'] }}"
            >
            </x-card>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5 pb-5 ">
       
        <button class="btn btn-primary px-4 py-3 fw-bold position:absolute" style="margin-top: 20px; margin-left: 20px;">LOAD MORE</button>
    </div>
@endsection
  
@section("contenuto2")

<section style="background-color: #0282f9">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center gap-3 py-4"> 
            <div class="d-flex align-items-center gap-2"> 
                <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="Buy Comics" class="w-25   my-4" style="height: 50px">
                <h2 class="text-white" style="font-size: 12px;">DIGITAL COMICS</h2>
            </div>
            <div class="d-flex align-items-center gap-2"> 
                <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="Buy Comics" class="w-25   my-4" style="height: 50px">
                <h2 class="text-white" style="font-size: 12px;">DC MERCHANDISE</h2>
            </div>
            <div class="d-flex align-items-center gap-2"> 
                <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="Buy Comics" class="w-25   my-4" style="height: 50px">
                <h2 class="text-white" style="font-size: 12px;">SUBSCRITION</h2>
            </div>
            <div class="d-flex align-items-center gap-2"> 
                <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="Buy Comics" class="w-25   my-4" style="height: 50px">
                <h2 class="text-white" style="font-size: 12px;" >COMIC SHOP LOCATOR</h2>
            </div>
            <div class="d-flex align-items-center gap-2"> 
                <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="Buy Comics" class="w-25   my-4" style="height: 50px">
                <h2 class="text-white" style="font-size: 12px;">DC POWER VISA</h2>
            </div>
        </div>
    </div>
</section>

@endsection
