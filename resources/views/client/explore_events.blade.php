@extends('client_layout.master')

@section('content')
    <!-- Body Start-->
    <div class="wrapper">
        <div class="hero-banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="hero-banner-content">
                            <h2>Discover Events For All The Things You Love</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">

                                <div class="controls">
                                    <a href="{{ route('explore_events') }}" class="control" data-filter="all">All</a>
                                    <a href="{{ route('events.filter', ['art']) }}" class="control">Arts</a>
                                    <a href="{{ route('events.filter', ['business']) }}" class="control">Business</a>
                                    <a href="{{ route('events.filter', ['concert']) }}" class="control">Concert</a>
                                    <a href="{{ route('events.filter', ['workshops']) }}" class="control">Workshops</a>
                                    <a href="{{ route('events.filter', ['coaching&consulting']) }}" class="control">Coaching
                                        and Consulting</a>
                                    <a href="{{ route('events.filter', ['health&wellbeing']) }}" class="control">Health and
                                        Wellbeing</a>
                                    <a href="{{ route('events.filter', ['volunteer']) }}" class="control">Volunteer</a>
                                    <a href="{{ route('events.filter', ['sports']) }}" class="control">Sports</a>

                            </div>
                            <div class="row" data-ref="event-filter-content">
                                @foreach ($events as $event)
                                    @if( $event->Status == 1)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness"
                                            data-ref="mixitup-target">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ route('venue_event_detail_view.show', ['id'=>$event->id])}}" class="thumbnail-img">
                                                        <img src="{{asset('images/'. $event->image) }}" alt="">
                                                    </a>
                                                    <span class="bookmark-icon" title="Bookmark"></span>
                                                </div>
                                                <div class="event-content">
                                                    <a href="{{ route('venue_event_detail_view.show', ['id'=>$event->id])}}"
                                                        class="event-title">{{$event ->event_name }}</a>
                                                    <div class="duration-price-remaining">
                                                        <span class="duration-price">{{$event->price }} DHs</span>
                                                        <span class="remaining"></span>
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i
                                                                    class="fa-solid fa-calendar-day me-2"></i>{{$event->date}}</span>
                                                            <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                            <span>{{ $event->time }}</span>
                                                        </div>
                                                        <span class="publish-time"><i
                                                                class="fa-solid fa-clock me-2"></i>{{ $event ->duration }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12 text-center">
                                        <div class="block-27">
                                            <ul style="list-style: none; padding: 0;">
                                                <li style="display: inline-block; margin-right: 5px;">
                                                    <a href="{{ $events->url(1) }}" aria-label="Previous"
                                                        style="text-decoration: none; color: #333;">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>

                                                @for ($i = 1; $i <= $events->lastPage(); $i++)
                                                    <li class="{{ ($events->currentPage() == $i) ? 'active' : '' }}"
                                                        style="display: inline-block; margin-right: 5px;">
                                                        <a href="{{ $events->url($i) }}"
                                                            style="text-decoration: none; color: {{ ($events->currentPage() == $i) ? '#fff' : '#333' }}; background-color: {{ ($events->currentPage() == $i) ? '#007bff' : 'transparent' }}; padding: 5px 10px; border-radius: 5px;">
                                                            {{ $i }}
                                                        </a>
                                                    </li>
                                                @endfor

                                                <li style="display: inline-block; margin-right: 5px;">
                                                    <a href="{{ $events->url($events->currentPage()+1) }}"
                                                        class="{{ ($events->currentPage() == $events->lastPage()) ? ' disabled' : '' }}"
                                                        style="text-decoration: none; color: #333;">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
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
    <!-- Body End-->
@endsection
