@extends('admin_layout.mastrAdmin')
@section('content')
	<!-- Invite Team Member Model Start-->
	<div class="modal fade" id="inviteTeamModal" tabindex="-1" aria-labelledby="inviteTeamModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="inviteTeamModalLabel">Add Member</h5>
					<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-body">
                    @if (Session::has("success"))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
					@endif
				    @if(Session::has('error'))
						<div class="alert alert-danger">
							{{Session::get('error')}}
						</div>
                    @endif	
                    <form action="{{ url('/my_teams/adduser') }}" method="POST">
                        @csrf
                        <div class="model-content main-form">
                            <div class="form-group mt-30">
                                <label class="form-label">First Name</label>
                                <input class="form-control h_40" type="text" name="first_name" placeholder="Enter First Name" value="">
                            </div>
                            <div class="form-group mt-30">
                                <label class="form-label">Last Name</label>
                                <input class="form-control h_40" type="text" name="last_name" placeholder="Enter Last Name" value="">
                            </div>
                            <div class="form-group mt-30">
                                <label class="form-label">Email</label>
                                <input class="form-control h_40" type="text" name="email" placeholder="Enter Email" value="">
                            </div>
                            <div class="form-group mt-30">
                                <label class="form-label">Phone</label>
                                <input class="form-control h_40" type="text" name="phone" placeholder="Enter Phone" value="">
                            </div>
                            <div class="form-group mt-30">
                                <label class="form-label">Password</label>
                                <input class="form-control h_40" type="password" name="password" placeholder="Enter Password" value="">
                            </div>
                            
                            <div class="form-group mt-30">
                                <label class="form-label">Role</label>
                                <select class="selectpicker" name="role" title="Select Role">
                                    <option value="Admin">Admin</option>
                                    <option value="Client">Client</option>
                                </select>																							
                            </div>
                            
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="main-btn min-width btn-hover h_40">Add</button>
                        </div>
                    </form>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Invite Team Member Model End-->
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-user-group me-3"></i>Team Members</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content p-4">
                                    <div class="d-md-flex flex-wrap align-items-center">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            <button class="tab-link ms-0 active" data-bs-toggle="tab" data-bs-target="#overview-tab" type="button" role="tab" aria-controls="overview-tab" aria-selected="true">Overview</button>
                                        </div>
                                        <div class="rs ms-auto mt_r4">
											<button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#inviteTeamModal">Add a Team Member</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            
                                                            <th scope="col">First Name</th>
                                                            <th scope="col">Last Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Phone</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Key</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($users as $user)
                                                            <tr  data-id="{{ $user->id }}" data-first_name="{{ $user->firstName }}" data-last_name="{{ $user->lastName }}" data-email="{{ $user->email }}" data-phone="{{ $user->phone }}" data-role="{{ $user->role }}">										
                                                                <td>{{ $user->firstName }}</td>	
                                                                <td>{{ $user->lastName }}</td>	
                                                                <td>{{ $user->email }}</td>	
                                                                <td>{{ $user->phone }}</td>	
                                                                <td>{{ $user->role }}</td>	
                                                                <td>


                                                                    @if($user->key == 1)
                                                                    <form action="{{url('Unactivateuser/'.$user->id)}}" method="POST">
                                                                      @csrf
                                                                      @method('PUT')
                                                                      <input type="submit" class="btn btn-success"  value="Activate" >
                                                                     
                                                                    </form> 
                                                                    @else  
                                                                    <form action="{{url('activateuser/'.$user->id)}}" method="POST">
                                                                      @csrf
                                                                      @method('PUT')
                                                                      <input type="submit" class="btn btn-warning" value="Unactivate" >
                                                                     
                                                                    </form> 
                                                                    @endif
                                                                </td>	

                                                                <td>
                                                                    <span class="action-btn" data-bs-toggle="modal" data-bs-target="#viewuser" onclick="showUserDetails(this)"><i class="fa-solid fa-eye"></i></span>
                                                                    <a href="{{ url('my_teams/editmember/'.$user->id) }}" ><i class="fa-solid fa-edit"></i></a>


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
                            <label class="form-label">Email:</label>
                            <label class="form-label" id="modalEmail"></label>
                        </div>
                        <div class="form-group mt-30">
                            <label class="form-label">Phone:</label>
                            <label class="form-label" id="modalPhone"></label>
                        </div>
                        <div class="form-group mt-30">
                            <label class="form-label">Role:</label>
                            <label class="form-label" id="modalRole"></label>
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

        

@endsection


<script>
    function showUserDetails(element) {
        var userRow = element.closest('tr');
        var id = userRow.dataset.id;
        var firstName = userRow.dataset.first_name;
        var lastName = userRow.dataset.last_name;
        var email = userRow.dataset.email;
        var phone = userRow.dataset.phone;
        var role = userRow.dataset.role;
    
        document.getElementById('modalFirstName').textContent = firstName;
        document.getElementById('modalLastName').textContent = lastName;
        document.getElementById('modalEmail').textContent = email;
        document.getElementById('modalPhone').textContent = phone;
        document.getElementById('modalRole').textContent = role;
    }

   
    </script>



