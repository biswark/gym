<?php 
require('header.php');
 require_once('actionpages/db/db.php');
 ?>
  <div class="content">
    <div id="jum">
 <p> WELCOME ADMIN  (You Can Customorize And Access Your File...)</p> 
  
</div>



 <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="card-row">
  <div class="card bg-warning">
    <div class="card-body text-center">
     <p class="card-text"><i class="ion-ios-bell icon icons11"></i> Payment
     
      <span class="badge badge-secondary">
        <?php 
        $sql1 = "SELECT count(p_id) FROM `payment` "; 
$result1 = $conn->prepare($sql1); 
$result1->execute(); 
$number_of_rows1 = $result1->fetchColumn();
      
       echo $number_of_rows1;
         ?>

      </span>
    </p>
    </div>
     <div class="card-footer bg-white text-right" id="n">
    <a href="view_payment.php" class="text-right">+Detail</a>
  </div>
  </div>
         </div>
</div>
           <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="card-row">
  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text"><i class="ion-android-contacts icon icons11"></i>New members
        <span class="badge badge-secondary">
 <?php 
        $sql2 = "SELECT count(m_id) FROM `addmember` "; 
$result2 = $conn->prepare($sql2); 
$result2->execute(); 
$number_of_rows2 = $result2->fetchColumn();
      
       echo $number_of_rows2;
         ?>
      </span></p>
    </div>
     <div class="card-footer bg-white text-right" id="o">
    <a href="add_member.php" class="text-right">+Detail</a>
  </div>
  </div>
         </div>
</div>
           <div class="col-md-3 col-sm-6 col-xs-6">   
              <div class="card-row">
  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text"><i class="ion-email-unread icon icons11"></i> New Instruments<span class="badge badge-secondary">
      <?php 
        $sql3 = "SELECT count(ins_id) FROM `instruments` "; 
$result3 = $conn->prepare($sql3); 
$result3->execute(); 
$number_of_rows3 = $result3->fetchColumn();
      
       echo $number_of_rows3;
         ?>
    </span> </p>
    </div>
     <div class="card-footer bg-white text-right" id="e">
    <a href="view_instruments.php" class="text-right">+Detail</a>
  </div>
  </div>
 
         </div>        
   
</div>
           <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="card-row">
  <div class="card bg-info">
    <div class="card-body text-center">
      <p class="card-text"><i class="ion-ios-chatboxes-outline icon icons11"></i>Visitor<span class="badge badge-secondary">
<?php 
        $sql4 = "SELECT count(v_id) FROM `visitors` "; 
$result4 = $conn->prepare($sql4); 
$result4->execute(); 
$number_of_rows4 = $result4->fetchColumn();
      
       echo $number_of_rows4;
         ?>
      </span>
       </p>
    </div>
     <div class="card-footer bg-white text-right" id="f">
    <a href="add_newvisitors.php" class="text-right">+Detail</a>
  </div>
  </div>
         </div>
</div>

  <div class="col-md-6 "style="margin-top: 40px ;">
  <div id="accordion">

  <div class="card">
    <div class="card-header" id="header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        Collapsible From
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
       <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
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
