<?php 

  include("Crude.php");
  
  if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    addStudent($data);
}

?>
<!DOCTYPE html>
<html>
    
        <head>
            <link rel="stylesheet" href="bootstrap.min.css">

        </head>
   <body>

       <div class="row">
       <div class="col-md-3">

       </div>
       <div class="col-md-6">
        <form method="post">
            <label for="email">Name:</label>
            <input type="email" class="form-control" name="frm[name]" id="email"><br>
            <label for="email">Last Name:</label>
            <input type="email" class="form-control" name="frm[lastname]" id="email"><br>
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="frm[email]" id="email"><br>
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="frm[password]" id="pwd">
           
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
          </form>
        </div>
          <div class="col-md-3">

          </div>
        </div>
    </body>
</html>