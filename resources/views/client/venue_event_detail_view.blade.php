@extends('client_layout.master')

@section('content')
<!-- Body Start-->
<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Explore Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Venue Event Detail View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row">
                                    
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="event-top-dts">
                        <div class="event-top-date">
                            <span class="event-month">Date</span>
                            <span class="event-date">{{ $event->date }}</span>
                        </div>
                        <div class="event-top-dt">
                            <h3 class="event-main-title">{{ $event->event_name }}</h3>
                            <div class="event-top-info-status">
                                <span class="event-type-name"><i class="fa-solid fa-location-dot"></i>{{ $event->venue }}</span>
                                <span class="event-type-name details-hr"> <b>Starts on : </b> <span class="ev-event-date">{{ $event->date }} , <b>Date : </b>  {{ $event->time }} AM</span></span>
                                <span class="event-type-name details-hr">{{ $event->duration }} <b>h</b></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="main-event-dt">
                        <div class="event-img">
                            <img src="{{ asset('images/' . $event->image) }}" alt="">
                        </div>
                        <div class="share-save-btns dropdown">
                            <button class="sv-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Save</button>
                            <button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-share-nodes me-2"></i>Share</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook me-3"></i>Facebook</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter me-3"></i>Twitter</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-envelope me-3"></i>Email</a></li>
                            </ul>
                        </div>
                        <div class="main-event-content">
                            <h4>About This Event</h4>
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="main-card event-right-dt">
                        <div class="bp-title">
                            <h4>Event Details</h4>
                        </div>
                        <div class="time-left">
                            <div class="countdown">
                                <div class="countdown-item">
                                    <span id="day"></span>days
                                </div>
                                <div class="countdown-item">
                                    <span id="hour"></span>Hours
                                </div>
                                <div class="countdown-item">
                                    <span id="minute"></span>Minutes
                                </div>
                                <div class="countdown-item">
                                    <span id="second"></span>Seconds
                                </div>
                            </div>
                        </div>
                        <div class="event-dt-right-group mt-5">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Organised by</h4>
                                {{-- <h5>{{ $event->firstName }} {{ $event->lastName }}</h5> --}}
								{{ $event->firstName }} {{ $event->lastName }}
                                <a href="attendee_profile_view.html">View Profile</a>
                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-calendar-day"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Date and Time</h4>
                                <h5> Date : {{ $event->date }} , Time : {{ $event->time }} AM</h5>
                                <div class="add-to-calendar">
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa-brands fa-windows me-3"></i>Outlook</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-brands fa-apple me-3"></i>Apple</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-brands fa-google me-3"></i>Google</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="event-dt-right-group">
                            <div class="event-dt-right-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="event-dt-right-content">
                                <h4>Location</h4>
                                <h5 class="mb-0">{{ $event->venue }}</h5>
                                <a href="#"><i class="fa-solid fa-location-dot me-2"></i>View Map</a>
                            </div>
                        </div>
                        <div class="select-tickets-block">
                            {{-- <h6>Price Tickets  </h6>
                            <div class="select-ticket-action">
                                <div class="ticket-price"><b>Totale :</b> {{ $event->price }} Dhs</div>
                                <div class="quantity">
                                    <div class="counter">
                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                        <input type="text" value="0">
                                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="xtotel-tickets-count">
                                <div class="x-title">Totale :</div>
                                <h4>Montent : <span>{{ $event->price }} Dhs</span></h4>
                            </div>
                        </div>
                        <div class="booking-btn">
                            <a href="{{ route('achat.show', ['id'=>$event->id])}}" class="main-btn btn-hover w-100"> Confirme Now</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Body End-->
@endsection
