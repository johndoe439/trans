{{--  --}}
<x-guest-layout>
    <main>



        <!-- Start of banner section
      ============================================= -->
        <section id="ft-banner" class="ft-banner-section" data-background="assets/img/bg/slider-bg.jpg">
            <div class="ft-banner-content">
                <div class="container">
                    <div class="ft-banner-text-content headline pera-content text-center">
                        <h1 class="cd-headline letters scale">
                            Marble Cargo
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Global</b>
                                <b>Secure</b>
                                <b>Fast</b>
                            </span>
                        </h1>
                        <p>
                            Reliable shipping solutions for your goods, delivered with precision and care worldwide.
                        </p>
                        <div class="ft-banner-btn-wrapper d-flex justify-content-center align-items-center">
                            <div class="ft-banner-btn">
                                <a class="d-flex justify-content-center align-items-center" href="service.html">Explore
                                    Services</a>
                            </div>
                            <div class="ft-banner-video-btn">
                                <a class="video_box" href="https://www.youtube.com/watch?v=C4jjFanHZo8">
                                    <i class="fas fa-play"></i>
                                    <span>See How It Works</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of banner section
      ============================================= -->

        <!-- Start of featured section
      ============================================= -->
        <section id="ft-featured" class="ft-featured-section">
            <div class="container">
                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">Featured</span>
                    <h2>Why Choose <span>Marble Cargo</span></h2>
                </div>
                <div class="ft-featured-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="ft-featured-innerbox position-relative">
                                <div class="ft-featured-icon">
                                    <i class="flaticon-pricing"></i>
                                </div>
                                <div class="ft-featured-text headline pera-content">
                                    <h3><a href="service-single.html">Clear Pricing</a></h3>
                                    <p>
                                        Transparent costs with no hidden fees for seamless shipping.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="ft-featured-innerbox position-relative">
                                <div class="ft-featured-icon">
                                    <i class="flaticon-deadline"></i>
                                </div>
                                <div class="ft-featured-text headline pera-content">
                                    <h3><a href="service-single.html">Live Tracking</a></h3>
                                    <p>
                                        Monitor your cargo in real time, every step of the way.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="ft-featured-innerbox position-relative">
                                <div class="ft-featured-icon">
                                    <i class="flaticon-warehouse"></i>
                                </div>
                                <div class="ft-featured-text headline pera-content">
                                    <h3><a href="service-single.html">Secure Storage</a></h3>
                                    <p>
                                        Safe and reliable warehouse solutions for your goods.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of featured section
      ============================================= -->

        <!-- Start of Product mesurment section
      ============================================= -->
        <section id="ft-product-mesurment" class="ft-product-mesurment-section">
            <div class="container">
                <div class="ft-product-mesurment-content position-relative">
                    <span class="ft-pm-bg-img position-absolute"><img src="assets/img/bg/pm-bg.png"
                            alt="" /></span>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="ft-product-mesurment-form">
                                <div class="ft-product-mesurment-tab-btn">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">
                                                Request A Quote
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">
                                                Track & Trace
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">

                                        <div class="ft-product-mesurment-form-input">
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            <form action="{{ route('quote.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="ft-product-mesurment-form-input-area">
                                                    <label class="ft-pm-title">Personal Details</label>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="first_name"
                                                                    placeholder="First Name"
                                                                    value="{{ old('first_name') }}" />
                                                                @error('first_name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="last_name"
                                                                    placeholder="Last Name"
                                                                    value="{{ old('last_name') }}" />
                                                                @error('last_name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="email" name="email"
                                                                    placeholder="Your Email"
                                                                    value="{{ old('email') }}" />
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="phone_number"
                                                                    placeholder="Your Phone Number"
                                                                    value="{{ old('phone_number') }}" />
                                                                @error('phone_number')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ft-product-mesurment-form-input-area">
                                                    <label class="ft-pm-title">Shipment Details</label>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div
                                                                class="ft-pm-input ft-select-option position-relative">
                                                                <select name="shipment_type">
                                                                    <option value="">Shipment Type</option>
                                                                    @foreach ($shipmentTypes as $type)
                                                                        <option value="{{ $type }}"
                                                                            {{ old('shipment_type') == $type ? 'selected' : '' }}>
                                                                            {{ $type }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('shipment_type')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="city_departure"
                                                                    placeholder="City Type Departure"
                                                                    value="{{ old('city_departure') }}" />
                                                                @error('city_departure')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="delivery_city"
                                                                    placeholder="Delivery City"
                                                                    value="{{ old('delivery_city') }}" />
                                                                @error('delivery_city')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>



                                                        <div class="col-lg-4">
                                                            <div
                                                                class="ft-pm-input ft-select-option position-relative">
                                                                <select name="incoterms">
                                                                    <option value="">Incoterms</option>
                                                                    @foreach ($incoterms as $term)
                                                                        <option value="{{ $term }}"
                                                                            {{ old('incoterms') == $term ? 'selected' : '' }}>
                                                                            {{ $term }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('incoterms')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="weight"
                                                                    placeholder="Weight lbs"
                                                                    value="{{ old('weight') }}" />
                                                                @error('weight')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="height"
                                                                    placeholder="Height in"
                                                                    value="{{ old('height') }}" />
                                                                @error('height')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="width"
                                                                    placeholder="Width in"
                                                                    value="{{ old('width') }}" />
                                                                @error('width')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="length"
                                                                    placeholder="Length in"
                                                                    value="{{ old('length') }}" />
                                                                @error('length')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <h6><small>Images Max-4</small></h6>
                                                        <div class="col-lg-12">
                                                            <div class="ft-pm-input" style="margin-bottom: 20px;">
                                                                <input type="file" name="images[]" multiple
                                                                    accept="image/*"
                                                                    style=" width: 100%; padding-left: 10px; padding: 10px; font-size: 16px; color: #333;background-color: #fff; cursor: pointer; transition: border-color 0.3s ease; " />
                                                                @error('images.*')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <textarea name="package_content" placeholder="Package Details" rows="4" class="form-control">{{ old('package_content') }}</textarea>
                                                                @error('package_content')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="box"
                                                                    placeholder="Number Of Boxes"
                                                                    value="{{ old('box') }}" />
                                                                @error('box')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="ft-product-mesurment-checkbox">
                                                    <label>
                                                        <input class="condition" name="express_delivery"
                                                            type="checkbox" value="1"
                                                            {{ old('express_delivery') ? 'checked' : '' }} />
                                                        <span class="checkmark-circle"></span>
                                                        <span class="slug">Express Delivery</span>
                                                    </label>
                                                    <label>
                                                        <input class="condition" name="insurance" type="checkbox"
                                                            value="1" {{ old('insurance') ? 'checked' : '' }} />
                                                        <span class="checkmark-circle"></span>
                                                        <span class="slug">Insurance</span>
                                                    </label>
                                                    <label>
                                                        <input class="condition" name="packaging" type="checkbox"
                                                            value="1" {{ old('packaging') ? 'checked' : '' }} />
                                                        <span class="checkmark-circle"></span>
                                                        <span class="slug">Packaging</span>
                                                    </label>
                                                </div>

                                                <button type="submit">Request For A Quote</button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="ft-product-mesurment-form-input">
                                            <form action="{{ route('track.show') }}" method="POST">
                                                @csrf
                                                <div class="ft-product-mesurment-form-input-area">
                                                    <label class="ft-pm-title">Track Your Shipment</label>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="ft-pm-input">
                                                                <input type="text" name="tracking_id"
                                                                    placeholder="Your Tracking Id"
                                                                    value="{{ old('tracking_id') }}" />
                                                                @error('tracking_id')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit">Track & Trace</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Product mesurment section
  ============================================= -->

        <!-- Start of Service section
  ============================================= -->
        <section id="ft-service-2" class="ft-service-section-2 position-relative">
            <span class="ft-service-bg position-absolute">
                <img src="assets/img/bg/ser-bg.png" alt="" /></span>
            <div class="container">
                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">What We Do</span>
                    <h2>We are optimists who Love to work together.</h2>
                </div>
                <div class="ft-service-content-2">
                    <div class="ft-service-slider-2">
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.3.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-free-shipping"></i>
                                    </div>
                                    <h3><a href="service-single.html">Road Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">1</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.4.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-boat"></i>
                                    </div>
                                    <h3><a href="service-single.html">Ocean Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">2</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.2.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-plane"></i>
                                    </div>
                                    <h3><a href="service-single.html">Cargo Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">3</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-train"></i>
                                    </div>
                                    <h3><a href="service-single.html">Air Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">4</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.3.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-free-shipping"></i>
                                    </div>
                                    <h3><a href="service-single.html">Road Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">5</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.4.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-boat"></i>
                                    </div>
                                    <h3><a href="service-single.html">Ocean Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">6</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Service section
  ============================================= -->

        <!-- Start of Service section
============================================= -->
        <section id="ft-service-2" class="ft-service-section-2 position-relative">
            <span class="ft-service-bg position-absolute">
                <img src="assets/img/bg/ser-bg.png" alt="" /></span>
            <div class="container">
                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">Our Services</span>
                    <h2>Marble Cargo Shipping Solutions</h2>
                </div>
                <div class="ft-service-content-2">
                    <div class="ft-service-slider-2">
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.3.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-free-shipping"></i>
                                    </div>
                                    <h3><a href="service-single.html">Road Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">1</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.4.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-boat"></i>
                                    </div>
                                    <h3><a href="service-single.html">Ocean Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">2</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.2.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-plane"></i>
                                    </div>
                                    <h3><a href="service-single.html">Air Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">3</div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-service-innerbox-2 position-relative">
                                <div class="ft-service-img text-center">
                                    <img src="assets/img/service/ser4.jpg" alt="" />
                                </div>
                                <div class="ft-service-text position-relative headline">
                                    <div
                                        class="ft-service-icon position-absolute d-flex align-items-center justify-content-center">
                                        <i class="flaticon-train"></i>
                                    </div>
                                    <h3><a href="service-single.html">Rail Freight</a></h3>
                                    <div class="ft-btn-2">
                                        <a href="service-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="ft-service-serial position-absolute">4</div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- End of Service section
============================================= -->

        <!-- Start of About section
============================================= -->
        <section id="ft-about-2" class="ft-about-section-2">
            <div class="container">
                <div class="ft-about-content-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ft-about-text-wrapper-2">
                                <div class="ft-section-title-2 headline pera-content wow fadeInUp"
                                    data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <span class="sub-title">About Us</span>
                                    <h2>
                                        Trusted Shipping with <span>Marble Cargo</span>
                                    </h2>
                                    <p>
                                        Since 1982, Marble Cargo has delivered reliable shipping solutions worldwide,
                                        ensuring your goods arrive safely and on time.
                                    </p>
                                </div>
                                <div class="ft-about-feature-wrapper-2">
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-about-feature-list-item d-flex align-items-center">
                                                <div
                                                    class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                                    <i class="fal fa-bullseye-arrow"></i>
                                                </div>
                                                <div class="ft-about-feature-text headline pera-content">
                                                    <h3>Our Mission</h3>
                                                    <p>
                                                        To provide secure and efficient shipping services globally.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-about-feature-list-item d-flex align-items-center">
                                                <div
                                                    class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                                    <i class="fal fa-bullseye-arrow"></i>
                                                </div>
                                                <div class="ft-about-feature-text headline pera-content">
                                                    <h3>Our Vision</h3>
                                                    <p>
                                                        To be the leading global partner in logistics solutions.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ft-btn-3">
                                        <a class="d-flex justify-content-center align-items-center"
                                            href="about.html">Learn More <i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="ft-about-img-2-wrapper position-relative">
                                <span class="ft-about-shape1 position-absolute"><img src="assets/img/shape/ab-sh1.png"
                                        alt="" /></span>
                                <span class="ft-about-shape2 position-absolute"><img src="assets/img/shape/ab-sh2.png"
                                        alt="" /></span>
                                <div class="ft-about-img-2">
                                    <img src="assets/img/about/ab2.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of About section
============================================= -->

        <!-- Start of Experience section
============================================= -->
        <section id="ft-experience" class="ft-experience-section">
            <div class="container">
                <div class="ft-experience-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ft-experience-text">
                                <div class="ft-section-title-2 headline pera-content">
                                    <span class="sub-title">Our Expertise</span>
                                    <h2>Trusted Partner for Global Shipping</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ft-experience-circle-progress">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="counter-boxed text-center headline position-relative">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f22728"
                                                    data-bgColor="#fff" data-width="80" data-height="80"
                                                    data-linecap="round" value="95" />
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="95"
                                                        data-speed="3500"></span>%
                                                </div>
                                            </div>
                                            <h3>Warehousing</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="counter-boxed text-center headline position-relative">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f22728"
                                                    data-bgColor="#fff" data-width="80" data-height="80"
                                                    data-linecap="round" value="85" />
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="85"
                                                        data-speed="3500"></span>%
                                                </div>
                                            </div>
                                            <h3>Ocean Freight</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="counter-boxed text-center headline position-relative">
                                            <div class="graph-outer">
                                                <input type="text" class="dial" data-fgColor="#f22728"
                                                    data-bgColor="#fff" data-width="80" data-height="80"
                                                    data-linecap="round" value="90" />
                                                <div class="inner-text count-box">
                                                    <span class="count-text" data-stop="90"
                                                        data-speed="3500"></span>%
                                                </div>
                                            </div>
                                            <h3>Air Freight</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Experience section
============================================= -->

        <!-- Start of Project section
============================================= -->
        <section id="ft-portfolio-2" class="ft-portfolio-section-2 position-relative">
            <div class="ft-section-title-2 headline pera-content text-center">
                <span class="sub-title">Our Projects</span>
                <h2>Explore Marble Cargo's Recent Work</h2>
            </div>
            <div class="ft-portfolio-content-2">
                <div class="ft-portfolio-slider-2">
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port1.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Global Logistics Solutions</a>
                                </h3>
                                <p>
                                    Efficient shipping for international businesses, ensuring timely delivery.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port2.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Secure Cargo Transport</a>
                                </h3>
                                <p>
                                    Safe and reliable delivery for high-value goods across oceans.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port3.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Express Air Freight</a>
                                </h3>
                                <p>
                                    Fast and efficient air shipping for urgent deliveries worldwide.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port4.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Bulk Freight Handling</a>
                                </h3>
                                <p>
                                    Streamlined logistics for large-scale shipments with precision.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port1.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Global Logistics Solutions</a>
                                </h3>
                                <p>
                                    Efficient shipping for international businesses, ensuring timely delivery.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port2.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Secure Cargo Transport</a>
                                </h3>
                                <p>
                                    Safe and reliable delivery for high-value goods across oceans.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ft-portfolio-slider-item">
                        <div class="ft-portfolio-slider-innerbox position-relative">
                            <div class="ft-portfolio-img">
                                <img src="assets/img/project/port3.jpg" alt="" />
                            </div>
                            <div class="ft-portfolio-text headline headline pera-content">
                                <h3>
                                    <a href="project-single.html">Express Air Freight</a>
                                </h3>
                                <p>
                                    Fast and efficient air shipping for urgent deliveries worldwide.
                                </p>
                                <div class="ft-btn-3">
                                    <a class="d-flex justify-content-center align-items-center"
                                        href="portfolio-single.html">View Project <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Project section
============================================= -->

        <!-- Start of Testimonial section
============================================= -->
        <section id="ft-testimonial-2" class="ft-testimonial-section-2">
            <div class="container">
                <div class="ft-testimonial-top-content-2 d-flex justify-content-between align-items-end flex-wrap">
                    <div class="ft-section-title-2 headline pera-content">
                        <span class="sub-title">Testimonials</span>
                        <h2>What Our Clients Say About Marble Cargo</h2>
                    </div>
                    <div class="ft-title-text">
                        Discover how Marble Cargo has transformed shipping for businesses worldwide with reliable and
                        efficient services.
                    </div>
                </div>
                <div class="ft-testimonial-slider-wrapper-2 swiper-container">
                    <div class="ft-testimonial-slider-2">
                        <div class="choose_slider_items ul-li choose_slider">
                            <ul id="mySlider1">
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>Sarah Johnson</h3>
                                                <span>Logistics Manager</span>
                                            </div>
                                            <p>
                                                Marble Cargo delivered our shipment on time with excellent tracking
                                                support. Their service is top-notch!
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>Michael Chen</h3>
                                                <span>Supply Chain Director</span>
                                            </div>
                                            <p>
                                                Their ocean freight service was seamless and cost-effective. Highly
                                                recommend Marble Cargo!
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>Emily Davis</h3>
                                                <span>Operations Lead</span>
                                            </div>
                                            <p>
                                                Marble Cargo’s air freight option was incredibly fast and reliable for
                                                our urgent shipments.
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>James Carter</h3>
                                                <span>Warehouse Supervisor</span>
                                            </div>
                                            <p>
                                                The secure storage solutions provided by Marble Cargo ensured our goods
                                                were safe and accessible.
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>Linda Brooks</h3>
                                                <span>Business Owner</span>
                                            </div>
                                            <p>
                                                Marble Cargo’s transparent pricing made budgeting for our shipments so
                                                much easier.
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="current_item">
                                    <div class="ft-testimonial-innerbox-item-2 text-center">
                                        <div class="ft-testimonial-img">
                                            <img src="assets/img/testimonial/test2.1.jpg" alt="" />
                                        </div>
                                        <div class="ft-testimonial-text headline pera-content">
                                            <div class="ft-testimonial-meta">
                                                <h3>David Lee</h3>
                                                <span>Procurement Specialist</span>
                                            </div>
                                            <p>
                                                Their customer support was exceptional, guiding us through every step of
                                                the shipping process.
                                            </p>
                                            <div class="ft-testimonial-rate ul-li">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <a id="btn_next1" href="#"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div>
                                <a id="btn_prev1" href="#"><i class="far fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial section
============================================= -->

        <!-- Start of FAQ why choose section
============================================= -->
        <section id="ft-faq-why-choose-us" id="fag" class="ft-faq-why-choose-us-section">
            <div class="container">
                <div class="ft-faq-why-choose-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ft-faq-content">
                                <div class="ft-section-title-2 headline pera-content">
                                    <span class="sub-title">FAQs</span>
                                    <h2>Got Questions?</h2>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Can I specify a delivery date?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Yes, you can specify a preferred delivery date during the quote process,
                                                and we’ll do our best to accommodate.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                What payment methods do you accept?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We accept major credit cards, bank transfers, and online payment
                                                platforms for your convenience.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                What are Incoterms?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Incoterms are international rules that define the responsibilities of
                                                buyers and sellers in shipping contracts.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item headline pera-content">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                aria-expanded="false" aria-controls="collapseFour">
                                                How do I track my shipment?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Use your tracking ID on our website’s Track Shipment feature to monitor
                                                your cargo in real time.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ft-why-choose-content-2">
                                <div class="ft-section-title-2 headline pera-content wow fadeInUp"
                                    data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <span class="sub-title">Why Choose Us</span>
                                    <h2>Why Marble Cargo?</h2>
                                </div>
                                <div class="ft-why-choose-feature-wrapper-2">
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="200ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-why-choose-feature-list-item-2">
                                                <div class="ft-why-choose-feature-icon">
                                                    <i class="flaticon-logistics"></i>
                                                </div>
                                                <div class="ft-why-choose-feature-text headline pera-content">
                                                    <h3>Secure Packing</h3>
                                                    <p>
                                                        We ensure your goods are safely packed for transit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-why-choose-feature-list-item-2">
                                                <div class="ft-why-choose-feature-icon">
                                                    <i class="flaticon-delivery-truck"></i>
                                                </div>
                                                <div class="ft-why-choose-feature-text headline pera-content">
                                                    <h3>On-Time Delivery</h3>
                                                    <p>
                                                        We deliver your cargo exactly when you need it.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-why-choose-feature-list-item-2">
                                                <div class="ft-why-choose-feature-icon">
                                                    <i class="flaticon-boat"></i>
                                                </div>
                                                <div class="ft-why-choose-feature-text headline pera-content">
                                                    <h3>Global Reach</h3>
                                                    <p>
                                                        We ship to destinations worldwide with ease.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="800ms"
                                            data-wow-duration="1500ms">
                                            <div class="ft-why-choose-feature-list-item-2">
                                                <div class="ft-why-choose-feature-icon">
                                                    <i class="flaticon-free-shipping"></i>
                                                </div>
                                                <div class="ft-why-choose-feature-text headline pera-content">
                                                    <h3>Fast Shipping</h3>
                                                    <p>
                                                        Speedy delivery options to meet your deadlines.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of FAQ why choose section
============================================= -->

        <!-- Start of blog section
============================================= -->
        <section id="ft-blog-2" class="ft-blog-section-2 position-relative">
            <div class="container">
                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">Blog</span>
                    <h2>Latest Shipping Insights</h2>
                </div>
                <div class="ft-blog-content-2">
                    <div class="ft-blog-slider-2">
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.1.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Top Benefits of Using a Freight Broker</a>
                                    </h3>
                                    <p>
                                        Discover how freight brokers simplify shipping and save costs.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.2.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Global Packaging and Logistics Solutions</a>
                                    </h3>
                                    <p>
                                        Learn how we provide efficient packaging for worldwide shipping.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.3.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Logistics Trends to Watch in 2025</a>
                                    </h3>
                                    <p>
                                        Stay ahead with the latest trends in global logistics.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.1.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Top Benefits of Using a Freight Broker</a>
                                    </h3>
                                    <p>
                                        Discover how freight brokers simplify shipping and save costs.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.2.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Global Packaging and Logistics Solutions</a>
                                    </h3>
                                    <p>
                                        Learn how we provide efficient packaging for worldwide shipping.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ft-item-innerbox">
                            <div class="ft-blog-innerbox-2">
                                <div class="ft-blog-img-2 position-relative">
                                    <img src="assets/img/blog/blg2.3.jpg" alt="" />
                                    <div
                                        class="ft-blog-meta text-center d-flex align-items-center justify-content-center position-absolute">
                                        21 Oct
                                    </div>
                                </div>
                                <div class="ft-blog-text-2 headline pera-content">
                                    <h3>
                                        <a href="blog-single.html">Logistics Trends to Watch in 2025</a>
                                    </h3>
                                    <p>
                                        Stay ahead with the latest trends in global logistics.
                                    </p>
                                    <div class="ft-btn-2">
                                        <a href="blog-single.html">
                                            <i class="icon-first flaticon-right-arrow"></i>
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_nav clearfix">
                        <button type="button" class="blg-left_arrow">
                            <i class="far fa-arrow-left"></i>
                        </button>
                        <button type="button" class="blg-right_arrow">
                            <i class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of blog section
============================================= -->
    </main>
</x-guest-layout>
