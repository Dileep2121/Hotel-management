
<html lang="en">
  <head>
    <?php include('header.php');?>
  </head>
  <body>
  
  
      <div class="container-fluid">
	  
	  <?php include('menu.php');?>
		     
	   
	   
	   
	   
	   
	   
	    <div class="row header_img">
		
		
		   <div class="col-sm-12 text-center">
		
		
		        <h1>Book Now</h1>
				<h6>Home / Book Now</h6>
		
		
		
		</div>
		</div>
	  
	  
	   
	   
	   
	   
	   
	   
	   
	      <div class="row m-3 ">
		        
			<div class="col-sm-6">

			
			    								 
<div class="card p-5 text-left">

<h1 class="text-center text-info color"> Book Now</h1><hr>
					<form action="code/bookingcode.php" method="post">
					<div class="row">
					   	  <div class="form-group col-sm-6 ">
						<label>Name</label>
						<input type="text" name="name"class="form-control" placeholder="Name">
						</div>
					 <div class="form-group col-sm-6 ">
						<label>Mobile </label>
						<input type="number" name="mobile"class="form-control"placeholder="Mobile">
						
					  </div>
					 <div class="form-group col-sm-6 ">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email">
					  </div>
					  
					    <div class="form-group col-sm-12 ">
						<label>Adderes</label>
						<textarea type="text" name="adderes" class="form-control"placeholder="adderes"></textarea>
						
					  </div>
					  
					  <div class="form-group col-sm-12 ">
						<label>select users</label>
						<select type="text"  name="select"class="form-control"placeholder="users">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
						
					  </div>
					  
					  
					  <div class="form-group col-sm-12 ">
						<label>Booking Date</label>
						<input type="date" name="bookingdate" class="form-control"placeholder=""></input>
						
					  </div>
					  
					  					  <div class="form-group col-sm-12 ">
						<label>Booking Time</label>
						<input type="time" name="bookingtime" class="form-control"placeholder="time"></input>
						
					  </div>

					 
							</div>				 
					 
					

</div>
			
			</div>
			<div class="col-sm-6">
			<h2 class="text-center p-5 color">Payment</h2>
			<div class="row">
			   
			<div class="col-sm-8">
			<div class="card">
			<span>Each room features lacquered counters and headboards made with precious woods, lending warmth to the space. Guest rooms have been designed by veteran designers, and each one is unique. Our hotel is cozy at just ten rooms, but we provide hospitality that will have you coming back again soon.</span>
			
			
			
			</div>
			
			</div>
			<div class="col-sm-4">
			<div class="card">
			
			   <img src="image/room4.jpg" class="" alt="...">
		
			
			</div>
			
			</div>
			
			
			</div>
			
			
			  <div class="row m-4">
			  
			    <div class="col-sm-12">
				   
				   <div class="card p-4">
				   
                       <table class="table table-bordered">
						 
						  <tbody>
							
							<tr>
							  <th scope="row">Room Rent</th>
							  <td>500 rs/</td>
							</tr>
							
							
							<tr>
							  <th scope="row">Day</th>
							  <td>1 Day</td>
							</tr>
							
							<tr>
							  <th scope="row">G-S-T</th>
							  <td>18%</td>
							</tr>
							
							
							<tr>
							  <th scope="row">Totel Pay</th>
							  <td>600%</td>
							</tr>
							
							
						  </tbody>
						</table>


				    <button type="submit" class="btn btn-primary btn-block">Submit</button>
					
				   </div>
				
				
				
				
				 </form>
				</div>
			  
			  
			  </div>
			
			
			</div>
			

			 
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