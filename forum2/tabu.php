
<?php
  $showAlert=false;
  if ($_SERVER['REQUEST_METHOD']== "POST") {
    include 'dbconnect.php';

    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $writter=$_POST['writter'];

    $sql= "INSERT INTO `forumpractice` ( `title`, `summary`, `writter name`) VALUES ( '$title', '$summary', '$writter')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      $showAlert=true;
    }

  }


?>




<link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<?php
  if ($showAlert) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Suceess!</strong> Artical was added.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  
}
  
?>

<div class="container">

<form action="/forum2/index.php" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
  <label for="summary" class="form-label">Summary</label>
  <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
</div>

  <div class="mb-3">
  <label for="writter" class="form-label">Writer Name</label>
  <textarea class="form-control" id="writter" name="writter" rows="3"></textarea>
</div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




<div class="container my-4">
<h2 class="text-center">Articals</h2>
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Title</th>
      <th scope="col">Summary</th>
      <th scope="col">Writter Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

     <?php
      
      $sql = "SELECT * FROM `forumpractice`";
      $result=mysqli_query($conn,$sql);
      $sn=0;
      while ($row=mysqli_fetch_assoc($result)) {
       $sn= $sn+1;
        echo ' <tr>
                  <th scope="row">'.$sn.'</th>
                  <td>'.$row['title'].'</td>
                  <td>'.$row['summary'].'</td>
                  <td>'.$row['writter name'].'</td>
                  <td><a href="/forum2/edit.php?sn= e'.$row['sn'].'" >Edit</a> <a href="/forum2/delete.php?sn='.$row['sn'].'">Delete</a></td>
      </tr>';
        
      }
      
     ?>

 
    
  </tbody>
</table>


</div>

<hr>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>