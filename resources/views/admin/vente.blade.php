@extends('admin_layout.mastrAdmin')

@section('content')
<div class="wrapper wrapper-body">
    <div class="dashboard-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-main-title">
                        <h3><i class="fa-solid fa-user-group me-3"></i>Liste des ventes</h3>
                    </div><br>
                </div>
                <div class="col-md-12">
                    <div class="conversion-setup">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
                                <div class="table-card mt-4">
                                    <div class="main-table">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col" class="text-center">First Name</th>
                                                        <th scope="col" class="text-center">Last Name</th>
                                                        <th scope="col" class="text-center">Phone</th>
                                                        <th scope="col" class="text-center">Email</th>
                                                        <th scope="col" class="text-center">Event Name</th>
                                                        <th scope="col" class="text-center">Price</th>
                                                        <th scope="col" class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($ventes as $vente)
                                                    <tr id="vente-{{ $vente->user_id }}"
                                                        data-id="{{ $vente->user_id }}"
                                                        data-first_name="{{ $vente->user_firstName }}"
                                                        data-last_name="{{ $vente->user_lastName }}"
                                                        data-phone="{{ $vente->user_phone }}"
                                                        data-email="{{ $vente->user_email }}"
                                                        data-event_name="{{ $vente->event_name }}"
                                                        data-price="{{ $vente->event_price }}">
                                                        <td class="text-center">{{ $vente->user_firstName }}</td>
                                                        <td class="text-center">{{ $vente->user_lastName }}</td>
                                                        <td class="text-center">{{ $vente->user_phone }}</td>
                                                        <td class="text-center">{{ $vente->user_email }}</td>
                                                        <td class="text-center">{{ $vente->event_name }}</td>
                                                        <td class="text-center">{{ $vente->event_price }}</td>
                                                        <td class="text-center">
                                                            <button onclick="showUserDetails(this)" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#viewuser" style="background-color: #6ac045; border-color: #6ac045; color: white;">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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

<!-- Invite Team Member Model Start-->
<div class="modal fade" id="viewuser" tabindex="-1" aria-labelledby="inviteTeamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteTeamModalLabel">Member Details</h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
            </div>
            <div class="modal-body">
                <div class="model-content main-form">
                    <div class="form-group mt-30">
                        <label class="form-label">First Name:</label>
                        <label class="form-label" id="modalFirstName"></label>
                    </div>
                    <div class="form-group mt-30">
                        <label class="form-label">Last Name:</label>
                        <label class="form-label" id="modalLastName"></label>
                    </div>
                    <div class="form-group mt-30">
                        <label class="form-label">Phone:</label>
                        <label class="form-label" id="modalPhone"></label>
                    </div>
                    <div class="form-group mt-30">
                        <label class="form-label">Email:</label>
                        <label class="form-label" id="modalEmail"></label>
                    </div>
                    <div class="form-group mt-30">
                        <label class="form-label">Event Name:</label>
                        <label class="form-label" id="modalEventName"></label>
                    </div>
                    <div class="form-group mt-30">
                        <label class="form-label">Price:</label>
                        <label class="form-label" id="modalPrice"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invite Team Member Model End-->

<script>
function showUserDetails(button) {
    var userRow = button.closest('tr');
    var firstName = userRow.dataset.first_name;
    var lastName = userRow.dataset.last_name;
    var phone = userRow.dataset.phone;
    var email = userRow.dataset.email;
    var eventName = userRow.dataset.event_name;
    var price = userRow.dataset.price;

    document.getElementById('modalFirstName').textContent = firstName;
    document.getElementById('modalLastName').textContent = lastName;
    document.getElementById('modalPhone').textContent = phone;
    document.getElementById('modalEmail').textContent = email;
    document.getElementById('modalEventName').textContent = eventName;
    document.getElementById('modalPrice').textContent = price;
}
</script>
@endsection
