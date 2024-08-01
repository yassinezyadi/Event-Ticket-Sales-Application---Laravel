<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2024 22:51:20 GMT -->


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Barren - Simple Online Event Ticketing System</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/fav.png')}}">

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{asset('assets/vendor/unicons-2.0.1/css/unicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-steps.css')}}" rel="stylesheet">


    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/night-mode.css')}}" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="{{asset('assets/vendor/ckeditor5/sample/css/sample.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/OwlCarousel/assets/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">



</head>

<body class="d-flex flex-column h-100">



    @include('client_layout.header')

    @yield('content')

    @include('client_layout.footer')

    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/mixitup/dist/mixitup.min.js')}}"></script>
    <script src="{{asset('assets/vendor/ckeditor5/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/jquery-steps.min.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/i18n/datepicker.en.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/OwlCarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/night-mode.js')}}"></script>
    <script src="{{asset('assets/js/jquery-steps.min.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.min.js')}}"></script>



    <script>
    var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

    var mixer = mixitup(containerEl, {
        selectors: {
            target: '[data-ref~="mixitup-target"]'
        }
    });
    </script>
    <script>
    ClassicEditor
        .create(document.querySelector('#pd_editor'), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
    </script>



    <script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#add-event-tab').steps({
            onFinish: function() {
                // Get form input elements using document.getElementById
                var eventName = document.getElementById('eventName').value.trim();
                var eventDate = document.getElementById('eventDatePicker').value.trim();
                var eventCategory = document.getElementById('eventCategory').value.trim();
                var eventTime = document.getElementById('eventTime').value.trim();
                var eventDuration = document.getElementById('eventDuration').value.trim();
                var eventDescription = document.getElementById('eventDescription').value.trim();
                var eventVenue = document.getElementById('eventVenue').value.trim();
                var eventAddress = document.getElementById('eventAddress').value.trim();
                var eventCountry = document.getElementById('eventCountry').value.trim();
                var eventState = document.getElementById('eventState').value.trim();
                var eventCity = document.getElementById('eventCity').value.trim();
                var eventZip = document.getElementById('eventZip').value.trim();
                var ticketName = document.querySelector("input[placeholder='Event Ticket Name']").value.trim();
                var ticketTotal = document.getElementById('ticketInput').value.trim();
                var ticketPrice = document.querySelector("input[placeholder='Price']").value.trim();

                // Create FormData object and append form data
                var formData = new FormData();
                formData.append('_token', document.querySelector('meta[name="csrf-token"]')
                    .getAttribute('content'));
                formData.append('eventName', eventName);
                formData.append('eventDate', eventDate);
                formData.append('eventCategory', eventCategory);
                formData.append('eventTime', eventTime);
                formData.append('eventDuration', eventDuration);
                formData.append('eventDescription', eventDescription);
                formData.append('eventVenue', eventVenue);
                formData.append('eventAddress', eventAddress);
                formData.append('eventCountry', eventCountry);
                formData.append('eventState', eventState);
                formData.append('eventCity', eventCity);
                formData.append('eventZip', eventZip);
                formData.append('ticket[name]', ticketName);

                formData.append('ticket[total]', ticketTotal);
                formData.append('ticket[price]', ticketPrice);

                // Append image file if selected
                var imageFile = document.getElementById('thumb-img').files[0];
                if (imageFile) {
                    formData.append('image', imageFile);
                }

                // Send data to the controller using AJAX
                $.ajax({
                    url: '{{ route('create_event') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert('Event created successfully!');
                        window.location.href = '{{ route('explore_events') }}';
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error occurred while sending data to the controller.');
                    }
                });
            }
        });

        // Event listener for the image input
        document.getElementById('thumb-img').addEventListener('change', function(event) {
            var defaultEventThumbImg = document.querySelector('.default-event-thumb img');
            var file = event.target.files[0]; // Get the selected file
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    defaultEventThumbImg.src = e.target.result; // Update the image source
                };
                reader.readAsDataURL(file); // Read the file as a data URL
            }
        });
    });
    </script>




    <script>
    function applyResponsiveStyles() {
        var element = document.querySelector('.step-steps');
        if (window.innerWidth <= 768) {
            element.style.marginLeft = '6.5rem';
        } else {
            element.style.marginLeft = '16rem';
        }
    }


    // Apply styles on page load
    applyResponsiveStyles();

    // Apply styles on window resize
    window.addEventListener('resize', applyResponsiveStyles);
    </script>

    <script>
    document.getElementById('ticketInput').addEventListener('input', function() {
        if (this.value > 1000) {
            this.value = 1000;
        }
    });
    </script>



    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var saveTicketBtn = document.getElementById("saveTicketBtn");
        var eventDatePicker = document.getElementById("eventDatePicker");
        var eventName = document.getElementById("eventName");
        var eventCategory = document.getElementById("eventCategory");
        var eventTime = document.getElementById("eventTime");
        var eventDuration = document.getElementById("eventDuration");
        var thumbImgInput = document.getElementById("thumb-img"); // Get the image input element
        var defaultEventThumbImg = document.querySelector(
            ".default-event-thumb img"); // Get the image element to be updated

        // Event listener for the image input
        thumbImgInput.addEventListener("change", function(event) {
            var file = event.target.files[0]; // Get the selected file
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    defaultEventThumbImg.src = e.target.result; // Update the image source
                };
                reader.readAsDataURL(file); // Read the file as a data URL
            }
        });

        var eventDescription = document.getElementById("eventDescription");
        var eventVenue = document.getElementById("eventVenue");
        var eventAddress = document.getElementById("eventAddress");
        var eventCountry = document.getElementById("eventCountry");
        var eventState = document.getElementById("eventState");
        var eventCity = document.getElementById("eventCity");
        var eventZip = document.getElementById("eventZip");

        // Get the modal element
        var singleTicketModal = new bootstrap.Modal(document.getElementById('singleTicketModal'));

        // Save Ticket Button functionality
        saveTicketBtn.addEventListener("click", function() {
            var selectedDateValue = eventDatePicker.value.trim();
            var ticketName = document.querySelector("#singleTicketModal input[placeholder='Event Ticket Name']").value.trim();
            var ticketPrice = document.querySelector("#singleTicketModal input[placeholder='Price']").value.trim();
            var totalTickets = document.getElementById("ticketInput").value.trim();
            var ticketTypeList = document.querySelector(".ticket-type-item-list");

            // Check if there are already 1 ticket in the list
            if (ticketTypeList.children.length >= 1) {
                alert("You can only add a maximum of 1 ticket.");
                return;
            }

            if (ticketName && ticketPrice && totalTickets && selectedDateValue) {
                var newTicketCard = document.createElement("div");
                newTicketCard.classList.add("price-ticket-card");
                newTicketCard.innerHTML = `
                <div class="price-ticket-card-head d-md-flex flex-wrap align-items-start justify-content-between position-relative p-4">
                    <div class="d-flex align-items-center top-name">
                        <div class="icon-box">
                            <span class="icon-big rotate-icon icon icon-purple"><i class="fa-solid fa-ticket"></i></span>
                            <h5 class="fs-16 mb-1 mt-1">${ticketName}</h5>
                            <p class="text-gray-50 m-0"><span id="selectedDate" class="visitor-date-time">${selectedDateValue}</span></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="price-badge">
                            <img src="images/discount.png" alt="">
                        </div>
                        <a href="#" class="dropdown-item delete-ticket"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
                    </div>
                </div>
                <div class="price-ticket-card-body border_top p-4">
                    <div class="full-width d-flex flex-wrap justify-content-between align-items-center">
                        <div class="icon-box">
                            <div class="icon me-3"><i class="fa-solid fa-ticket"></i></div>
                            <span class="text-145">Total tickets</span>
                            <h6 class="coupon-status">${totalTickets}</h6>
                        </div>
                        <div class="icon-box">
                            <div class="icon me-3"><i class="fa-solid fa-dollar"></i></div>
                            <span class="text-145">Price</span>
                            <h6 class="coupon-status">${ticketPrice} Dhs</h6>
                        </div>
                    </div>
                </div>
            `;
                ticketTypeList.appendChild(newTicketCard);
                // Show the ticket type list
                ticketTypeList.style.display = "block";

                // Hide the modal
                singleTicketModal.hide();
            } else {
                alert("Please fill in all required fields and select a date.");
            }
        });
        // Event delegation for delete tickets
        document.querySelector(".ticket-type-item-list").addEventListener("click", function(event) {
            if (event.target.closest(".delete-ticket")) {
                var ticketCard = event.target.closest(".price-ticket-card");
                if (ticketCard) {
                    ticketCard.remove();
                }
            }
        });
    });
    </script>

</body>
</html>