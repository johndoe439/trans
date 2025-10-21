<x-guest-layout>
    <!-- Start of Breadcrumb section -->
    <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative"
        data-background="{{ asset('assets/img/bg/bread-bg.jpg') }}">
        <span class="background_overlay"></span>
        <span class="design-shape position-absolute"><img src="{{ asset('assets/img/shape/tmd-sh.png') }}"
                alt="" /></span>
        <div class="container">
            <div class="ft-breadcrumb-content headline text-center position-relative">
                <h2>Air Freight</h2>
                <div class="ft-breadcrumb-list ul-li">
                    <ul>
                        <li>Quote Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumb section -->

    <section id="ft-service-details" class="ft-service-details-section page-padding">
        <div class="container">
            <div class="ft-service-details-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-service-sidebar">
                            <div class="ft-service-sidebar-widget headline ul-li-block">
                                <div class="service-category-widget">
                                    <h3 class="widget-title">Package Details</h3>
                                    <ul>
                                        <li><a href="#">Personal Information<br> {{ $quote->email }}
                                                <br>{{ $quote->first_name }} {{ $quote->last_name }} <br>
                                                {{ $quote->phone_number }}</a></li>
                                        <li><a href="#">Package Details<br> {{ $quote->package_content }} <br>Box
                                                No. - {{ $quote->box }}</a></li>
                                        <li><a href="#">Shipment Type - {{ $quote->shipment_type }} <br> City
                                                Departure - {{ $quote->city_departure }} <br> Delivery
                                                City - {{ $quote->delivery_city }} <br>Current
                                                Location - {{ $quote->current_location ?? 'N/A' }} </a></li>
                                        <li><a href="#">Weight - {{ $quote->weight }} Kg
                                                <br>Height - {{ $quote->height }} Cm <br>Length - {{ $quote->length }}
                                                Cm
                                                <br> Width - {{ $quote->width }} Cm </a></li>
                                        <li><a href="#">Status <br> {{ ucfirst($quote->status) }}</a></li>
                                        <li><a href="#">Amount <br>
                                                ${{ number_format($quote->price ?? 0, 2) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ft-service-details-content-wrapper headline pera-content">

                            <div class="ft-service-details-text-wrapper">
                                <h3>Overview</h3>
                                <p>
                                    Track your shipment with ease. The details provided here reflect the current status
                                    and specifications of your package. For further assistance, please contact our
                                    support team.
                                </p>
                                <p>
                                    Hi {{ $quote->first_name }} {{ $quote->last_name }}, thanks for picking us to
                                    handle your shipment! We’ve got your request from {{ $quote->email }} (phone:
                                    {{ $quote->phone_number }}). Your package, with
                                    {{ $quote->package_content ?? 'your items' }}, is packed safely in
                                    {{ $quote->box }} box(es) and ready to go. It’s being shipped by
                                    {{ $quote->shipment_type }} from {{ $quote->city_departure }} to
                                    {{ $quote->delivery_city }}, and right now it’s at
                                    {{ $quote->current_location ?? 'N/A' }}. The package weighs
                                    {{ number_format($quote->weight, 2) }} kg, and it’s
                                    {{ number_format($quote->height, 2) }} cm high,
                                    {{ number_format($quote->length, 2) }} cm long, and
                                    {{ number_format($quote->width, 2) }} cm wide. It’s currently
                                    {{ ucfirst($quote->status) }}, and we’ll keep you posted on every step. The quote
                                    is ${{ number_format($quote->price ?? 0, 2) }}, and we’re committed to getting your
                                    package there safely and on time. You’re in good hands!
                                </p>
                            </div>
                            <div class="ft-service-details-img-wrapper">
                                <div class="row">
                                    <div class="ft-service-details-img-wrapper">
                                        <div class="row">
                                            @foreach ([$quote->image_1, $quote->image_2, $quote->image_3, $quote->image_4] as $image)
                                                @if ($image)
                                                    <div class="col-md-6">
                                                        <div class="ft-service-details-img">
                                                            <img src="{{ asset('storage/' . $image) }}"
                                                                 alt="Package Image"
                                                                 style="width: 300px; height: 200px; object-fit: cover;" />
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-md-6">
                                                        <p>No image available</p>
                                                    </div>
                                                @endif
                                            @endforeach
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
</x-guest-layout>
