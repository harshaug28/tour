<?PHP 
$server="localhost";
$username="root";
$password="";
$database="tour";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con)
{
    die("Connection failed ".mysqli_connect_error());
}

$name=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$text=$_POST['text'];
$sql="INSERT INTO `tour`(`Email`,`Password`,`Phone`,`text`) values ('$password','$password','$phone','$text');";
 
if($con->query($sql)==true)
{
    $insert=true;
}
else{
    echo "Error: $sql <br> $con->error";
}
 $con->close();
}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>tour and travels</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
  
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand text-capitalize" href="#">patel tour and travels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         branches
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Goregaon</a>
          <a class="dropdown-item" href="#">Churchgate</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Thane</a>
          </div>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="desert.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="sunset.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="city.jpg"mahal.jpg alt="Third slide">
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
        </header>
        <section>
        <div class="container-fluid">
            <h1 class="text-center  text-muted text-capitalize pt-5">about us</h1>
            <hr class="w-50 mx=auto pb-5">
            <div class="row">
  <div class="col-sm-4">
    
                <img src="2.jpg" class="img-fluid pl-5 pt-5"></div>
  <div class="col-sm-8" pt-5>
<h1 class="text-primary text-capitalize">how we tour </h1>
      <hr>
<p>We India Tours and Travels, never compromise in quality and always believe in giving service at lowest price and higher satisfaction of customers so that customer should always comeback with their lover and dear in future. Our customer is our representative for our service and honesty. Because of reputation with vendor we get best deal in all sectors and Because of vast experience we make package at very economical price. We believe in making relation rather than selling our product So you will feel friendly people all over destination, not our counter part . Our experience and friendly team will give you atmost satisfactory information and support for your all your calls and queries. We work from 7.30 am to 10.30pm just to render service to our customers. Kindly find below the area of operation that we are specialized in
</p>
                <button class="btn bg-primary text-white">read more</button>
                
                </div>
            </div>
            </div>
        </section>
        
        <section>
         <div class="container-fluid">
            <h1 class="text-center  text-muted text-capitalize pt-5"> offer available</h1>
            <hr class="w-50 mx=auto pb-5 ">
             
              <div class="row text-center mb-4">
  <div class="col-lg-4 col-md-4 col-12">
    
             <div class="card" style="width:400px">
  <img class="card-img-top" src="tajmahal.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-capitalize">tajmahal</h4>
    <a href="#" class="btn btn-primary">book</a>
  </div>
</div>
         
                  </div>
                    
  <div class="col-lg-4 col-md-4 col-12">
    
             <div class="card " style="width:400px">
  <img class="card-img-top" src="hawa%20mahal.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-capitalize">hawa mahal</h4>
    <a href="#" class="btn btn-primary">book</a>
  </div>
</div>
         
 </div>

    
  <div class="col-lg-4 col-md-4 col-12 ">
    
             <div class="card" style="width:400px">
  <img class="card-img-top" src="goldentemple.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title text-capitalize">golden teample</h4>
    <a href="#" class="btn btn-primary">book</a>
  </div>
</div>
         
                  </div>
             </div>
            </div>
     
             </section>
        <section  class="bg-primary text-white">
        <article class="py-5 text-center">
            <div>
            <h3 class="display-4 ">91 123456987</h3>
                <p>For best service call us.</p>
                <button class="btn btn-warning">contact now</button>
            </div>
            
            
            </article>
        
        
        </section>
         <section>
         <div class="container-fluid">
            <h1 class="text-center  text-muted text-capitalize pt-5"> images of tour</h1>
            <hr class="w-50 mx=auto pb-5 ">
             <div class="row">
             <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="surf.jpg" class="img-fluid">
                 
                 </div>
                 <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="1.jpg" class="img-fluid">
                 
                 </div>
                 <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="sunset.jpg" class="img-fluid">
                 
                 </div>
                 <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="desert.jpg" class="img-fluid">
                 
                 </div>
                 <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="sealink.jpg" class="img-fluid">
                 
                 </div>
                 <div class="col-lg-4 col-md-2 col-1 mb-4">
                 <img src="1.jpg" class="img-fluid">
                 
                 </div>        
             </div>
             </div>
             </section>
         <section  class="bg-primary mt=5" >
        <article class="py-5 ">
            <div class="text-center text-white">
            <h3 class="display-4  text-capitalize">to take membership join us</h3>
                <p>join us to get upcoming tour details and best discount.</p>
                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">join now</button>
            </div>
              </div> <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-capitalize">personal detail</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="/index.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
                 <div class="form-group">
    <label for="number">mobile number:</label>
    <input type="phone" name="phone" class="form-control" placeholder="number" id="number">
  </div>
                <div class="form-group">
                <label>textarea</label>
                <textarea name="text" class="form-control"></textarea>
                
                </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button name="submit" class="btn btn-primary">Submit</button>
</form>
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
 </article>
 </section>
       
        
        
        
            
        
        
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>