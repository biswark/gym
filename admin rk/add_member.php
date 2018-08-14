<?php
 require_once('header.php');
 require_once('actionpages/db/db.php');
 ?>

<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[1];
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



 <div class="row" style="margin-top:10px;"> 
                

       <div class="col-md-3  " id="profile" >           
      
  <?php   
          if (empty($_REQUEST['edit'])) {
            $edit_record = '0';
          } else {
           $edit_record = $_REQUEST['edit'];
		  }
       
         $run= $conn->prepare("SELECT * FROM  addmember WHERE m_id=:m_id");
          $run->execute(array('m_id' => $edit_record));
         $row = $run->fetch(PDO::FETCH_OBJ);
	
		
?>
		   <?php if(!empty($_REQUEST['edit'])) {?>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Update Your Memebers
		   </button><?php }  else { ?>
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Your Memebers
		   </button><?php }?>
     <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
			
		
        <div class="modal-header">
	
          <h4 class="modal-title">Modal Heading&emsp;</h4>
	
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		
          <form action="actionpages/action_addmembers.php"id="form1" method="post">
         <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control"name="name" id="name" value="<?php if(!empty($row->name)) {
	echo $row->name; }?>" autofocus>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control"name="email" id="email" value="<?php if(!empty($row->email)){
	echo $row->email; }?>">
  </div>
  <div class="form-group">
    <label for="mob">Mob No:</label>
    <input type="text" class="form-control"name="mobno" id="mobno" value="<?php if(!empty($row->email)){
	echo $row->email; }?>">
  </div>
 
  <div class="form-group">
    <label for="birth">Death Of Birth:</label>
    <input type="date" class="form-control"name="birth" id="birth" value="<?php if(!empty($row->birth)){
	echo $row->birth; }?>">
  </div>
  
   <div class="form-group">
    <label for="join">Join Date:</label>
    <input type="date" class="form-control"name="join" id="join"  value="<?php if(!empty($row->joindt)){
	echo $row->joindt; }?>">
  </div>
   
   <div class="form-group">
    <label for="shift">Shift Time:</label>
    <select class="form-control" id="sel1" name="shift">
      <option>Select</option>
    <option <?php 
	if(!empty($row->shift)){
	if ($row->shift === 'morning') {
                      echo 'selected';
	}}?> value="morning">morning</option>
    <option <?php
     if(!empty($row->shift)){
	if ($row->shift === 'afternoon') {
                      echo 'selected';
	}}?> value="afternoon">afternoon</option>
    <option <?php 
	if(!empty($row->shift)){
	if ($row->shift === 'evening') {
                      echo 'selected';
	}}?> value="evening">evening</option>
    
  </select>
  </div>
  <div class="form-group">
    <label for="occupation">Occupation:</label>
    <input type="text" class="form-control"name="occupation" id="occupation" value="<?php if(!empty($row->occupation)){
	echo $row->occupation; }?>">
  </div>
  <div class="form-group">
    <label for="shift">Renew Plan:</label>
    <select class="form-control" name="plan" id="sel1">
      <option>select</option>
    <option <?php 
	if(!empty($row->plan)){
	if ($row->plan === '8months') {
                      echo 'selected';
	}}?> value="8months">8months</option>
    
  
    
  </select>
  </div>
  <div class="form-group">
     Sex:
    <label class="radio-inline">
      <input type="radio" name="optradio"  <?php
	  if(!empty($row->sex)){
	  if($row->sex === 'male'){
	  echo 'checked';}}?> value="male">male
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio"  <?php 
	  if(!empty($row->sex)){
	  if($row->sex === 'female'){
	  echo 'checked'; }}?> value="female">female
    </label> 
  </div>
  <div class="form-group">
    <label for="blood">Blood Group:</label>
    <input type="text" class="form-control"name="blood" id="Blood"  value="<?php if(!empty($row->bloodgp)){
	echo $row->bloodgp; }?>">
  </div>
  <div class="form-group">
  <label for="adress">Address:</label>
  <textarea class="form-control"  name="address" id="editor"><?php if(!empty($row->address)){
	echo $row->address; }?></textarea>
</div>
</form>
        </div>
       <div>
	  
		

	
	   </div> 
        <!-- Modal footer -->
        <div class="modal-footer">
         
  <?php if (!empty($_REQUEST['edit'])) { ?>
                <input type="submit" name="submit" id="submit" value="update" class="btn btn-success"form="form1" onClick="return confirm('Are You Sure want to update??')" >
                <input type="hidden" name="m_id" value="<?php echo $row->m_id; ?>" form="form1">
              <?php } else {?>
 <button type="submit" name="submit" class="btn btn-primary"form="form1">Add</button>
<button type="reset" name="reset" class="btn btn-dark"form="form1">Reset</button>
<input type="hidden" id="submit" name="submit" value="addmemeber" form="form1">
			  <?php }?>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  </div>  

 
</div>

     
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 20px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header"style="background: linear-gradient( white,#c1c956);cursor:pointer;">
      <a class="collapsed card-link" style="color:black" data-toggle="collapse" href="#collapseTwo">
        Serach Memebers<a href="#"><i class="ion-load-a icon i9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        
        
        <form class="" action="/action_page.php">
          <div class="row">
       <div class="col-md-4">
 <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control"name="name" id="name">
  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
    <label for="shift">Shift Wise:</label>
    <input type="text" class="form-control"name="shift" id="shift">
  </div>
</div>
<br>
 <div class="col-md-4">
 <div class="form-group">
    <label for="enroll">Enroll No:</label>
    <input type="text" class="form-control"name="enroll" id="enroll">
  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
    <label for="adress">Adress:</label>
    <input type="text" class="form-control" name="adress" id="adress">
  </div>
</div>

<div class="col-md-4" style="margin-top:30px;">
  
 <button type="submit" name="submit" class="btn btn-primary">Search</button>
</div>
</div>
</form>


      </div>
    </div>
  </div>
</div>
<div class="col-md-12  "style="margin-top:20px;">
  <table id="example" class="table table-striped table-bordered " style="width:100%">
        <thead>
		
            <tr style="color:#121e2d">
			 <th>Sl.no</th>
                 <th>Name</th>   
                <th>email</th>
                <th>Mobile</th>
                <th>JoinDt</th>
                <th>Shift</th>
            <th>Occupation</th>    
				<th>Action</th>
        <th>Check Membership</th>
        
				<th>Birth</th>
                <th>plan</th>
                <th>Sex</th>
                <th>Blood Gp</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
		 <?php
               
				  $sl = 0;
                    $data = $conn->query("SELECT * FROM  addmember ");
                    while ($value = $data->fetch(PDO:: FETCH_OBJ)) {
                    $sl++;
                      ?>
           
            <tr style="background-color: #8c7f6e;color: white;">
                <td><?= $sl; ?></td>
                <td><?= $value->name; ?></td>
                <td><?= $value->email; ?></td>
                <td><?= $value->mobno; ?></td>
                <td><?= $value->joindt; ?></td>
                <td><?= $value->shift; ?></td>
                
				
         <td><?= $value->occupation; ?></td>
         <td style="color:#42f4d4;cursor:pointer;"><a href="add_member.php?edit=<?= $value->m_id; ?><?= urlencode('/ ( ) $ ='); ?>"  
        class="btn btn-primary bg-sm"style="font-size: 8px">Edit</a>
               <a href="actionpages/action_addmembers.php?del=<?= $value->m_id; ?>&submit=delete" 
         onClick="return confirm('Are You Sure want to Delete??')" class="btn btn-danger bg-sm"style="font-size: 8px">Del</a></td>
         <td style="color:#42f4d4;cursor:pointer;"><a href="check_membership.php?check=<?= $value->m_id; ?><?= urlencode('/ ( ) $ ='); ?>"  
        class="btn btn-success bg-sm"style="font-size: 9px">Check</a>
          </td>
			      <td><?= $value->birth; ?></td>
                <td><?= $value->plan; ?></td>
                <td><?= $value->sex; ?></td>
                <td><?= $value->bloodgp; ?></td>
                <td><?= $value->address; ?></td>
                	<?php }?>
					
            </tr>
          
          
           
           
        </tbody>
       
    </table>
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
