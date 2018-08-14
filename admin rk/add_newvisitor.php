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
  <?php if(isset($_SESSION['msg'])){
 $msg=$_SESSION['msg'];?>

 <div style="margin-left:160px;margin-right:245px"class=" text-center alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $msg;
    unset($_SESSION['msg']);
  ?>
</div>
 <?php }?>   
</div>



 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.html" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>

       <div class="col-md-3 offset-md-6 " id="profile">           
       <?php   
          if (empty($_REQUEST['edit'])) {
            $edit_record = '0';
          } else {
           $edit_record = $_REQUEST['edit'];
      }
       
         $run= $conn->prepare("SELECT * FROM  visitors WHERE v_id=:m_id");
          $run->execute(array('m_id' => $edit_record));
          $row = $run->fetch(PDO::FETCH_OBJ);
      
    
?>
   <?php if(!empty($_REQUEST['edit'])) {?>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Update Visitor Info
       </button><?php }  else { ?>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Your Memebers
       </button><?php }?>
     <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
           
          <form action="actionpages/action_newvisitors.php"id="form1" method="post">
         <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control"name="name" id="name" value="<?php if(!empty($row->v_name)){
  echo $row->v_name; }?>" autofocus>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control"name="email" id="email" value="<?php if(!empty($row->v_email)){
  echo $row->v_email; }?>">
  </div>
  <div class="form-group">
    <label for="mob">Mob No:</label>
    <input type="text" class="form-control"name="mobno" id="mobno" value="<?php if(!empty($row->v_mobno)){
  echo $row->v_mobno; }?>">
  </div>
   <div class="form-group">
    <label for="enquiry">Enquiry Date:</label>
    <input type="date" class="form-control"name="enquiry" id="enquiry" value="<?php if(!empty($row->enquirydt)){
  echo $row->enquirydt; }?>">
  </div>
 
  <div class="form-group">
    <label for="reason">Reason:</label>
    <input type="text" class="form-control"name="reason" id="reason" value="<?php if(!empty($row->reason)){
  echo $row->reason; }?>">
  </div>
  
  <div class="form-group">
  <label for="adress">Address:</label>
  <textarea class="form-control"  name="address" id="editor"><?php if(!empty($row->address)){
  echo $row->address; }?></textarea>
</div>

 

</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <?php if (!empty($_REQUEST['edit'])) { ?>
                <input type="submit" name="submit" id="submit" value="update" class="btn btn-success"form="form1" onClick="return confirm('Are You Sure want to update??')" >
                <input type="hidden" name="v_id" value="<?php echo $row->v_id; ?>" form="form1">
              <?php } else {?>
          <button type="submit" name="submit" class="btn btn-primary"form="form1">Add</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <input type="hidden" name="submit" value="addvisitor" form="form1">
          <?php }?>
        </div>
        
      </div>
    </div>
  </div>
  
  </div>   
</div>
          <div class="dropdown-divider"></div>
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 40px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header bg-success" >
      <a class="collapsed card-link" data-toggle="collapse" style="color: white" href="#collapseTwo">
        View New Visitors<a href="#"><i class="ion-map icon i9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        
        <div class="col-md-11 ml-1 ">
   <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
		
            <tr style="color:#121e2d">
                <th>Name</th>
                <th>Email</th>
                <th>Mob NO</th>
                <th>Enquiry Dt</th>
                <th>Reason</th>
                <th>Address</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
               
          $sl = 0;
                    $data = $conn->query("SELECT * FROM  visitors ");
                    while ($value = $data->fetch(PDO:: FETCH_OBJ)) {
                    $sl++;
                      ?>
          <tr style="background-color: #8c7f6e;color: white;">
                <td><?= $sl; ?></td>
                <td><?= $value->v_name; ?></td>
                <td><?= $value->v_email; ?></td>
                <td><?= $value->enquirydt; ?></td>
                <td><?= $value->reason; ?></td>
                <td><?= $value->address; ?></td>
                <td style="color:#42f4d4;cursor:pointer;"><a href="add_newvisitor.php?edit=<?= $value->v_id; ?><?= urlencode('/ ( ) $ ='); ?>"  
        class="btn btn-primary bg-sm"style="font-size: 8px">Edit</a>
               <a href="actionpages/action_newvisitors.php?del=<?= $value->v_id; ?>&submit=delete" 
         onClick="return confirm('Are You Sure want to Delete??')" class="btn btn-danger bg-sm"style="font-size: 8px">Del</a></td>
         <?php }?>
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
