

<section style="background-image: url('{{ Vite::asset('resources/images/footer-bg.jpg') }}'); background-size: cover; background-position: center; min-height: 400px;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center ">          
                <div class="d-flex gap-4"> 
                    <div class="d-flex flex-column gap-3"> 
                        <div>
                            <h2 class="text-white fs-5 fw-bold ">
                                DC COMICS
                            </h2>
                            <ul class="px-0"> 
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Characters</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Comics</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Movies</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Tv</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Games</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Videos</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">News</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-white fs-5 fw-bold ">
                                SHOP
                            </h2>
                            <ul class="px-0"> 
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Shop DC</a>
                                </li>
                                <li>
                                    <a href="#" class="text-secondary text-decoration-none hover-white">Shop DC Collectibles</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-white fs-5 fw-bold ">
                            DC 
                        </h2>
                        <ul class="px-0"> 
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Terms Of Use</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Privacy policy (News)</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Ad Choices</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Advertising</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Jobs</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Subscriptions</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Talent Workshops</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">CPSC Certificates</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Ratings</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Shop Help</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-white fs-5 fw-bold ">
                            SITES
                        </h2>
                        <ul class="px-0"> 
                            <li class="hover:text-white">
                                <a href="#" class="text-secondary text-decoration-none hover-white">DC</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">MAD Magazine</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">DC Kids</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">DC Universe</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary text-decoration-none hover-white">DC Power Visa</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div> 
                    <img src="{{ Vite::asset('resources/images/dc-logo-bg.png') }}" alt="Logo DC" class="w-1/4 mx-auto my-4">
                </div>           
        </div>
    </div>
</section>
<section style="background-color: #303030">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center gap-3 py-4"> 
            <div class="d-flex align-items-center gap-2"> 
                <button class="btn border border-primary text-white px-4 py-3 fw-bold position:absolute mx-4" >SIGN-UP NOW!</button>
            </div>
            <div class="d-flex align-items-center gap-4"> 
                <h2 class="text-primary fs-5 fw-bold" >FOLLOW US</h2>
                <a href="#"><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="Facebook" class="w-1/4   " ></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="Twitter" class="w-1/4  " ></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="Youtube" class="w-1/4  " ></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="Pinterest" class="w-1/4  " ></a>
                <a href="#"><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="Periscope" class="w-1/4  " ></a>
            </div>
        </div>
    </div>
</section>

<style>
.hover-white:hover {
    color: white !important;
    transition: color 0.3s ease;
}
</style>