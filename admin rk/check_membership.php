<?php 
 require_once('header.php');
 require_once('actionpages/db/db.php');
 ?>

  <div class="content">
    <div id="jum">
 <p> WELCOME ADMIN  (You Can Customorize And Access Your File...)</p> 
  
</div>
 <?php   
          if (empty($_REQUEST['check'])) {
           echo '<script type="text/javascript">'; 
        echo 'alert("Somethings Wrong")'; 
        echo '</script>'; 
    echo "<script>window.location = 'add_member.php'</script>";
          } else {
           $check_record = $_REQUEST['check'];
      
       
         $run= $conn->prepare("SELECT * FROM  addmember WHERE m_id=:m_id");
          $run->execute(array('m_id' => $check_record));
          $row = $run->fetch(PDO::FETCH_OBJ);
      
    }?>


 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      
  
    <a href="index.html" class="btn btn-secondary btn-md">Back To Dashbored</a>
  </div>

        
</div>
          <div class="dropdown-divider"></div>
         
<div class="row">
  <div class="col-md-12 "style="margin-top: 20px ;">
    <div id="accordion">
    <div class="card">
    <div class="card-header bg-danger progress-bar progress-bar-striped progress-bar-animated" style="height:50px">
      <a class="collapsed card-link"id="mem" data-toggle="collapse" style="color: white;padding-top: 5px"href="#collapseTwo">
      Check Membership<a href="#"><i class="ion-ios-search-strong icon I9 ml-2"></i>
      </a>
    </div>
    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
      <div class="card-body">
      
          <form action="" method="post" >
 <div class="row">
            <div class="col-md-4">
            <div class="form-group">
    <label for="sel1">Member Name:</label>
    <select class="form-control" id="sel1">
      <option value="<?= $row->m_id; ?>"><?= $row->name; ?></option>
  </select>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label for="date">Join Date</label>
   <input type="text" class="form-control"name="jdate" id="jdate" value="<?= $row->joindt; ?>">
    
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label for="date2">Today Date</label>
    <input type="date" name="date2" class="form-control" id="date2">
    
  </div>
</div>

         
        </div>
         </form>
   <div class="col-md-4"style="margin-top:33px;">
  
    <button type="submit" onclick="myFunction()" class="btn btn-dark">Check</button>
  </div>
      </div>
    </div>
	
	<script>
	
	function myFunction() {
	var input1 = document.getElementById("jdate").value;
	var input2 = document.getElementById("date2").value;
	var d = Date.parse(input1);
	var e = Date.parse(input2);
	 var timeDiff = e - d;
	var daysDiff = Math.round(timeDiff / (1000 * 60 * 60 * 24));
	
	if(daysDiff <= 245){
		//document.getElementById("demo).style.color = "blue";
		document.getElementById("demo").innerHTML = daysDiff + " "+"days"+ "  "+"Remains";}
	else{var due=daysDiff - 245;
		document.getElementById("demo2").innerHTML = due  +"  "+"days" +" "+"Before"+"-"+"subscription is over";}
	
	
	}
	

	</script>
     <div class="card-footer bg-light">
      <div id="demoH" >
        <!--<button type="button" class="close" data-dismiss="alert">&times;</button>-->
		
  <p id="demo" style="color:green"> </p> 
    <p id="demo2" style="color:red"> </p> 
</div>
  
  
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
