@extends('layout')
@section('content')
<section class="page-header page-header-modern bg-color-primary page-header-md mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-light text-uppercase">Book Now <span class="d-block mt-2">Make a Reservation</span></h1>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <form id="bookForm" action="demo-hotel-book.html" method="POST">
        <div class="row mt-5 mb-5">
            <div class="col-lg-4">

                <section class="section section-tertiary section-no-border p-5 mt-1 mb-4" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 150}}">
                    <div class="form-row">
                        <div class="form-group col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Reservation Details</h4>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom form-control-datepicker-custom">
                                <input type="text" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Arrival" name="bookNowArrival" id="bookNowArrival" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom form-control-datepicker-custom">
                                <input type="text" value="" class="form-control text-uppercase text-2" data-msg-required="This field is required." placeholder="Departure" name="bookNowDeparture" id="bookNowDeparture" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom">
                                <select class="form-control text-uppercase text-2" name="bookNowAdults" data-msg-required="This field is required." id="bookNowAdults" required>
                                    <option value="">Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-control-custom">
                                <select class="form-control text-uppercase text-2" name="bookNowKids" data-msg-required="This field is required." id="bookNowKids" required>
                                    <option value="">Kids</option>
                                    <option value="1">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="col-lg-8">

                <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Select Your Room</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" checked="checked" name="bookNowRoom" id="bookNowRoom" value="">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="img/demos/hotel/room-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">Standard Room</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>BEDS</label> <span>1 Double Bed</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 199</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" name="bookNowRoom" id="bookNowRoom" value="">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="img/demos/hotel/room-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">Premium Room</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>BEDS</label> <span>1 Double Bed</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 299</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <label class="mt-4 mb-4">
                                <input type="radio" name="bookNowRoom" id="bookNowRoom" value="">
                            </label>
                        </div>
                        <div class="col-2 d-none d-sm-block">
                            <img src="img/demos/hotel/room-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-11 col-sm-9">
                            <h5 class="mt-0 mb-0">Deluxe Room</h5>
                            <div class="room-suite-info">
                                <ul>
                                    <li><label>BEDS</label> <span>2 Double Beds</span></li>
                                    <li><label>RATES FROM</label> <strong>USD 399</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-quaternary section-no-border text-light p-5 mt-1 mb-4">
                    <div class="row">
                        <div class="col">
                            <h4 class="mt-4 mb-4 pb-0 text-uppercase">Guest Details</h4>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowFullName" class="form-control-label">Full Name</label>
                            <input type="text" class="form-control" id="bookNowFullName" name="bookNowFullName" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowStreetAdd1" class="form-control-label">Street Address 1</label>
                            <input type="text" class="form-control" id="bookNowStreetAdd1" name="bookNowStreetAdd1" placeholder="Street address, P.O. box, company name, c/o">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowStreetAdd2" class="form-control-label">Street Address 2</label>
                            <input type="text" class="form-control" id="bookNowStreetAdd2" name="bookNowStreetAdd2" placeholder="Apartment, suite, unit, building, floor, etc.">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowCity" class="form-control-label">City</label>
                            <input type="text" class="form-control" id="bookNowCity" name="bookNowCity" placeholder="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowState" class="form-control-label">State</label>
                            <select class="form-control" id="bookNowState">
                                <option value=""></option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="bookNowZip" class="form-control-label">Zip Code</label>
                            <input type="text" class="form-control" id="bookNowZip" name="zip" placeholder="">
                        </div>
                    </div>

                </section>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Book Now" class="btn btn-primary btn-lg btn-block text-uppercase p-4 mb-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pb-4 text-2">
                            * Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </form>

</div>

@endsection