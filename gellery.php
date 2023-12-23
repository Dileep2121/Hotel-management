<!doctype html>
<html lang="en">
  <head>
    <?php include('header.php');?>
  </head>
  <body>
  
  
      <div class="container-fluid">
	  
	  <?php include('menu.php');?>
		     
	   
	   
	   
	   
	   
	   
	    <div class="row header_img">
		
		
		   <div class="col-sm-12 text-center">
		
		
		        <h1>Gallery</h1>
				<h6>Home / Gallery</h6>
		
		
		
		</div>
		</div>
	  
	  
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	      <div class="row m-3 ">
		        
			 <?php 
			 
  include ('Admin/code/connect.php');
	$sel="SELECT * FROM gallery";
	$res=mysqli_query($conn,$sel);
$i=1;
	while($data=mysqli_fetch_array($res)){
  ?>
				
		     <div class="col-sm-4 p-2">
			 
			 
			 <div class="card" >
					  <img src="image/<?php echo $data['img']?>" class="card-img-top" alt="...">

					</div>
			 
			 
			 
			 </div>
	<?php } ?> 
		  
		  </div>
	  
	       
	     <?php include('footer.php');?>
			
	            
	            
	   </div>
	   
	   
	   </div>
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>