
<html>
  <head>
      <title>Login-Asmt News</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<?php include('include/nav.php');?>    
 <br> <br><br> <br><br> <br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <form method="post" action="db/login.php">
                   
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email  </span>
                        <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                    </div> 
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Password  </span>
                        <input type="password" name="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <hr/>
                      Create account? <a href="signup.php">Sign Up</a>
                    <input type="submit" value="Login" name="loginsubmit" style="float:right;" class="btn btn-dark">
                </form>
                </div>
               
                <?php include('include/message.php'); ?> 
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
