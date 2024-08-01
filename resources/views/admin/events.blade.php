@extends('admin_layout.mastrAdmin')

@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-calendar-days me-3"></i>Events</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center align-self-center">
                                    <h5>Events (<span style="color: rgb(7, 182, 4);">{{ $eventCount }}</span>)</h5>
                                    <!-- Formulaire de recherche -->
                                    <form method="GET" action="{{ route('events') }}">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-outline-success" type="submit" id="button-addon1"><i class="fa fa-search"></i></button>
                                            <input type="text" class="form-control" placeholder="Search by event name" type="text" name="search" value="{{ request('search') }}">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach($events as $event)
                            <div class="event-list">
                            <div class="tab-content">
                                <!--start list event's-->
                                <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{asset('images/'. $event->image) }}" alt="">
                                                    </div>
                                                    <div class="card-event-dt p-2">
                                                        <h5><span style="color: rgb(106, 192, 69)">Title Event :</span> {{ $event->event_name }}</h5>
                                                    </div>
                                                </div>
                                                <div class="card-event-dt p-2">
                                                    <h6><span style="color: rgb(106, 192, 69)">Creat by :</span> {{ $event->user_firstName }} {{ $event->user_lastName }}</h6>
                                                    <h6><span style="color: rgb(106, 192, 69)">Email :</span> {{ $event->user_email }}</h6>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{url('/events/'.$event->id.'/modify-Events')}}" class="dropdown-item"><i class="fa-solid fa-gear me-3"></i>Modify Event</a>
                                                        <a href="#" class="dropdown-item" data-event-id="{{ $event->id }}" onclick="showEventDetails(this)">
                                                            <i class="fa-solid fa-eye me-3"></i>Preview Event
                                                        </a>
                                                        
                                                        <a href="{{url('/events/'.$event->id.'/delete-Events')}}" class="dropdown-item delete-event"><i class="fa-solid fa-trash-can me-3"></i> Delete Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box ">
                                                    <span class="icon">
                                                        <i class="fa-solid bi bi-cash-coin"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.3 1.3 0 0 0-.37.265.3.3 0 0 0-.057.09V14l.002.008.016.033a.6.6 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.6.6 0 0 0 .146-.15l.015-.033L12 14v-.004a.3.3 0 0 0-.057-.09 1.3 1.3 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465s-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411"/>
                                                          </svg>
                                                    </span>
                                                    <p>City</p>
                                                    <h6 class="coupon-status">{{ $event->city }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid bi bi-cash-coin"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2"/>
                                                            <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a13 13 0 0 1 1.313-.805h.632z"/>
                                                          </svg>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">{{ $event->date }} {{ $event->time }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid bi bi-cash-coin"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
                                                            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5m0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5M4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1"/>
                                                          </svg>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">{{ $event->total_ticket }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid bi bi-cash-coin"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                                          </svg>
                                                    </span>
                                                    <p>Ticket Price</p>
                                                    <h6 class="coupon-status">{{ $event->price }} DHs</h6>
                                                </div>
                                            </div>
                                            <div class="btncostum">
                                                <a href="{{url('events/'.$event->id)}}" class="btn btn-{{ $event->Status ? 'success' : 'danger' }} btAct">
                                                    {{ $event->Status ? 'Is Work' : 'Is Stop' }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End list event's-->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var eventsData = @json($events->keyBy('id'));
    </script>    
<!-- Modal -->
<div class="modal fade" id="viewevent" tabindex="-1" aria-labelledby="vieweventLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="vieweventLabel">Event Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Event Name:</strong> <span id="modalEventName"></span></p>
          <p><strong>Category:</strong> <span id="modalCategory"></span></p>
          <p><strong>Date:</strong> <span id="modalDate"></span></p>
          <p><strong>Time:</strong> <span id="modalTime"></span></p>
          <p><strong>Duration:</strong> <span id="modalDuration"></span></p>
          <p><strong>Description:</strong> <span id="modalDescription"></span></p>
          <p><strong>Venue:</strong> <span id="modalVenue"></span></p>
          <p><strong>Address:</strong> <span id="modalAddress"></span></p>
          <p><strong>Country:</strong> <span id="modalCountry"></span></p>
          <p><strong>City:</strong> <span id="modalCity"></span></p>
          <p><strong>State:</strong> <span id="modalState"></span></p>
          <p><strong>ZIP:</strong> <span id="modalZip"></span></p>
          <p><strong>Ticket Name:</strong> <span id="modalTicketName"></span></p>
          <p><strong>Price:</strong> <span id="modalPrice"></span></p>
          <p><strong>Total Tickets:</strong> <span id="modalTotalTickets"></span></p>
          <p><h3 class="imgpop">Image:</h3> <span id="modalType"></span></p>
          <img id="modalImage" src="" alt="Event Image" style="width: 100%; height: auto;">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-popup" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
@endsection

<script>
    function showEventDetails(button) {
      var eventId = button.getAttribute('data-event-id');
      var event = eventsData[eventId];
  
      if (event) {
        document.getElementById('modalEventName').textContent = event.event_name;
        document.getElementById('modalCategory').textContent = event.category;
        document.getElementById('modalDate').textContent = event.date;
        document.getElementById('modalTime').textContent = event.time;
        document.getElementById('modalDuration').textContent = event.duration;
        document.getElementById('modalDescription').textContent = event.description;
        document.getElementById('modalVenue').textContent = event.venue;
        document.getElementById('modalAddress').textContent = event.address;
        document.getElementById('modalCountry').textContent = event.country;
        document.getElementById('modalCity').textContent = event.city;
        document.getElementById('modalState').textContent = event.state;
        document.getElementById('modalZip').textContent = event.zip;
        document.getElementById('modalTicketName').textContent = event.ticket_name;
        document.getElementById('modalPrice').textContent = event.price;
        document.getElementById('modalTotalTickets').textContent = event.total_ticket;
        document.getElementById('modalImage').src = '/images/' + event.image;
  
        // Afficher la modal
        var viewEventModal = new bootstrap.Modal(document.getElementById('viewevent'));
        viewEventModal.show();
      }
    }
  </script>
  
