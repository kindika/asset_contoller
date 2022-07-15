

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
           New
          </button>

    </div>



    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">New </h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="addqupmentname" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="email">Name:</label>
                      <input type="text" class="form-control  @error('equpmentname') is-invalid @enderror" name="equpmentname" placeholder="Equpment Name" id="email">
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
                <th>Equpment Name</th>

                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['Equpname'] as $row)

            <tr>
                <td>
                  <a href="#">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-blue mr-3">


                       <img src="{{ URL('/images/nologo.png') }}"  class="avatar avatar-blue mr-3" data-toggle="modal" data-target="#logo{{ $row->equpmentname_id }}">


                      </div>

                      <div class="">
                        <p class="font-weight-bold mb-0">  </p>
                        <p class="text-muted mb-0"></p>
                      </div>
                    </div>
                  </a></td>

                <td>{{ $row->equpmentname }} </td>


                <td>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $row->equpmentname_id }}">
                    EDIT
                  </button>
                </td>
            </tr>


            <!-- The Modal -->
    <div class="modal fade" id="editModal{{ $row->equpmentname_id }}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Edit {{ $row->equpmentname }}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form action="/editequname" method="POST">
              {{ csrf_field() }}

              <input type="hidden" class="form-control" name="equpmentname_id"  value="{{ $row->equpmentname_id }}" id="email">

                <div class="form-group">
                  <label for="email">SBU Name:</label>
                  <input type="text" class="form-control  @error('equpmentname') is-invalid @enderror" name="equpmentname"  value="{{ $row->equpmentname}}" id="email">
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
