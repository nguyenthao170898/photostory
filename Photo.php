<?php 
include 'header.php';
 ?>
 
 <script> 
$(document).ready(function(){
    $("#addlink").click(function(){
        $("#table").slideDown("slow");
    });
});
</script>
 
 <!-- works -->
<div id="works"  class=" clearfix grid">
<center><h1>Photo</h1></center> 
<div class="wraper" id="addlink" style="position:absolute;top:100px; right:40px;">
	<a href="#" class="btn b3tn-success pull-right" data-toggle="modal" data-target="#myModal" ><i class="fa fa-plus"></i> Add Photo</a>
	<br>
	
</div>
<!--table-->
<div class="container" style="display:none" id="table">
	<div class="row">
    	<div class="container" id="formContainer">

          <form action="upload.php" class="form-signin" role="form" method="POST" id="add-product-form">
            <h3 class="form-signin-heading">Add New Photo</h3>
            <a href="#" id="flipToRecover" class="flipLink">
              <div id="triangle-topright"></div>
            </a>
            <input type="text" class="form-control" name="title" placeholder="name" required>
            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" onchange="readURL(this);" accept="images/*" required>
            <input type="text" class="form-control" name="place"  placeholder="place" required>
            <input type="date" class="form-control" name="time"  required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Add</button>
          </form>
    
          

        </div> <!-- /container -->
	</div>
</div>
</div>
<script>
    checkme.onchange = function(){
        UserSend.disabled = !this.checked;
        userImage.disabled = !this.checked;
        userName.disabled = !this.checked;
        // userPhone.disabled = !this.checked;
        userEmail.disabled = !this.checked;
        userPlace.disabled = !this.checked;
        editPic.style.display = this.checked ? 'block' : 'none';
    };
</script>
<?php 
include 'product.php';
  ?>
<!-- works -->

 <<?php 
include 'footer.php';
  ?>