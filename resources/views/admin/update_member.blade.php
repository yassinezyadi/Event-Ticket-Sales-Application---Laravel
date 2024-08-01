@extends('admin_layout.mastrAdmin')

@section('content')
<div class="wrapper wrapper-body">
    <div class="col-md-11 ms-3">
        <div class="d-main-title">
            <h3><i class="fa-solid fa-user-group me-3"></i>Update Member</h3>
        </div>
    </div>

    <div class="col-lg-11">
        <div class="main-card mt-4 ms-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 order-lg-3">
                    <div class="contact-form bp-form p-lg-5 ps-lg-5 pt-lg-4 pb-5 p-4">
                        <form action="{{url('/my_teams/updateuser/'.$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="model-content main-form">
                                <div class="form-group mt-30">
                                    <label class="form-label">First Name:</label>
                                    <input class="form-control h_40" type="text" name="first_name"  value="{{$user->firstName}}">
                                </div>
                                <div class="form-group mt-30">
                                    <label class="form-label">Last Name:</label>
                                    <input class="form-control h_40" type="text" name="last_name"   value="{{$user->lastName}}">
                                </div>
                                <div class="form-group mt-30">
                                    <label class="form-label">Email:</label>
                                    <input class="form-control h_40" type="text" name="email"   value="{{$user->email}}">
                                </div>
                                <div class="form-group mt-30">
                                    <label class="form-label">Phone:</label>
                                    <input class="form-control h_40" type="text" name="phone"   value="{{$user->phone}}">
                                </div>
                                <div class="form-group mt-30">
                                    <label class="form-label">Password:</label>
                                    <input class="form-control h_40" type="password" name="password"  value="{{$user->password}}"   >
                                </div>
                                <div class="form-group mt-30">
                                    <div class="form-group mt-30">
                                        <label class="form-label">Role</label>
                                        <select class="selectpicker" name="role" title="Select Role">
                                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="Client" {{ $user->role == 'Client' ? 'selected' : '' }}>Client</option>
                                        </select>																							
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center mt-4">
                                    <button class="main-btn btn-hover h_50 w-100" type="submit">Submit</button>
                                </div>
                            </div>
    
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection



















