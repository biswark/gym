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
  <?php if(isset($_SESSION['msg'])){
 $msg=$_SESSION['msg'];?>

 <div class=" text-center alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $msg;
    unset($_SESSION['msg']);
  ?>
</div>
 <?php }?>   
</div>
 <?php   
        
     if (empty($_REQUEST['edit'])) {
            $edit_record = '0';
          } else {
           $edit_record = $_REQUEST['edit'];
      }
       
         $run2= $conn->prepare("SELECT * FROM  payment WHERE p_id=:p_id");
          $run2->execute(array('p_id' => $edit_record));
          $row = $run2->fetch(PDO::FETCH_OBJ);
?>


 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.php" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>

         
</div>
        
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 20px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header bg-info">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color: white">
        View New Visitors<a href="#"><i class="ion-map icon i9 ml-2"></i>
      </a>
               
      
   <?php if(!empty($_REQUEST['edit'])) {?>
    <button style="float: right"type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Update Pyment List
       </button><?php }  else { ?>
   <button  style="float: right"type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Payment List
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
         <form action="actionpages/action_payment.php"id="form1" method="post">
            
          <?php if(empty($_REQUEST['edit'])) {?> 
         <div class="form-group">

    <label for="sel1">Member Name:</label>

    <select class="form-control" id="sel1" name="name">
    <?php 
    $dat = $conn->query("SELECT * FROM  addmember ");
                  while ($row= $dat->fetch(PDO:: FETCH_OBJ)) {
                   ?>
    <option value="<?= $row->name; ?>"><?= $row->name; ?></option>
 <?php }?>
  </select>
  </div>
  <?php }?>

   <div class="form-group">
    <label for="fee">Membership fees:</label>
    <input type="text" class="form-control"name="fee" id="fee" placeholder="1000/-" value="<?php if(!empty($row->p_price)) {
  echo $row->p_price; }?>" autofocus>
  </div>

  <div class="form-group">
    <label for="m1">Month One:</label>
    <input type="text" class="form-control"name="m1" id="m1"  value="
    <?php if(!empty($row->p_month1)) {
      if($row->p_month1 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month1; 
    }}

?>" >

  </div>
 
  <div class="form-group">
    <label for="m2">Month Tne:</label>
    <input type="text" class="form-control"name="m2" id="m2" value="
   <?php if(!empty($row->p_month2)) {
      if($row->p_month2 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month2; 
    }}

?>" >

  </div>

  <div class="form-group">
    <label for="mone">Month Three:</label>
    <input type="text" class="form-control"name="m3" id="mone" value="
   <?php if(!empty($row->p_month3)) {
      if($row->p_month3 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month3; 
    }}

?>" >

  </div>
  <div class="form-group">
    <label for="m4">Month Four:</label>
    <input type="text" class="form-control"name="m4" id="m4" value="
   <?php if(!empty($row->p_month4)) {
      if($row->p_month4 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month4; 
    }}

?>" >

  </div>
  <div class="form-group">
    <label for="m5">Month five:</label>
    <input type="text" class="form-control"name="m5" id="m5" value="
    <?php if(!empty($row->p_month5)) {
      if($row->p_month5 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month5; 
    }}

?>" >

  </div>
  <div class="form-group">
    <label for="m6">Month Six:</label>
    <input type="text" class="form-control"name="m6" id="m6" value="
    <?php if(!empty($row->p_month6)) {
      if($row->p_month6 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month6; 
    }}

?>" >

  </div>
  <div class="form-group">
    <label for="m7">Month Seven:</label>
    <input type="text" class="form-control"name="m7" id="m7" value="
   <?php if(!empty($row->p_month7)) {
      if($row->p_month7 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month7; 
    }}

?>" >

  </div>
   <div class="form-group">
    <label for="m8">Month Eight:</label>
    <input type="text" class="form-control"name="m8" id="m8" value="
   <?php if(!empty($row->p_month8)) {
      if($row->p_month8 >= 300){
       
         echo '"disabled ="."disabled" ';
   }
  else {
    
    echo $row->p_month8; 
    }}

?>" >

  </div>
  
  


 

</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           <?php if (!empty($_REQUEST['edit'])) { ?>
                <input type="submit" name="submit" id="submit" value="update" class="btn btn-success"form="form1" onClick="return confirm('Are You Sure want to update??')" >
                <input type="hidden" name="p_id" value="<?php echo $row->p_id; ?>" form="form1">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <?php } else {?>
 <button type="submit" name="submit" class="btn btn-primary"form="form1">Add</button>
<button type="reset" name="reset" class="btn btn-dark"form="form1">Reset</button>
<input type="hidden" id="submit" name="submit" value="add" form="form1">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <?php }?>
         
        </div>
        
      </div>
    </div>
  </div>
  
  
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        
        <div class="col-md-11 ml-1 ">
 <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
    
            <tr style="color:#121e2d">
               <th>Sl.no</th>
                 <th>name</th>
              <th>Action</th>
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
            <?php
               
          $sl = 0;
                    $data = $conn->query("SELECT * FROM  payment ");
                    while ($value = $data->fetch(PDO:: FETCH_OBJ)) {
                    $sl++;
                      ?>
           
        
              <tr style="background-color: #8c7f6e;color: white;">
                 <td><?= $sl; ?></td>
                 <td><?= $value->m_name; ?></td>
             <td style="color:#42f4d4;cursor:pointer;"><a href="view_payment.php?edit=<?= $value->p_id; ?><?= urlencode('/ ( ) $ ='); ?>"  
        class="btn btn-primary bg-sm"style="font-size: 8px">Edit</a>
               <a href="actionpages/action_addmembers.php?del=<?= $value->p_id; ?>&submit=delete" 
         onClick="return confirm('Are You Sure want to Delete??')" class="btn btn-danger bg-sm"style="font-size: 8px">Del</a></td>
               
                <td><?= $value->p_price; ?></td>
                <td><?= $value->p_month1; ?></td>
                <td><?= $value->p_month2; ?></td>
                <td><?= $value->p_month3; ?></td>
                <td><?= $value->p_month4; ?></td>
                <td><?= $value->p_month5; ?></td>
                <td><?= $value->p_month6; ?></td>
                <td><?= $value->p_month7; ?></td>
                <td><?= $value->p_month8; ?></td>
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
