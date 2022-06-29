

<style>  
    body {  
      min-height: 100vh;  
       
    }  
    .table {  
      border-spacing: 0 0.85rem !important;  
    }  
    .table .dropdown {  
      display: inline-block;  
    }  
    .table td  
    {  
      vertical-align: middle;  
      margin-bottom: 10px;  
      border: none;  
    }  
    .table th {  
      vertical-align: middle;  
      margin-bottom: 10px;  
      border: none;  
    }  
    .table thead tr {  
      border: none;  
      font-size: 12px;  
      letter-spacing: 1px;  
      text-transform: uppercase;  
      background: transparent;  
    }  
    .table thead th {  
      border: none;  
      font-size: 12px;  
      letter-spacing: 1px;  
      text-transform: uppercase;  
      background: transparent;  
    }  
    .table td {  
      background: #fff;  
    }  
    .table td:first-child {  
      border-top-left-radius: 10px;  
      border-bottom-left-radius: 10px;  
    }  
    .table td:last-child {  
      border-top-right-radius: 10px;  
      border-bottom-right-radius: 10px;  
    }  
    .avatar {  
      width: 2.75rem;  
      height: 2.75rem;  
      line-height: 3rem;  
      border-radius: 50%;  
      display: inline-block;  
      background: transparent;  
      position: relative;  
      text-align: center;  
      color: #868e96;  
      font-weight: 700;  
      vertical-align: bottom;  
      font-size: 1rem;  
      -webkit-user-select: none;  
      -moz-user-select: none;  
      -ms-user-select: none;  
      user-select: none;  
    }  
    .avatar-sm {  
      width: 2.5rem;  
      height: 2.5rem;  
      font-size: 0.83333rem;  
      line-height: 1.5;  
    }  
    .avatar-img {  
      width: 100%;  
      height: 100%;  
      -o-object-fit: cover;  
      object-fit: cover;  
    }  
    .avatar-blue {  
      background-color: #c8d9f1;  
      color: #467fcf;  
    }  
    table.dataTable.dtr-inline.collapsed  
      > tbody  
      > tr[role="row"]  
      > td:first-child:before,  
    table.dataTable.dtr-inline.collapsed  
      > tbody  
      > tr[role="row"]  
      > th:first-child:before {  
      top: 28px;  
      left: 14px;  
      border: none;  
      box-shadow: none;  
    }  
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child  
    {  
      padding-left: 48px;  
    }  
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {  
      padding-left: 48px;  
    }  
    table.dataTable > tbody > tr.child ul.dtr-details {  
      width: 100%;  
    }  
    table.dataTable > tbody > tr.child span.dtr-title {  
      min-width: 50%;  
    }  
    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,  
    table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,  
    table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {  
      padding: 0.75rem 1rem 0.125rem;  
    }  
    div.dataTables_wrapper div.dataTables_length label,  
    div.dataTables_wrapper div.dataTables_filter label {  
      margin-bottom: 0;  
    }  
      
    @media (max-width: 767px) {  
      div.dataTables_wrapper div.dataTables_paginate ul.pagination {  
        -ms-flex-pack: center !important;  
        justify-content: center !important;  
        margin-top: 1rem;  
      }  
    }  
    .btn-icon {  
      background: #fff;  
    }  
    .btn-icon .bx {  
      font-size: 20px;  
    }  
    .btn .bx {  
      vertical-align: middle;  
      font-size: 20px;  
    }  
    .dropdown-menu {  
      padding: 0.25rem 0;  
    }  
    .dropdown-item {  
      padding: 0.5rem 1rem;  
    }  
    .badge {  
      padding: 0.5em 0.75em;  
    }  
    .badge-success-alt {  
      background-color: #d7f2c2;  
      color: #7bd235;  
    }  
    .table a {  
      color: #212529;  
    }  
    .table a:hover,  
    .table a:focus {  
      text-decoration: none;  
    }  
    table.dataTable {  
      margin-top: 12px !important;  
    }  
    .icon > .bx {  
      display: block;  
      min-width: 1.5em;  
      min-height: 1.5em;  
      text-align: center;  
      font-size: 1.0625rem;  
    }  
    .btn {  
      font-size: 0.9375rem;  
      font-weight: 500;  
      padding: 0.5rem 0.75rem;  
    }  
    .avatar-blue {  
          background-color: #c8d9f1;  
          color: #467fcf;  
        }  
        .avatar-pink {  
          background-color: #fcd3e1;  
          color: #f66d9b;  
        }  
    </style>  
     
  
    
    
    
    
    
    
    <div class="mb-3">
    
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           New User  
          </button>
    
    </div>
    
    
    
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">New User</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
              
                <form action="/crateuses" method="POST">
                  {{ csrf_field() }} 
                    <div class="form-group">
                      <label for="email">User Name:</label>
                      <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="User Name" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Email:</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" id="pwd">
                    </div>
    
                    <div class="form-group">
                      <label for="pwd">SBU</label>
                      <select  name="sbu_id" class="form-control col-sm-4 @error('sbu_id') is-invalid @enderror">
                        @foreach ($data['sbu_data'] as $sbu_data)
                      <option value="{{ $sbu_data->sbu_id }}">{{ $sbu_data->sbu_name }}</option>
                      @endforeach
                    </select>
                  
                    </div>
                     
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" id="pwd">
                      </div>
    

                      <div class="form-group">                            
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch1" name="admin" value="1">
                            <label class="custom-control-label" for="switch1">Admin</label>
                          </div>
                      </div>

                       
                      <div class="form-group">                            
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch2" name="boardroom" value="1">
                            <label class="custom-control-label" for="switch2">Bord Room</label>
                          </div>
                      </div>

                      
                      <div class="form-group">                            
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch3" name="status" value="1">
                            <label class="custom-control-label" for="switch3">Active</label>
                          </div>
                      </div>
                      

                     
                     
    
    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
    
    
                   
                          @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
    
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
    
      
    
    
    
      <div class="row py-5">  
        <div class="col-12">  
          <table id="example" class="table table-hover responsive nowrap" style="width:100%">  
            <thead>  
             
              <tr>  
                <th></th>  
                <th>Email</th>
                <th>Admin</th>  
                <th>Bord Room</th>  
                <th>Status</th>
                            
                <th>Actions</th>  
              </tr>  
            </thead>  
            <tbody>  
              @foreach ($data['usersAll'] as $row)
          
            <tr>
                <td>
                  <a href="#">  
                    <div class="d-flex align-items-center">  
                      <div class="avatar avatar-blue mr-3">                 
                     
                        <img src="/logo/{{ $row->logoname }}"  class="avatar avatar-blue mr-3"  > 
                      
                      </div>  
      
                      <div class="">  
                        <p class="font-weight-bold mb-0"> {{ $row->sbu_prefixes }} </p>  
                        <p class="text-muted mb-0">{{ $row->name }}</p>  
                      </div>  
                    </div>  
                  </a></td>
                  <td>{{ $row->email }} </td>
                <td> @if($row->admin==1)
                       Active                        
                       @else
                           No Permition                      
                     @endif
                </td>
                <td>
                    @if($row->boardroom==1)
                       Active                        
                       @else
                           No Permition                      
                     @endif
                   </td>

                   <td>
                    @if($row->status==1)
                       Active                        
                       @else
                       Deactivate                     
                     @endif
                   </td>

                
               
                <td>               
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $row->id }}">
                    EDIT
                  </button>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editpassModal{{ $row->id }}">
                    Password Update
                  </button>
                </td>
            </tr>
    
    <!---- password reset !------------>

    
    
            <!-- Edit The Modal -->
            <div class="modal fade" id="editpassModal{{ $row->id }}">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Password  {{ $row->name}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">                
                     
            
                       
                      <form action="/userpasswordupdate" method="POST">
                        {{ csrf_field() }} 
        
                        
                        <input type="hidden" class="form-control" name="id"  value="{{ $row->id }}" id="email">
                          <div class="form-group">
                            <label for="email">Password:</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"  id="email">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
          
          
                         
                                @if ($errors->any())
                      <div class="alert alert-danger mt-2">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
            
                </div>
              </div>
            </div>
    
            
 
    
   
    
            <!-- Edit The Modal -->
    <div class="modal fade" id="editModal{{ $row->id }}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit {{ $row->name}}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
          <!-- Modal body -->
          <div class="modal-body">
          
              {{ csrf_field() }} 
    
               
              <form action="/userupdate" method="POST">
                {{ csrf_field() }} 

                <input type="hidden" class="form-control" name="id"  value="{{ $row->id }}" id="email">
                  <div class="form-group">
                    <label for="email">User Name:</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $row->name }}" id="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $row->email}}">
                  </div>
  
                  <div class="form-group">
                    <label for="pwd">SBU</label>
                    <select  name="sbu_id" class="form-control  col-sm-4 @error('sbu_id') is-invalid @enderror">
                      <option value="{{ $row->sbu_id}}"> {{ $row->sbu_name}}</option>
                      @foreach ($data['sbu_data'] as $sbu_data)
                    <option value="{{ $sbu_data->sbu_id }}">{{ $sbu_data->sbu_name }}</option>
                    @endforeach
                  </select>
                
                  </div>
                   

                    <div class="form-group">                            
                      <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switch7{{ $row->id }}" name="admin" value="1"   @if($row->admin==1) checked     @endif > 
                          <label class="custom-control-label" for="switch7{{ $row->id }}">Admin</label>
                        </div>
                    </div>

                     
                    <div class="form-group">                            
                      <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switch8{{ $row->id }}" name="boardroom" value="1"  @if($row->boardroom==1) checked      @endif>
                          <label class="custom-control-label" for="switch8{{ $row->id }}">Bord Room</label>
                        </div>
                    </div>

                    
                    <div class="form-group">                            
                      <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="switch9{{ $row->id }}" name="status" value="1"  @if($row->status==1) checked     @endif>
                          <label class="custom-control-label" for="switch9{{ $row->id }}">Active</label>
                        </div>
                    </div>
                    

                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
  
  
                 
                        @if ($errors->any())
              <div class="alert alert-danger mt-2">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
            </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
    
        </div>
      </div>
    </div>
    
    
    
            @endforeach 
            </tbody>  
          </table>  
        </div>  
      </div>  
      
   
    <script>  
    $(document).ready(function() {  
      $("#example").DataTable({  
        aaSorting: [],  
        responsive: true,  
        columnDefs: [  
          {  
            responsivePriority: 1,  
            targets: 0  
          },  
          {  
            responsivePriority: 2,  
            targets: -1  
          }  
        ]  
      });  
      $(".dataTables_filter input")  
        .attr("placeholder", "Search here...")  
        .css({  
          width: "300px",  
          display: "inline-block"  
        });  
      $('[data-toggle="tooltip"]').tooltip();  
    });  
    </script>  
    