@extends('admin_layout.mastrAdmin')

@section('content')
    <div class="wrapper wrapper-body">
        <div class="col-md-11 ms-3">
            <div class="d-main-title">
                <h3><i class="fa-solid fa-user-group me-3"></i>Update Events</h3>
            </div>

        </div>

        <div class="col-lg-11">
            <div class="main-card mt-4 siz">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 order-lg-3">
                        <div class="contact-form bp-form p-lg-5 ps-lg-5 pt-lg-4 pb-5 p-4">
                            <form action="{{ route('events.update', $event->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row row-cols-ms-1">
                                    <div class="col-md-4 col-ms-12">
                                        <div class="form-group mt-4">
                                            <label class="form-label" for="image">Image Event*</label>
                                            <input class="form-control h_50" type="file" id="image" name="image" onchange="previewImage(event)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Title Event*</label>
                                            <input type="text" class="form-control h_50" id="title" name="title"
                                                value="{{ $event->event_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Ticket Name*</label>
                                            <input type="text" class="form-control h_50" id="ticketname"
                                                name="ticketname" value="{{ $event->ticket_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Ticket Price*</label>
                                            <input type="number" class="form-control h_50" id="ticketprice"
                                                name="ticketprice" value="{{ $event->price }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Total number of tickets available*</label>
                                            <input type="number" class="form-control h_50" id="tickettotal"
                                                name="tickettotal" value="{{ $event->total_ticket }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mt-4">
                                            <label class="form-label">Choose a category for your event.*</label>
                                            <select class="selectpicker" multiple=""
                                            data-selected-text-format="count > 4" data-size="5"
                                            title="Select category" id="eventCategory" data-live-search="true" name="category" required>
                                            <option selected>{{ $event->category }}</option>
                                            @foreach(['Arts', 'Business', 'Concert', 'Workshops', 
                                                      'Coaching and Consulting', 'Education and Training', 'Family and Friends', 
                                                      'Fashion and Beauty', 'Health and Wellbeing', 'Volunteer', 
                                                      'Sports', 'Hobbies and Interest', 
                                                      'Music and Theater', 'Religion and Spirituality', 'Science and Technology', 
                                                      'Sports', 'Travel and Outdoor', 'Visual Arts', 'Others'] 
                                                      as $category)
                                                <option value="{{ $category }}" @if($event->category == $category) selected @endif>{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <div class="form-group border_bottom pt_25 pb_25">
                                                <label class="form-label fs-16">When is your event?*</label>
                                                <div class="row g-2">
                                                    <div class="col-md-6">
                                                        <label class="form-label mt-3 fs-6">Event
                                                            Date.*</label>
                                                        <input type="date" class="form-control h_50" id="eventdate"
                                                            name="eventdate" value="{{ $event->date }}" required>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row g-2">
                                                            <div class="col-md-6">
                                                                <div class="clock-icon">
                                                                    <label class="form-label mt-3 fs-6">Time</label>
                                                                    <input type="time" class="form-control h_50" id="eventtime" name="eventtime" value="{{ $event->time }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label class="form-label mt-3 fs-6">Duration</label>
                                                                <input type="number" class="form-control h_50" id="duration" name="duration" value="{{ $event->duration }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <div class="form-group border_bottom pb_30">
                                                <label class="form-label fs-16">describe for
                                                    event.</label>
                                                <div class="mt-4">
                                                    <textarea class="form-control h_50" id="description" name="description" rows="5">{{ $event->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mt-4">
                                            <div class="form-group pt_30 pb-2">
                                                <label class="form-label fs-16">event place? **</label>
                                                <div class="stepper-data-set">
                                                    <div class="content-holder template-selector">
                                                        <div class="row g-4">

                                                            <div class="col-md-12">
                                                                <div class="form-group mt-1">
                                                                    <label class="form-label fs-6">Venue*</label>
                                                                    <input type="text" class="form-control h_50" id="venue" name="venue" value="{{ $event->venue }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="form-label fs-6">Address
                                                                        *</label>
                                                                        <input type="text" class="form-control h_50" id="address" name="address" value="{{ $event->address }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group main-form mt-1">
                                                                    <label class="form-label">Country*</label>
                                                                    <select class="selectpicker" data-size="5"
                                                                    title="Nothing selected" data-live-search="true"
                                                                    id="eventCountry" name="country" required>
                                                                    <option selected>{{ $event->country }}</option>
                                                                    @php
                                                                        $countries = [
                                                                            "Algeria", "Argentina", "Australia", "Austria", "Belgium", "Bolivia", "Brazil", "Canada", "Chile",
                                                                            "Colombia", "Costa Rica", "Cyprus", "Czech Republic", "Denmark", "Dominican Republic", "Estonia",
                                                                            "Finland", "France", "Germany", "Greece", "Hong Kong", "Iceland", "India", "Indonesia", "Ireland",
                                                                            "Israel", "Italy", "Japan", "Latvia", "Lithuania", "Luxembourg", "Malaysia", "Mexico", "Morocco",
                                                                            "Nepal", "Netherlands", "New Zealand", "Norway", "Paraguay", "Peru", "Philippines", "Poland", 
                                                                            "Portugal", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sweden",
                                                                            "Switzerland", "Tanzania", "Thailand", "Turkey", "United Kingdom", "United States", "Vietnam"
                                                                        ];
                                                                    @endphp
                                                                
                                                                    @foreach($countries as $country)
                                                                        <option value="{{ $country }}" @if($event->country == $country) selected @endif>{{ $country }}</option>
                                                                    @endforeach
                                                                </select>                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="form-label">State*</label>
                                                                    <input type="text" class="form-control h_50" id="state" name="state" value="{{ $event->state }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group mt-1">
                                                                    <label class="form-label">City/Suburb*</label>
                                                                    <input type="text" class="form-control h_50" id="city" name="city" value="{{ $event->city }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group mt-1">
                                                                    <label class="form-label">Zip/Post
                                                                        Code*</label>
                                                                        <input type="text" class="form-control h_50" id="zipcode" name="zipcode" value="{{ $event->zip }}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center mt-4">
                                            <button class="main-btn btn-hover h_50 w-100" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 order-lg-1 d-none d-xl-block">
                        <div class="contact-banner-block">
                            <div class="contact-hero-banner">
                                <div class="contact-hero-banner-info">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-md-5 order-md-1 imgh">
                                                    <h5 style="color:azure;">New Image</h5>
                                                    <svg id="svgPlaceholder"
                                                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                                        width="107" height="158" xmlns="http://www.w3.org/2000/svg"
                                                        role="img" aria-label="Placeholder: 500x500"
                                                        preserveAspectRatio="xMidYMid slice" focusable="false" style="border-radius:9px;">
                                                        <title>Placeholder</title>
                                                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)">
                                                        </rect>
                                                        <text x="30%" y="50%" fill="var(--bs-secondary-color)"
                                                            dy=".3em">Photo</text>
                                                    </svg>
                                                    <img class="card-img-top" id="imagePreview" src="#"
                                                        alt="Image Preview" style="display: none; border-radius:9px;" width="102" height="158">
                                                </div>
                                                <div class="col-md-5 order-md-1 imgh">
                                                    <h5>Old Image</h5>
                                                    @if($event->image)
                                                        <img class="card-img-top" id="imagePreview" src="{{asset('images/'. $event->image) }}"
                                                            alt="Image Preview" style="border-radius:9px;" width="102" height="158">
                                                    @else
                                                    <section class="dots-container">
                                                        <div class="dot"></div>
                                                        <div class="dot"></div>
                                                        <div class="dot"></div>
                                                        <div class="dot"></div>
                                                      </section>                                                      
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <h3>Organized by: <span style="color: rgb(255, 228, 255)">{{ $event->user->firstName }} {{ $event->user->lastName }}</span></h3>
                                            <p>Please double-check all of your modifications ✅</p>
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

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                var svgPlaceholder = document.getElementById('svgPlaceholder');
                svgPlaceholder.style.display = 'none';
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
