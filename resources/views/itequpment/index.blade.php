
   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <script>
   tinymce.init({
       selector: 'textarea', 
   
       menu: {
       edit: {title: 'Edit', items: 'undo, redo, selectall'}
   }
   });
   </script>
   


<form action="/addqupment" method="post" enctype="multipart/form-data">

  @csrf
  
<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="email">Equipment Name:</label>
            <input type="text" class="form-control" placeholder="Equpment Name"  name="equpment_name" id="email">
          </div>
    </div>

   
        <div class="col">
        <div class="form-group">
            <label for="email">Manufacture:</label>
            <input type="text" class="form-control" placeholder="Manufacture" name="manufacture" id="email">
          </div>
    </div>

    <div class="col">
        
            <div class="form-group">
                <label for="email">Model:</label>
                <input type="text" class="form-control" placeholder="Model" id="email" name="model">
              </div>
    </div>
</div>







<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="email">SN:</label>
            <input type="text" class="form-control " placeholder="SN"  name="sn" id="email" >
          </div>
    </div>

 
    <div class="col">
        
            <div class="form-group">
                <label for="email">Model:</label>
                <input type="text" class="form-control" placeholder="Model" id="email" >
              </div>
    </div>

    <div class="col">
        
      <?php if(!empty(Auth::user()->admin)){ ?>
      <div class="form-group">
        <label for="email">Invoice:</label>
          <input type="file" class="form-control col-sm-6" name="file">
      </div>
      <?php } ?>
</div>

</div>





<div class="row">

  <?php if(!empty(Auth::user()->admin)){ ?>
    <div class="col">
        <div class="form-group">
            <label for="email">SBU Name:</label>

            <select class="js-example-basic-single form-control mb-3 " name="sbu_id" id="select2">
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
           
            <select class="js-example-basic-single form-control " name="location_id" id="select3">
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
<div class="row">
  <textarea id="myeditorinstance" name="admin_details"></textarea>
</div>

<?php } ?>

<div class="row mt-2">
  <div class="col">
    <input type="submit" class="btn btn-success" value="Save">
  </div>
  <div class="col"></div>
  <div class="col"></div>
  
</div>

</form>


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
</script>