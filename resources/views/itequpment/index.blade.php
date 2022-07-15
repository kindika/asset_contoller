
<style>
select.form-control {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-position: right center;
    background-repeat: no-repeat;
    background-size: 1ex;
    background-origin: content-box;
    }
</style>

<form action="/addqupment" method="post" enctype="multipart/form-data">

  @csrf

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="email">Equipment Name:</label>

            <select class="js-example-basic-single form-control mb-3 high @error('equpmentname_id') is-invalid @enderror"  name="equpmentname_id" id="select6" >
                @foreach ($data['equname'] as $equname)
                <option value="{{ $equname->equpmentname_id  }}">{{ $equname->equpmentname }}</option>
                @endforeach
              </select>
          </div>
    </div>


        <div class="col">
        <div class="form-group">
            <label for="email">Manufacture:</label>
            <input type="text" class="form-control @error('manufacture') is-invalid @enderror" placeholder="Manufacture" name="manufacture" id="email" >
          </div>
    </div>

    <div class="col">

            <div class="form-group">
                <label for="email">Model:</label>
                <input type="text" class="form-control @error('model') is-invalid @enderror" placeholder="Model" id="email" name="model" >
              </div>
    </div>
</div>




<div class="row">
  <div class="col">
      <div class="form-group">
          <label for="email">SN:</label>
          <input type="text" class="form-control @error('sn') is-invalid @enderror" placeholder="SN"  name="sn" id="email" >
        </div>
  </div>

  <?php if(!empty(Auth::user()->admin)){ ?>
  <div class="col ">

          <div class="form-group">
              <label for="email">Invoice Date:</label>
              <input type="date" class="form-control  @error('invoicedate') is-invalid @enderror" name="invoicedate" placeholder="Invoice Date" id="email" >
            </div>

  </div>

  <div class="col">

    <div class="form-group">
        <label for="email">Invoice Date:</label>
        <input type="number" class="form-control col-sm-12  @error('warantymonth') is-invalid @enderror" name="warantymonth" placeholder="Waranty Month" id="email" >
      </div>

</div>

  <div class="col">


    <div class="form-group">
      <label for="email">Invoice:</label>
        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" >
    </div>

</div>
<?php } ?>
</div>







<?php if(!empty(Auth::user()->admin)){ ?>
  <div class="row">
      <div class="col">
          <div class="form-group">
              <label for="email">Cost</label>
              <input type="text" class="form-control " placeholder="Cost"  name="cost" id="email" >
            </div>
      </div>


      <div class="col">

              <div class="form-group">
                  <label for="email">Invoice No</label>
                  <input type="text" class="form-control" placeholder="Invoice No" name="invoice_no" id="email" >
                </div>
      </div>

      <div class="col">


        <div class="form-group">
          <label for="email">Supplier:</label>
          <select class="js-example-basic-single form-control mb-3 " name="suppliers_id" id="select5">
            @foreach ($data['supplier'] as $supp)
            <option value="{{ $supp->suppliers_id  }}">{{ $supp->suppliers_company_name }}</option>
            @endforeach
          </select>
        </div>

  </div>

  </div>

  <?php } ?>



<div class="row">

  <?php if(!empty(Auth::user()->admin)){ ?>
    <div class="col">
        <div class="form-group">
            <label for="email">SBU Name:</label>

            <select class="js-example-basic-single form-control mb-3 " name="sbu_id" id="select2" style=" padding:5px 0;">
                @foreach ($data['sbu_data'] as $sbu)
                <option value="{{ $sbu->sbu_id }}">{{ $sbu->sbu_name }}</option>
                @endforeach
              </select>

          </div>

    </div>

  <?php }?>

        <div class="col">
        <div class="form-group">
            <label for="email">Location:</label>

            <select class="js-example-basic-single form-control mb-3 h2" name="location_id" id="select3">
                @foreach ($data['location'] as $loc)
                <option value="{{ $loc->location_id  }}">{{ $loc->location_name}}</option>
                @endforeach
              </select>

          </div>
    </div>

    <div class="col">

            <div class="form-group">
                <label for="email">User:</label>

                <select class="js-example-basic-single form-control mb-3 h2" name="emp_id" id="select4">
                    @foreach ($data['emps'] as $emps)
                    <option value="{{ $emps->emp_id }}">{{ $emps->emp_name }}</option>
                    @endforeach
                  </select>

              </div>
    </div>
</div>


<?php if(!empty(Auth::user()->admin)){ ?>
<div class="">
    <label for="email">Details:</label>
  <textarea id="admin_details" name="admin_details" ></textarea>
</div>

<?php } ?>

<?php if(empty(Auth::user()->admin)){ ?>
<div class="">
    <label for="email">Details:</label>
    <textarea id="user_details" name="user_details"  class="@error('user_details') is-invalid @enderror"> </textarea>
  </div>
<?php }?>



<div class="row mt-2">
  <div class="col">
    <input type="submit" class="btn btn-success " value="Save">
  </div>
  <div class="col"></div>
  <div class="col"></div>

</div>

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



<script>
$('.js-example-basic-single').select2({
  placeholder: 'Select an option'
});


$('.js-example-basic-single').select3({
  placeholder: 'Select an option'
});


$('.js-example-basic-single').select4({
  placeholder: 'Select an option'
});

$('.js-example-basic-single').select5({
  placeholder: 'Select an option'
});

$('.js-example-basic-single').select6({
  placeholder: 'Select an option'
});
</script>


<style>
.high{
height:30px;
    line-height:30px;
    padding:6px;
}
</style>







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





