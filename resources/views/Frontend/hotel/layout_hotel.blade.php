@extends('layout')
@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-sm parallax overlay overlay-color-dark overlay-show overlay-op-1 my-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/hotel/parallax-hotel.jpg">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 align-self-center text-center">
                <h1 class="font-weight-bold text-light text-uppercase">Hotel <span class="d-block mt-2">Enjoy the best of Porto</span></h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-no-background section-no-border m-0">
    <div class="container">
        <div class="row mt-2">

            <div class="col-lg-3">
                <div class="tabs tabs-vertical tabs-left tabs-navigation">
                    <ul class="nav nav-tabs col-sm-3">
                        <li class="nav-item active">
                            <a class="nav-link" href="#tabsNavigation1" data-toggle="tab"> Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigation2" data-toggle="tab"> Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tabsNavigation3" data-toggle="tab"> FAQ's</a>
                        </li>
                    </ul>
                </div>

                <a href="demo-hotel-special-offers.html" class="mt-4 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" title="">
                    <img alt="" class="img-fluid mt-2 mt-lg-4 mb-4" src="public/style/frontend/img/demos/hotel/banner-hotel.jpg">
                </a>
            </div>
            <div class="col-lg-9">
                <div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">

                    <h3 class="mb-0 pb-0 text-uppercase">Porto Hotel</h3>
                    <div class="divider divider-primary divider-small mb-4 mt-0">
                        <hr class="mt-2 mr-auto">
                    </div>

                    <div class="row">
                        <div class="col-lg-8">

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

                        </div>
                        <div class="col-lg-4">

                            <div class="owl-carousel owl-theme dots-inside box-shadow-custom mt-4" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                                <div>
                                    <img alt="" class="img-fluid" src="public/style/frontend/img/demos/hotel/gallery/gallery-1.jpg">
                                </div>
                                <div>
                                    <img alt="" class="img-fluid" src="public/style/frontend/img/demos/hotel/gallery/gallery-2.jpg">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                <li><i class="fas fa-check"></i> 24 Rooms, 4 Luxury suites</li>
                                <li><i class="fas fa-check"></i> Fitness center</li>
                                <li><i class="fas fa-check"></i> Airport transporation</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                <li><i class="fas fa-check"></i> 24-Hour In-Room Dining</li>
                                <li><i class="fas fa-check"></i> Cocktail Bar</li>
                                <li><i class="fas fa-check"></i> Dog Friendly - Pets Stay Free</li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list list-icons list-primary list-borders text-uppercase text-color-dark text-2">
                                <li><i class="fas fa-check"></i> Valet car service</li>
                                <li><i class="fas fa-check"></i> Pool</li>
                                <li><i class="fas fa-check"></i> Free Wi-Fi</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="mt-4 mb-4 pb-0 text-uppercase">Complimentary Attractions</h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
                            </ul>

                        </div>
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">

                    <h3 class="mb-0 pb-0 text-uppercase">Services &amp; Amenities</h3>
                    <div class="divider divider-primary divider-small mb-4 mt-0">
                        <hr class="mt-2 mr-auto">
                    </div>

                    <div class="row">
                        <div class="col">

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus. Etiam ut.</p>

                        </div>
                    </div>

                    <h4 class="mt-4 mb-4 pb-0 text-uppercase">Porto Hotel Services</h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
                            </ul>

                        </div>
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                            </ul>

                        </div>
                    </div>

                    <h4 class="mt-4 mb-4 pb-0 text-uppercase">Amenities</h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum.</li>
                            </ul>

                        </div>
                        <div class="col-lg-6">

                            <ul class="list list-icons list-primary">
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>Consectetur adipiscing elit.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum.</li>
                                <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i> Lorem dolor sit amet, consectetur adipiscing.</li>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">

                    <h3 class="mb-0 pb-0 text-uppercase">Frequently Asked Questions</h3>
                    <div class="divider divider-primary divider-small mb-4 mt-0">
                        <hr class="mt-2 mr-auto">
                    </div>

                    <div class="row">
                        <div class="col">

                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non bibendum dolor. Ut vel turpis accumsan.</p>

                            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultrices malesuada ante quis pharetra. Nullam non bibendum dolor. Ut vel turpis accumsan, efficitur dolor fermentum, tincidunt metus ut vel turpis accumsan.</p>

                        </div>
                    </div>

                    <div class="toggle toggle-primary" data-plugin-toggle>
                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet viaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet varius iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet viaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet varius iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet vague iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet viaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa.</p>
                        </section>

                        <section class="toggle">
                            <label>Curabitur eget leo at velit imperdiet varius iaculis vitaes?</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
                        </section>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection