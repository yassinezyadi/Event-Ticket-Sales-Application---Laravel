@extends('client_layout.master')

@section('content')


<!-- Create Single Ticket Model Start-->
<div class="modal fade" id="singleTicketModal" tabindex="-1" aria-labelledby="singleTicketModalLabel"
    aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="singleTicketModalLabel">Create Ticket</h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="uil uil-multiply"></i></button>
            </div>
            <div class="modal-body">
                <div class="model-content main-form">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Ticket Name*</label>
                                <input class="form-control h_40" type="text" id = "ticket_name" placeholder="Event Ticket Name" value="">
                            </div>
                            <div class="form-group mt-4">
                                <label class="form-label">Ticket Price*</label>
                                <input class="form-control h_40" type="number" min="0"  id = "ticket_price" max="10000" required=""
                                    placeholder="Price" value="">
                            </div>
                            <div class="form-group mt-4">
                                <label class="form-label">Total number of tickets available*</label>
                                <input class="form-control h_40" id="ticketInput" type="number" id = "ticket_number" min="0" max="200"
                                    placeholder="Enter Total Tickets">
                            </div>
                         
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                    data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="saveTicketBtn" class="main-btn min-width btn-hover h_40">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Create Single Ticket Model End-->
<!-- Body Start-->
<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event-dt-block p-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="main-title text-center">
                        <h3>Create Event</h3>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="wizard-steps-block">
                        <div id="add-event-tab" class="step-app">
                            <ul class="step-steps">
                                <li class="active">
                                    <a href="#tab_step1">
                                        <span class="number"></span>
                                        <span class="step-name">Details</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab_step2">
                                        <span class="number"></span>
                                        <span class="step-name">Tickets</span>
                                    </a>
                                </li>

                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel step-tab-info active" id="tab_step1">
                                    <div class="tab-from-content">
                                        <div class="main-card">
                                            <div class="bp-title">
                                                <h4><i class="fa-solid fa-circle-info step_icon me-3"></i>Details</h4>
                                            </div>
                                            <div class="p-4 bp-form main-form">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group border_bottom pb_30">
                                                            <label class="form-label fs-16">Give your event a
                                                                name.*</label>
                                                            <input class="form-control h_50" type="text"
                                                                placeholder="Enter event name here" id="eventName"
                                                                value="">
                                                        </div>
                                                        <div class="form-group border_bottom pt_30 pb_30">
                                                            <label class="form-label fs-16">Choose a category for your
                                                                event.*</label>
                                                            <select class="selectpicker"
                                                                data-selected-text-format="count > 4" data-size="5"
                                                                title="Select category" id="eventCategory"
                                                                data-live-search="true">
                                                                <option value="art">Arts</option>
                                                                <option value="business">Business</option>
                                                                <option value="concert">Concert</option>
                                                                <option value="workshops">Workshops</option>
                                                                <option value="coaching&consulting">Coaching and Consulting</option>
                                                                <option value="health&wellbeing">Health and Wellbeing</option>
                                                                <option value="volunteer">Volunteer</option>
                                                                <option value="sports">Sports</option>
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group border_bottom pt_30 pb_30">
                                                            <label class="form-label fs-16">When is your event?*</label>
                                                            <div class="row g-2">
                                                                <div class="col-md-6">
                                                                    <label class="form-label mt-3 fs-6">Event
                                                                        Date.*</label>
                                                                    <input type="date" class="form-control h_50" id="eventDatePicker" required>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="row g-2">
                                                                        <div class="col-md-6">
                                                                            <div class="clock-icon">
                                                                                <label
                                                                                    class="form-label mt-3 fs-6">Time</label>
                                                                                <select class="selectpicker"
                                                                                    data-size="5"
                                                                                    data-live-search="true"
                                                                                    id="eventTime">
                                                                                    <option value="00:00">12:00 AM
                                                                                    </option>
                                                                                    <option value="00:15">12:15 AM
                                                                                    </option>
                                                                                    <option value="00:30">12:30 AM
                                                                                    </option>
                                                                                    <option value="00:45">12:45 AM
                                                                                    </option>
                                                                                    <option value="01:00">01:00 AM
                                                                                    </option>
                                                                                    <option value="01:15">01:15 AM
                                                                                    </option>
                                                                                    <option value="01:30">01:30 AM
                                                                                    </option>
                                                                                    <option value="01:45">01:45 AM
                                                                                    </option>
                                                                                    <option value="02:00">02:00 AM
                                                                                    </option>
                                                                                    <option value="02:15">02:15 AM
                                                                                    </option>
                                                                                    <option value="02:30">02:30 AM
                                                                                    </option>
                                                                                    <option value="02:45">02:45 AM
                                                                                    </option>
                                                                                    <option value="03:00">03:00 AM
                                                                                    </option>
                                                                                    <option value="03:15">03:15 AM
                                                                                    </option>
                                                                                    <option value="03:30">03:30 AM
                                                                                    </option>
                                                                                    <option value="03:45">03:45 AM
                                                                                    </option>
                                                                                    <option value="04:00">04:00 AM
                                                                                    </option>
                                                                                    <option value="04:15">04:15 AM
                                                                                    </option>
                                                                                    <option value="04:30">04:30 AM
                                                                                    </option>
                                                                                    <option value="04:45">04:45 AM
                                                                                    </option>
                                                                                    <option value="05:00">05:00 AM
                                                                                    </option>
                                                                                    <option value="05:15">05:15 AM
                                                                                    </option>
                                                                                    <option value="05:30">05:30 AM
                                                                                    </option>
                                                                                    <option value="05:45">05:45 AM
                                                                                    </option>
                                                                                    <option value="06:00">06:00 AM
                                                                                    </option>
                                                                                    <option value="06:15">06:15 AM
                                                                                    </option>
                                                                                    <option value="06:30">06:30 AM
                                                                                    </option>
                                                                                    <option value="06:45">06:45 AM
                                                                                    </option>
                                                                                    <option value="07:00">07:00 AM
                                                                                    </option>
                                                                                    <option value="07:15">07:15 AM
                                                                                    </option>
                                                                                    <option value="07:30">07:30 AM
                                                                                    </option>
                                                                                    <option value="07:45">07:45 AM
                                                                                    </option>
                                                                                    <option value="08:00">08:00 AM
                                                                                    </option>
                                                                                    <option value="08:15">08:15 AM
                                                                                    </option>
                                                                                    <option value="08:30">08:30 AM
                                                                                    </option>
                                                                                    <option value="08:45">08:45 AM
                                                                                    </option>
                                                                                    <option value="09:00">09:00 AM
                                                                                    </option>
                                                                                    <option value="09:15">09:15 AM
                                                                                    </option>
                                                                                    <option value="09:30">09:30 AM
                                                                                    </option>
                                                                                    <option value="09:45">09:45 AM
                                                                                    </option>
                                                                                    <option value="10:00"
                                                                                        selected="selected">10:00 AM
                                                                                    </option>
                                                                                    <option value="10:15">10:15 AM
                                                                                    </option>
                                                                                    <option value="10:30">10:30 AM
                                                                                    </option>
                                                                                    <option value="10:45">10:45 AM
                                                                                    </option>
                                                                                    <option value="11:00">11:00 AM
                                                                                    </option>
                                                                                    <option value="11:15">11:15 AM
                                                                                    </option>
                                                                                    <option value="11:30">11:30 AM
                                                                                    </option>
                                                                                    <option value="11:45">11:45 AM
                                                                                    </option>
                                                                                    <option value="12:00">12:00 PM
                                                                                    </option>
                                                                                    <option value="12:15">12:15 PM
                                                                                    </option>
                                                                                    <option value="12:30">12:30 PM
                                                                                    </option>
                                                                                    <option value="12:45">12:45 PM
                                                                                    </option>
                                                                                    <option value="13:00">01:00 PM
                                                                                    </option>
                                                                                    <option value="13:15">01:15 PM
                                                                                    </option>
                                                                                    <option value="13:30">01:30 PM
                                                                                    </option>
                                                                                    <option value="13:45">01:45 PM
                                                                                    </option>
                                                                                    <option value="14:00">02:00 PM
                                                                                    </option>
                                                                                    <option value="14:15">02:15 PM
                                                                                    </option>
                                                                                    <option value="14:30">02:30 PM
                                                                                    </option>
                                                                                    <option value="14:45">02:45 PM
                                                                                    </option>
                                                                                    <option value="15:00">03:00 PM
                                                                                    </option>
                                                                                    <option value="15:15">03:15 PM
                                                                                    </option>
                                                                                    <option value="15:30">03:30 PM
                                                                                    </option>
                                                                                    <option value="15:45">03:45 PM
                                                                                    </option>
                                                                                    <option value="16:00">04:00 PM
                                                                                    </option>
                                                                                    <option value="16:15">04:15 PM
                                                                                    </option>
                                                                                    <option value="16:30">04:30 PM
                                                                                    </option>
                                                                                    <option value="16:45">04:45 PM
                                                                                    </option>
                                                                                    <option value="17:00">05:00 PM
                                                                                    </option>
                                                                                    <option value="17:15">05:15 PM
                                                                                    </option>
                                                                                    <option value="17:30">05:30 PM
                                                                                    </option>
                                                                                    <option value="17:45">05:45 PM
                                                                                    </option>
                                                                                    <option value="18:00">06:00 PM
                                                                                    </option>
                                                                                    <option value="18:15">06:15 PM
                                                                                    </option>
                                                                                    <option value="18:30">06:30 PM
                                                                                    </option>
                                                                                    <option value="18:45">06:45 PM
                                                                                    </option>
                                                                                    <option value="19:00">07:00 PM
                                                                                    </option>
                                                                                    <option value="19:15">07:15 PM
                                                                                    </option>
                                                                                    <option value="19:30">07:30 PM
                                                                                    </option>
                                                                                    <option value="19:45">07:45 PM
                                                                                    </option>
                                                                                    <option value="20:00">08:00 PM
                                                                                    </option>
                                                                                    <option value="20:15">08:15 PM
                                                                                    </option>
                                                                                    <option value="20:30">08:30 PM
                                                                                    </option>
                                                                                    <option value="20:45">08:45 PM
                                                                                    </option>
                                                                                    <option value="21:00">09:00 PM
                                                                                    </option>
                                                                                    <option value="21:15">09:15 PM
                                                                                    </option>
                                                                                    <option value="21:30">09:30 PM
                                                                                    </option>
                                                                                    <option value="21:45">09:45 PM
                                                                                    </option>
                                                                                    <option value="22:00">10:00 PM
                                                                                    </option>
                                                                                    <option value="22:15">10:15 PM
                                                                                    </option>
                                                                                    <option value="22:30">10:30 PM
                                                                                    </option>
                                                                                    <option value="22:45">10:45 PM
                                                                                    </option>
                                                                                    <option value="23:00">11:00 PM
                                                                                    </option>
                                                                                    <option value="23:15">11:15 PM
                                                                                    </option>
                                                                                    <option value="23:30">11:30 PM
                                                                                    </option>
                                                                                    <option value="23:45">11:45 PM
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label
                                                                                class="form-label mt-3 fs-6">Duration</label>
                                                                            <select class="selectpicker" data-size="5"
                                                                                data-live-search="true"
                                                                                id="eventDuration">
                                                                                <option value="15">15m</option>
                                                                                <option value="30">30m</option>
                                                                                <option value="45">45m</option>
                                                                                <option value="60" selected="selected">
                                                                                    1h</option>
                                                                                <option value="75">1h 15m</option>
                                                                                <option value="90">1h 30m</option>
                                                                                <option value="105">1h 45m</option>
                                                                                <option value="120">2h</option>
                                                                                <option value="135">2h 15m</option>
                                                                                <option value="150">2h 30m</option>
                                                                                <option value="165">2h 45m</option>
                                                                                <option value="180">3h</option>
                                                                                <option value="195">3h 15m</option>
                                                                                <option value="210">3h 30m</option>
                                                                                <option value="225">3h 45m</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group pt_30 pb_30">
                                                            <label class="form-label fs-16">Add a few images to your
                                                                event banner.</label>
                                                            <p class="mt-2 fs-14 d-block mb-3 pe_right">Upload colorful
                                                                and vibrant images as the banner for your event! See how
                                                                beautiful images help your event details page. <a
                                                                    href="#" class="a-link">Learn more</a></p>
                                                            <div class="content-holder mt-4">
                                                                <div class="default-event-thumb">
                                                                    <div class="default-event-thumb-btn">
                                                                        <div class="thumb-change-btn">
                                                                            <input type="file" id="thumb-img" accept="image/*">
                                                                            <label for="thumb-img">Change Image</label>
                                                                        </div>
                                                                    </div>
                                                                    <img src="{{ asset('assets/images/banners/custom-img.jpg') }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group border_bottom pb_30">
                                                            <label class="form-label fs-16">Please describe your
                                                                event.</label>
                                                            <div class="mt-4">
                                                                <textarea id="eventDescription" class="form-control"
                                                                    rows="5"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group pt_30 pb-2">
                                                            <label class="form-label fs-16">Where is your event taking
                                                                place? *</label>

                                                            <div class="stepper-data-set">
                                                                <div class="content-holder template-selector">
                                                                    <div class="row g-4">

                                                                        <div class="col-md-12">
                                                                            <div class="form-group mt-1">
                                                                                <label
                                                                                    class="form-label fs-6">Venue*</label>
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder="" value=""
                                                                                    id="eventVenue">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label fs-6">Address
                                                                                    *</label>
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder="" value=""
                                                                                    id="eventAddress">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group main-form mt-1">
                                                                                <label
                                                                                    class="form-label">Country*</label>
                                                                                <select class="selectpicker"
                                                                                    data-size="5"
                                                                                    title="Nothing selected"
                                                                                    data-live-search="true"
                                                                                    id="eventCountry">
                                                                                    <option value="Algeria">Algeria
                                                                                    </option>
                                                                                    <option value="Argentina">Argentina
                                                                                    </option>
                                                                                    <option value="Australia"
                                                                                        selected="">Australia</option>
                                                                                    <option value="Austria">Austria
                                                                                        (Österreich)</option>
                                                                                    <option value="Belgium">Belgium
                                                                                        (België)</option>
                                                                                    <option value="Bolivia">Bolivia
                                                                                    </option>
                                                                                    <option value="Brazil">Brazil
                                                                                    </option>
                                                                                    <option value="Canada">Canada
                                                                                    </option>
                                                                                    <option value="Chile">Chile</option>
                                                                                    <option value="Colombia">Colombia
                                                                                    </option>
                                                                                    <option value="Costa Rica">Costa
                                                                                        Rica</option>
                                                                                    <option value="Cyprus">Cyprus
                                                                                    </option>
                                                                                    <option value="Czech Republic">Czech
                                                                                        Republic</option>
                                                                                    <option value="Denmark">Denmark
                                                                                    </option>
                                                                                    <option value="Dominican Republic">
                                                                                        Dominican Republic</option>
                                                                                    <option value="Estonia">Estonia
                                                                                    </option>
                                                                                    <option value="Finland">Finland
                                                                                    </option>
                                                                                    <option value="France">France
                                                                                    </option>
                                                                                    <option value="Germany">Germany
                                                                                    </option>
                                                                                    <option value="Greece">Greece
                                                                                    </option>
                                                                                    <option value="Hong Kong">Hong Kong
                                                                                    </option>
                                                                                    <option value="Iceland">Iceland
                                                                                    </option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="Indonesia">Indonesia
                                                                                    </option>
                                                                                    <option value="Ireland">Ireland
                                                                                    </option>
                                                                                    <option value="Israel">Israel
                                                                                    </option>
                                                                                    <option value="Italy">Italy</option>
                                                                                    <option value="Japan">Japan</option>
                                                                                    <option value="Latvia">Latvia
                                                                                    </option>
                                                                                    <option value="Lithuania">Lithuania
                                                                                    </option>
                                                                                    <option value="Luxembourg">
                                                                                        Luxembourg</option>
                                                                                    <option value="Malaysia">Malaysia
                                                                                    </option>
                                                                                    <option value="Mexico">Mexico
                                                                                    </option>
                                                                                    <option value="Morocco">Morocco
                                                                                    </option>
                                                                                    <option value="Nepal">Nepal</option>
                                                                                    <option value="Netherlands">
                                                                                        Netherlands</option>
                                                                                    <option value="New Zealand">New
                                                                                        Zealand</option>
                                                                                    <option value="Norway">Norway
                                                                                    </option>
                                                                                    <option value="Paraguay">Paraguay
                                                                                    </option>
                                                                                    <option value="Peru">Peru</option>
                                                                                    <option value="Philippines">
                                                                                        Philippines</option>
                                                                                    <option value="Poland">Poland
                                                                                    </option>
                                                                                    <option value="Portugal">Portugal
                                                                                    </option>
                                                                                    <option value="Singapore">Singapore
                                                                                    </option>
                                                                                    <option value="Slovakia">Slovakia
                                                                                    </option>
                                                                                    <option value="Slovenia">Slovenia
                                                                                    </option>
                                                                                    <option value="South Africa">South
                                                                                        Africa</option>
                                                                                    <option value="South Korea">South
                                                                                        Korea</option>
                                                                                    <option value="Spain">Spain</option>
                                                                                    <option value="Sweden">Sweden
                                                                                    </option>
                                                                                    <option value="Switzerland">
                                                                                        Switzerland</option>
                                                                                    <option value="Tanzania">Tanzania
                                                                                    </option>
                                                                                    <option value="Thailand">Thailand
                                                                                    </option>
                                                                                    <option value="Turkey">Turkey
                                                                                    </option>
                                                                                    <option value="United Kingdom">
                                                                                        United Kingdom</option>
                                                                                    <option value="United States">United
                                                                                        States</option>
                                                                                    <option value="Vietnam">Vietnam
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label">State*</label>
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder=""
                                                                                    value="Victoria" id="eventState">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <div class="form-group mt-1">
                                                                                <label
                                                                                    class="form-label">City/Suburb*</label>
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder=""
                                                                                    value="Melbourne" id="eventCity">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <div class="form-group mt-1">
                                                                                <label class="form-label">Zip/Post
                                                                                    Code*</label>
                                                                                <input class="form-control h_50"
                                                                                    type="text" placeholder=""
                                                                                    value="3000" id="eventZip">
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
                                    </div>
                                </div>

                                <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                    <div class="tab-from-content">
                                        <div class="main-card">
                                            <div class="bp-title">
                                                <h4><i class="fa-solid fa-ticket step_icon me-3"></i>Tickets</h4>
                                            </div>
                                            <div class="bp-form main-form">
                                                <div class="p-4 form-group border_bottom pb_30">
                                                    <div class="">
                                                        <div class="ticket-section">
                                                            <label class="form-label fs-16">Let's create
                                                                tickets!</label>

                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between pt-4 pb-3 full-width">
                                                            <h3 class="fs-18 mb-0">Tickets (<span
                                                                    class="venue-event-ticket-counter">3</span>)</h3>
                                                            <div
                                                                class="dropdown dropdown-default dropdown-normal btn-ticket-type-top">
                                                                <a class="dropdown-toggle main-btn btn-hover h_40 pe-4 ps-4"
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#singleTicketModal">
                                                                    <i class="fa-solid fa-ticket me-2"></i>
                                                                    Add Ticket
                                                                </a>



                                                            </div>
                                                        </div>
                                                        <div class="ticket-type-item-empty d-none text-center p_30">
                                                            <div class="ticket-list-icon d-inline-block">
                                                                <img src="{{asset('assets/images/ticket.png')}}" alt="">
                                                            </div>

                                                        </div>
                                                        <div class="ticket-type-item-list mt-4" style="display: none;">
                                                            <!-- Placeholder for ticket cards -->
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="step-footer step-tab-pager mt-4">
                                <button data-direction="prev"
                                    class="btn btn-default btn-hover steps_btn">Previous</button>
                                <button data-direction="next" class="btn btn-default btn-hover steps_btn">Next</button>
                                
                                <button data-direction="finish"  
                                    class="btn btn-default btn-hover steps_btn">Create</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection