@extends('client_layout.master')

@section('content')
<div class="event-dt-block p-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="main-title checkout-title">
                    <h3>Order Confirmation</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="checkout-block">
                    <div class="main-card">
                        <div class="bp-title">
                            <h4>Billing information</h4>
                        </div>
                        <div class="bp-content bp-form">
                            <form action="{{ route('achat.achat') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">First Name*</label>
                                        <input class="form-control h_50" type="text" name="firstName" placeholder=""  required>																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Last Name*</label>
                                        <input class="form-control h_50" type="text" name="lastName" placeholder="" required>																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input class="form-control h_50" type="text"  name="email" placeholder="" required>																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Address*</label>
                                        <input class="form-control h_50" type="text" name="address" placeholder="" value="" required>																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group main-form mt-4">
                                        <label class="form-label">Country*</label>
                                        <select class="selectpicker" name="country" data-size="5" title="Nothing selected" data-live-search="true">
                                            <option value="Maroc">Maroc</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria (Österreich)</option>
                                            <option value="Belgium">Belgium (België)</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>                                            
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="Vietnam">Vietnam</option>																					
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">City</label>
                                        <input class="form-control h_50" name="city" type="text" placeholder="" required>																								
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="main-card mt-5">
                        <div class="bp-title">
                            <h4>Total Payable Amount : {{ $event->price }}</h4>
                        </div>
                        <div class="bp-content bp-form">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Card number*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">
                                        {{-- name="cardNumber" --}}
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Expiry date*</label>
                                        <input class="form-control h_50"  type="text" placeholder="MM/YY" value="">
                                         {{-- name="expiryDate" --}}																								
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">CVV*</label>
                                        <input class="form-control h_50" type="text" placeholder="" value="">	
                                         {{-- name="cvv" --}}										
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                     <div class="booking-btn">
                                        {{-- <a href="{{ route('confirmeTicketId', ['id'=>$event->id])}}"  class="main-btn btn-hover w-100 mt-5"> Confirme Now</a> --}}
                                        <button class="main-btn btn-hover h_50 w-100" type="submit">Submit</button>
                                        <input type="hidden" name="eventId" value="{{ $event->id }}">
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="main-card order-summary">
                    <div class="bp-title">
                        <h4>Billing information</h4>
                    </div>
                    <div class="order-summary-content p_30">
                        <div class="event-order-dt">
                            <div class="event-thumbnail-img">
                                <img src="{{asset('images/'. $event->image) }}" alt="">
                            </div>
                            <div class="event-order-dt-content">
                                <h5>{{ $event->event_name }}</h5>
                                <span><b style="color: black">Date</b> : {{ $event->date }} , <b style="color: black">Heurs</b> {{ $event->duration }} H</span>
                                <div class="category-type"><b>Localisation : </b> {{ $event->venue }} </div>
                            </div>
                        </div>
                        <div class="order-total-block">
                            <div class="order-total-dt">
                                <div class="order-text">Total Ticket</div>
                                <div class="order-number">1</div>
                            </div>
                            <div class="divider-line"></div>
                            <div class="order-total-dt">
                                <div class="order-text">Total : </div>
                                <div class="order-number ttl-clr">{{ $event->price }} Dhs</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection