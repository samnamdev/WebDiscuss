<?php
    session_start();
   echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>
        
         
       </ul>';

     
      
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
 echo 
  '<form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
  <P class="text my-0 mx-2">    welcome '. $_SESSION['name'].'</p> 
      <a href="/forum2/logout.php" class="btn btn-outline-success ml-2" >Logout</a>
  </form>';
}
        
else {
  echo '<button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</button>
  <button class="btn btn-outline-success mx-2 " data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>';
  
}






    echo '</div>
   </div>
 </nav>';
    
include 'signupmodal.php';
include 'loginmodal.php';


// if ($showAlert) {
//   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Suceess!</strong> You can now log in.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//   </div>';
  
// }





?>
