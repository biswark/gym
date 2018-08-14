<?php 
 require_once('header.php');
 require_once('actionpages/db/db.php');
 ?>

  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
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
  <?php if(isset($_SESSION['msgs'])){
 $msgs=$_SESSION['msgs'];?>

 <div class=" text-center alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $msgs;
    unset($_SESSION['msgs']);
  ?>
</div>
 <?php }?>   
</div>

 <div class="dropdown-divider"></div>



 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.php" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>
  <div class="col-md-3 offset-md-6 " >           
      
  <a href="new_instruments.php" class="btn btn-info btn-md">Back To Instrument</a>
</div></div>
          <div class="dropdown-divider"></div>
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 40px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header bg-warning">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        View Instrument<a href="#"><i class="ion-aperture icon i9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        
        <div class="col-md-12 ">
    <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
    
            <tr style="color:#121e2d">
              <th>Sl.no</th>
                <th>Instrument Name</th>
                <th>Brand Name</th>
                <th>Images</th>
                <th>Quantity</th>
                <th>Quantity Price</th>
                <th>Total Price</th>
                  <th>Action</th>
                 <th>Purchase Dt</th>
               
                  <th>Maintenence</th>
                
                
            </tr>
        </thead>
        <tbody>
           <?php
               
          $sl = 0;
                    $data = $conn->query("SELECT * FROM  instruments ");
                    while ($value = $data->fetch(PDO:: FETCH_OBJ)) {
                    $sl++;
                      ?>
         <tr style="background-color: #8c7f6e;color: white;">
                <td><?= $sl; ?></td>
                <td><?= $value->ins_name; ?></td>
                <td><?= $value->brand_name; ?></td>
                <td><img src="actionpages/upload/<?= $value->images; ?>" height="70"width="80"/></td>
                <td><?= $value->total_quantity; ?></td>
                <td><?= $value->p_quantity; ?></td>
               
                <td><?= $res=($value->total_quantity * $value->p_quantity);  ?></td>
        <td style="color:#42f4d4;cursor:pointer;"><a href="new_instruments.php?edit=<?= $value->ins_id; ?><?= urlencode('/ ( ) $ ='); ?>"  
        class="btn btn-primary bg-sm"style="font-size: 8px">Edit</a>
               <a href="actionpages/action_instruments.php?del=<?= $value->ins_id; ?>&submit=delete" 
         onClick="return confirm('Are You Sure want to Delete??')" class="btn btn-danger bg-sm"style="font-size: 8px">Del</a></td>
          <td><?= $value->purchasedt; ?></td>
            <td><?= $value->m_period; ?></td>
                
               
                  <?php }?>
          
            </tr>
          
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
