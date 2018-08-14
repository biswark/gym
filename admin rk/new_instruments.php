<?php 
 require_once('header.php');
 require_once('actionpages/db/db.php');
 ?>


  <div class="content">
    <div id="jum">
 <p> WELCOME ADMIN  (You Can Customorize And Access Your File...)</p> 
  
</div>



 <div class="row" style="margin-top:10px;">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.html" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>
    <div class="col-md-3 offset-md-6 " >           
      
   <a href="view_instrument.php" class="btn btn-success btn-md">Click to View ..</a>
</div>
</div>
          
<div class="row">
  <div class="col-md-12 "style="margin-top: 20px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header" style="background: linear-gradient( #c1c956,white, #b24595); ">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
      Add Instrument Details<a href="#"><i class="ion-android-bicycle icon i9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
         <?php   
          if (empty($_REQUEST['edit'])) {
            $edit_record = '0';
          } else {
           $edit_record = $_REQUEST['edit'];
		  }
       
         $run= $conn->prepare("SELECT * FROM  instruments WHERE ins_id=:m_id");
          $run->execute(array('m_id' => $edit_record));
          $row = $run->fetch(PDO::FETCH_OBJ);
		  
		
?>
        
        <form class="" action="actionpages/action_instruments.php" method="post" 
        enctype="multipart/form-data">
          <div class="row">
       <div class="col-md-4">
 <div class="form-group">
    <label for="ename">Instrument Name:</label>
    <input type="text" class="form-control"name="ename" id="ename" value="<?php if(!empty($row->ins_name)){
	echo $row->ins_name; }?>" autofocus>
  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
    <label for="bname">Brand Name:</label>
    <input type="text" class="form-control"name="bname" id="bname" value="<?php if(!empty($row->brand_name)){
	echo $row->brand_name; }?>">
  </div>
</div>
<br>
 <div class="col-md-4">
 <div class="form-group">
    <label for="tquantity">Total Quantity:</label>
    <input type="number" class="form-control"name="tquantity" id="tquantity" value="<?php if(!empty($row->total_quantity)){
	echo $row->total_quantity; }?>">
  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
    <label for="tquantity">Price Quantity:</label>
    <input type="text" class="form-control" name="pquantity" id="pquantity" value="<?php if(!empty($row->p_quantity)){
	echo $row->p_quantity; }?>">
  </div>
</div>

 <div class="col-md-4">
 <div class="form-group">
    <label for="pdate">Purchese Date:</label>
    <input type="date" class="form-control" name="pdate" id="pdate" value="<?php if(!empty($row->purchasedt)){
	echo $row->purchasedt; }?>">
  </div>
</div>
 <div class="col-md-4">
            <div class="form-group">
    <label for="sel1">Maintenance Period:</label>
    <select class="form-control" name="main" id="sel1">
      <option value="0">select</option>
      <option <?php 
	if(!empty($row->m_period)){
	if ($row->m_period === '6months') {
                      echo 'selected';
	}}?> value="6months">6 Months</option>
    <option <?php 
	if(!empty($row->m_period)){
	if ($row->m_period === '8months') {
                      echo 'selected';
	}}?> value="8months">8months</option>
  </select>
  </div>
</div>
 <div class="col-md-4">
 <div class="form-group">
          <label for="image">Images:</label>
                <input type="file" class="form-control" name="file" id="image"  value="<?php if(!empty($row->images)) {
                echo $row->images;  }  ?>">
              
         </div>
     </div>
   

<div class="col-md-4" style="margin-top:30px;">

  <?php if (!empty($_REQUEST['edit'])) { ?>
                <input type="submit" name="submit" id="submit" value="update" class="btn btn-success" onClick="return confirm('Are You Sure want to update??')" >
                <input type="hidden" name="ins_id" value="<?php echo $row->ins_id; ?>" >
              <?php } else {?>

 <button type="submit" name="submit" class="btn btn-primary">Add</button>
 <input type="hidden" name="submit" value="addinstrument">
 			  <?php }?>
 
</div>
</div>
</form>


      </div>
    </div>
  </div>
</div>

  
</div>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
</body>
</html>
