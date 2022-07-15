


 @foreach($data['oneitem'] as $item)

 <form action="" method="POST">

<div class="row">

    <h2>{{ $item->equ_number }}</h2>
    <div class="col-sm-8 ">

    <div class="row">

        <div class="col">
            <div class="form-group">
                <label for="email">Equpment Name:</label>
                <input type="email" class="form-control" value="{{ $item->equpmentname }}" id="email" disabled>
              </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for="email">Manufacture:</label>
            <input type="email" class="form-control" value="{{ $item->manufacture }}" id="email" disabled>
          </div>
        </div>
     </div>


     <div class="row">

        <div class="col">
            <div class="form-group">
                <label for="email">Model:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->model }}" id="email" disabled>
              </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for="email">SN:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->sn }}" disabled>
          </div>
        </div>
     </div>



     <div class="row">
        <?php if(!empty(Auth::user()->admin)){ ?>
        <div class="col">
            <div class="form-group">
                <label for="email">Invoice No :</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->equ_number }}" disabled>
              </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label for="email">Invoice Date:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->equ_number }}" disabled>
              </div>
        </div>

        <?php } ?>
        <div class="col  <?php if(empty(Auth::user()->admin)){ echo 'col-sm-5'; }?> ">
        <div class="form-group">
            <label for="email"> Waranty Month:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->equ_number }} " disabled>
          </div>
        </div>
     </div>


     <div class="row">

        <div class="col">
            <div class="form-group">
                <label for="email">Business Name:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->sbu_name }}" id="email" disabled>
              </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for="email">Responsible person:</label>

            <select class="form-control" name="emp_id" required>
                <option value="{{ $item->emp_id }}">{{  $item->emp_name}}</option>

                @foreach ( $data['responsperson'] as  $rep)
                <option value="{{  $rep->emp_id }}">{{  $rep->emp_name}}</option>
                @endforeach
            </select>
          <!--  <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->emp_name }}" id="email" >!---->
          </div>
        </div>
     </div>



     <div class="row">

        <div class="col">
            <div class="form-group">
                <label for="email">Using Locatin:</label>

                <select class="form-control" name="location_id" required>
                    <option value="{{ $item->location_id }}">{{ $item->location_name }}</option>

                    @foreach ( $data['location'] as  $loca)
                    <option value="{{  $loca->location_id}}">{{  $loca->location_name}}</option>
                    @endforeach
                </select>

              <!--  <input type="email" class="form-control" placeholder="Enter email" id="email"  value="{{ $item->location_name }}" id="email" > !--->
              </div>
        </div>

        <div class="col">
        <div class="form-group">
            <label for="email">Status:</label>
            <select class="form-control" name="it_equ_status">
                <option>{{ $item->it_equ_status }}</option>
                <option> Office Work</option>
                <option>Keeping</option>
                <option>Damage</option>
                <option>On Dispose list</option>
                <option>Disposed</option>
            </select>

          </div>
        </div>
     </div>


     <?php if(!empty(Auth::user()->admin)){ ?>
        <div class="">
            <label for="email">Admin details</label>
            <textarea id="admin_details" name="admin_details"  class="@error('admin_details') is-invalid @enderror">{{ $item->admin_details }}</textarea>
        </div>
<?php }?>


<?php if(empty(Auth::user()->admin)){ ?>
     <div class="">
        <label for="email">User Details:</label>
        <textarea id="user_details" name="user_details"  class="@error('user_details') is-invalid @enderror col-sm-10">{{ $item->user_details }}</textarea>
    </div>
<?php }?>


     <div class="row mt-2">
        <?php if(!empty(Auth::user()->admin)){ ?>
        <div class="col">
            <div class="form-group">
                <label for="email"></label>
                <i class="fa fa-file-pdf-o fa-2x text-success" aria-hidden="true" data-toggle="modal" data-target="#mupfd"></i>
              </div>
        </div>
      <?php } ?>
        <div class="col">

        </div>
     </div>



    </div>


    <div class="col">

        <div class="row mt-4">
             <div class="col shadow-sm p-3 mb-5  rounded  bg-warning">
                <h4> Ticket </h4>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newtiket">
                <i class="fa fa-ticket" aria-hidden="true"></i>
              </button>
            </div>
        </div>




        <div class="row mb-1">
            <div class="col shadow-sm p-3  bg-white rounded ">
                Titel Of Tiket (Date)
           </div>
       </div>
       <div class="row mb-1">
        <div class="col shadow-sm p-3  bg-white rounded ">
            Titel Of Tiket (Date)
       </div>
   </div>



    </div>
</div>








<!-- The Modal -->
<div class="modal fade" id="mupfd">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading {{ $item->invoice_name}}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

            <object data="{{ url('invoice')}}/{{ $item->invoice_name}}" type="application/pdf" width="100%" height="100%">
            <!------    <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>!------->
              </object>



        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>





 </form>


<!-- The Modal -->
<div class="modal fade" id="newtiket">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">New Ticket</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            bhjjjj
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>





  @endforeach







<script>

ClassicEditor
    .create( document.querySelector( '#user_details' ), {
        toolbar: [ 'bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList' ]
    } )
    .catch( error => {
        console.log( error );
    } );



    ClassicEditor
    .create( document.querySelector( '#admin_details' ), {
        toolbar: [ 'bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList' ]
    } )
    .catch( error => {
        console.log( error );
    } );

</script>





