
 @foreach($data['oneitem'] as $item)

<div class="row">
    <div class="col-sm-8 ">

    <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email">Equpment Number:</label>
                <input type="email" class="form-control" value="{{ $item->equ_number }}" id="email" disabled>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">Manufacture:</label>
            <input type="email" class="form-control" value="" id="email" disabled>
          </div>
        </div>
     </div>


     <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email">Model:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">SN:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
          </div>
        </div>
     </div>


     
     <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email">Model:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">SN:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
          </div>
        </div>
     </div>

     
     <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email">Business Name:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">Responsible person:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
          </div>
        </div>
     </div>



     <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email">Using Locatin:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">Using For:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email"  value="" id="email" disabled>
          </div>
        </div>
     </div>




     <div class="row">
        
        <div class="col">
            <div class="form-group">
                <label for="email"></label>
                <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#mupfd"></i>
              </div>
        </div>    
    
        <div class="col">
        <div class="form-group">
            <label for="email">Using For:</label>
            <input type="email" class="form-control"  value="" id="email"  value="" id="email" disabled>
          </div>
        </div>
     </div>

    
   
   


    </div>


    <div class="col">

        <div class="row mt-4">
             <div class="col shadow-sm p-3 mb-5  rounded  bg-warning">
                <h4> Ticket </h4>    
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
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
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>








<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>


  @endforeach