<?php
include "includes/header.php";
include "includes/navbar.php";
?>

<section>
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-9 col-md-9 col-sm-9 col-12">
             <!-- Here we are present the crousel  -->
             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/1.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Beleive Yourself</h5>
    <p>&copy; Virus Tutorial</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/2.jpeg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Don't Give Up</h5>
    <p>&copy; Virus Tutorial</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/3.jpeg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Always Positive</h5>
    <p>&copy; Virus Tutorial</p>
  </div>

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     
       </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-12">
           <?php
              include "includes/sidebar.php";
           ?>

          </div>
     </div>
   </div>
   </section>

   <section>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
         <h1 class=" text-center pt-4">Services</h1>
			    <hr class="w-25 mx-auto pt-1">
            <!--tootip content-->
            <div class="courses">
            <a href="#"  class="btn btn-primary">Java</a>
            <a href="#"  class="btn btn-secondary">Php</a>
            <a href="#"  class="btn btn-success">Javascript</a>
            
            <a href="#"  class="btn btn-warning">Web Devolopement</a>
            </div>
            <br>
            <!-- end
           <img src="image/python.jpeg" class="img-fluid"  height="200px" alt="">
           -->
           <div class="img" style="background-image: url('image/python.jpeg'); height:250px;">
                <h1 class="text-center">PHP</h1>
                <center> <p class="text-center text-dark">Transform your life through education</p>
                <span class="text-center"><b>Virus</b> launched a new career in software development by taking courses on <b>Virus Tutorial.</b> 
                  <br> What will you be able to do?</span>
                </center>
           </div>
         </div>
        
       </div>
     </div>
   </section>
<!--------------------->
   <h3 class="text-center text-secondary">Course Content</h3>
   <hr class="w-25 mx-auto pt-1">
<section>
  <div class="container-fluid">
    <div class="row text-center mb-5">
 
      <div class="col-lg-3 col-md-4 col-sm-6 col-12" >   
          <!-- card -->
          
          <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="image/webdevoloper.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Java</h5>
    <p class="card-text">To learn from scratch to click here
      it just at &#8377.450 <strike>&#8377.1000</strike> .</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Click Here</a>
  </div>
          </div>
          <!--card end-->

      </div>

      <!--2-->

      <div class="col-lg-3  col-md-4 col-sm-6 col-12" >
        
          <!-- card -->
          
          <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="image/web1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Php</h5>
    <p class="card-text">To learn from scratch to click here
      it just at &#8377.250 <strike>&#8377.500</strike>  .</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPhp">Click Here</a>
  </div>
          </div>
          <!--card end-->

      </div>


      <!--3-->
      <div class="col-lg-3  col-md-4 col-sm-6 col-12" > 
          <!-- card -->
          
          <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="image/web2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Javascript</h5>
    <p class="card-text">To learn from scratch to click here
      it just at &#8377.350 <strike>&#8377.800</strike> .</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaljavascript">Click Here</a>
  </div>
          </div>
          <!--card end-->

      </div>

     
      <!--4-->
      <div class="col-lg-3  col-md-4 col-sm-6  col-12" > 
          <!-- card -->
          
          <div class="card" style="width: 15rem;">
  <img class="card-img-top" src="image/web3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Web Devolopement</h5>
    <p class="card-text">To learn from scratch to click here
      it just at &#8377.500 <strike>&#8377.900</strike> .</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalwebdevolopement">Click Here</a>
  </div>
          </div>
          <!--card end-->

      </div>

    </div>
  </div>
</section>


<section>
		<div class="container-fluid">
			<h1 class=" text-center pt-4">About Us</h1>
			<hr class="w-25 mx-auto pt-1">
		</div>
		
		<div class="row mb-2 mx-2">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="image/school.jpeg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h1>Who am I ?</h1>
				<hr>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
				when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				It has survived not only five centuries, 
				but also the leap into electronic typesetting, remaining essentially unchanged</p>
				<a href="#" class="btn btn-primary">Know More</a>
			</div>
			
		</div>
  </section>
   <!--another-->
  <section class="bg-primary mb-4">
	<article class="py-5  ">
		<div class="text-center text-white">
			<h3 class="display-4 ">Want To Join</h3>
			<p class="text-capitalize ">If You want to teach with me </p>
			<button class="btn btn-warning " data-toggle="modal" data-target="#mymodal">Join Now</button>
</div>
		
	</article>
</section>

<?php
include "includes/modal.php";
?>
  <?php
  include "includes/footer.php";
  ?>

 