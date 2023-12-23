<!doctype html>
<html lang="en">
  <head>
   <?php include('header.php');?>
   
	<?php  
	
	if(@$_GET['res']=='success'){
		echo '<script>
		alert("Request Send Successfully");
		</script>';
	} 
	if(@$_GET['res']=='error'){
		echo '<script>
		alert("Server Error");
		</script>';
	} 
	 
	

	?>
  </head>
  <body>
  
  
  
      <div class="container-fluid">
  
			<?php include('menu.php');?>

	   
	   
	    <div class="row bg-light">
				<div class="col-sm-12 p-0 m-0">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				  
				  <?php 
			 
  include ('Admin/code/connect.php');
	$sel="SELECT * FROM banner order by id desc";
	$res=mysqli_query($conn,$sel);
	$total=mysqli_num_rows($res);
$i=1;
	while($data=mysqli_fetch_array($res)){ 
	
  ?>
					<div class="carousel-item <?php if($i==1){ echo 'active'; } ?>">
					  <img src="image/<?php echo $data['img']?>" class="d-block w-100" alt="...">
					</div>
	<?php $i++; } ?>
				  </div>
				  

				  </div>
				  
				 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </button>
				</div>
				
				</div>
				
				
				
				
		<!-------------End Slider----------->		
				
			
				   
				   
				   <div class="row bg-light p-3">
                   
					
					<div class="col-sm-12 p-4 bg-light">
				   
				   <h2 class="text-center text-dark"><u>Our Sarvies</u></h2>
				   </div>
				   
				   <div class="col-sm-3">
				   				 
					 <div class="card">
					  <div class="card-body">
					     <img src="image/images (1).jpg"/>
						<h5 class="card-title color">Service 1</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Read more</a>
					  </div>
					</div>
									   
				   
				   </div>
				   <div class="col-sm-3">
				     				 
				 <div class="card" >
				  <div class="card-body">
				  <img src="image/images (1).jpg"/>
					<h5 class="card-title color">Service 2</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Read more</a>
				  </div>
				</div>
				   
				   </div>
				   <div class="col-sm-3">
				   
				       				 
				 <div class="card" >
					  <div class="card-body">
					  <img src="image/images (1).jpg"/>
						<h5 class="card-title color">Service 3</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Read more</a>
					  </div>
					</div>
				   
				   </div>
				   <div class="col-sm-3">
				   
				      				 
				 <div class="card" >
				  <div class="card-body">
				  <img src="image/images (1).jpg"/>
					<h5 class="card-title color">Service 4</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content. With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Read more</a>
				  </div>
				</div>
								   
								   
				   </div>
				   
					 
				 
				
				 </div>
				









<!---------End Services ------------>

	

				  <div class="row p-3 bg-white">
				  
				  
					  <div class="col-sm-12 p-4">
				   
				   <h2 class="text-center text-dark"><u>Rooms</u></h2>
				   </div>
				  
					
								  
				  <?php 
			 
			  include ('Admin/code/connect.php');
				$sel="SELECT * FROM room order by id desc";
				$res=mysqli_query($conn,$sel);
				$total=mysqli_num_rows($res);
			$i=1;
				while($data=mysqli_fetch_array($res)){ 
				
  ?>
				     <div class="col-sm-4 mb-4">
					 
					    <div class="card">
						  <img src="image/<?php echo $data['img']?>" class="card-img-top" alt="...">
							 <div class="card-body">
							<h5 class="card-title text-center ">Room <?php echo $data['title'];?></h5>
						  
							<p class="card-text"> <?php echo $data['des'];?></p>
							<a href="book-now.php" class="btn btn-primary">Book Now</a>
						  </div>
						</div>
					 
					 </div>
					 
					<?php $i++; } ?>
					 
					 

				  </div>
				
				
				
				
				
				
				
				
				
				
				
				
				  <div class="row  pb-5 bg-light " >
				   
				   
					 <div class="col-sm-12 p-4">
				   
				   <h2 class="text-center text-dark"><u>Contact Us</u></h2>
				   </div>
				   
				  
						<div class="col-sm-6">
								 
					 
					 <div class="card  p-4 text-left ">
					     <h1 class="text-center text-info"> Any Query</h1><hr>
					<form method="post" action="code/contactcode.php">
					<div class="row">
					   	  <div class="form-group col-sm-6 ">
						<label>Name</label>
						<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
					 <div class="form-group col-sm-6 ">
						<label>Mobile </label>
						<input type="number" name="mobile" class="form-control"placeholder="Mobile">
						
					  </div>
					 <div class="form-group col-sm-6 ">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email">
					  </div>
					  
					    <div class="form-group col-sm-12 ">
						<label>Message</label>
						<textarea type="text" name="message" class="form-control"placeholder="Message"></textarea>
						
					  </div>
<div class="form-group col-sm-12 ">
					  <button type="submit" class="btn btn-primary">Submit</button>
					
							</div>				 
							</div>				 
					 
					 </form>
					 
					 </div>
					 
						</div>
						
						
						<div class="col-sm-6">
						
								<div class="card">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111679.98247028168!2d77.61655886635188!3d28.987387245868966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c64f457b66325%3A0x42faa83387a6be5e!2sMeerut%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1694711448567!5m2!1sen!2sin" style="border:0;width:100%;height:450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
						
						</div>
				     
				</div>
				
				
				
				    <div class="row text-center bg-white">
				
				     <div class="col-sm-10 offset-sm-1">
					 
					     <h1> <u>Review</u></h1>
						 
						 <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<h4>🌟🌟🌟🌟🌟</h4>

</p>
					</div>
					<div class="carousel-item">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
<h4>🌟🌟🌟🌟🌟</h4>
</p>
					</div>
					<div class="carousel-item">
					  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					  <h4>🌟🌟🌟🌟🌟</h4>

</p>


					</div>
					
					 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-slide="prev">
					<span class="carousel-control-prev-icon  bg-dark p-2" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1" data-slide="next">
					<span class="carousel-control-next-icon  bg-dark p-2" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </button>
				  </div>
				  

				  </div>
					 
					 
					 
					 
					 </div>
				
				
				
				     </div>
				



                        <div class="row  text-center bg-light">
				
				     <div class="col-sm-10 offset-sm-1 p-4">
					 
					     <h1> <u>FAQ</u></h1>
						
						
						<div class="accordion" id="accordionExample">
  <div class="card text-left">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
      </div>
    </div>
  </div>
  <div class="card text-left">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Some placeholder content for the second accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
  <div class="card text-left">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
</div>
					 
					 
					 
					 </div>
				
				
				
				     </div>
				

<?php include('footer.php');?>
					 
					





				
				
				
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