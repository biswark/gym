<?php require_once('header.php');?>

  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
  </script>

  <div class="content">
    <div id="jum">
 <p> WELCOME ADMIN  (You Can Customorize And Access Your File...)</p> 
  
</div>



 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.php" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>

        
</div>
          <div class="dropdown-divider"></div>
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 40px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header bg-info">
      <a class="collapsed card-link"  id="mem" data-toggle="collapse" href="#collapseTwo">
        Search Due Amount<a href="#"><i class="ion-ios-search-strong icon I9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
      
          <form action="" method="post" >
 <div class="row">
            <div class="col-md-4">
            <div class="form-group">
    <label for="shift">Renew Plan:</label>
    <select class="form-control" id="sel1">
      <option>select</option>
    <option value="8months">8 Months</option>
  </select>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label for="date">Join Date</label>
    <input type="text" name="date" class="form-control" id="date">
    
  </div>
</div>
<div class="col-md-4"style="margin-top:33px;">
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-dark">Check</button>
  </div></div>
         
        </div>
         </form>
        
          <div class="dropdown-divider"></div>
        <div class="col-md-11 ml-1 ">
 <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
		
            <tr style="color:#121e2d">
                <th>Name</th>
                  <th>Action</th>
                <th>Join Dt</th>
                <th>Mebership Fees</th>
                <th>month1</th>
                <th>month2</th>
                <th>month3</th>
                <th>month4</th>
                <th>month5</th>
                <th>month6</th>
                <th>month7</th>
                <th>month8</th>
              
            </tr>
        </thead>
        <tbody>
           
         <tr style="background-color: #8c7f6e;color: white;">
              
                <td>Rakesh Das</td>
                <td style="color:#42f4d4;cursor:pointer;"><i title="edit"class="ion-edit icon edit"></i><span style="border-right:1px solid white;padding:2px;"></span>
               <i title="delete"class="ion-trash-b icon del"></i></td>
                <td>12/07/2018</td>
                <td>1000</td>
                <td>300</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                
            </tr>
            
          
           
           
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
<script>
      ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
          console.log( editor );
        } )
        .catch( error => {
          console.error( error );
        } );
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</body>
</html>
