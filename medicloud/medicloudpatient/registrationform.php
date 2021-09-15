<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
    <link rel="stylesheet" href="formstyle.css" >
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <form action="registrationform.php" method="POST">

                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="aadhar">Aadhar</label>
                    <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="form-control form-control-lg">
                    </div>
  
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btnlg">Register</button>
                    </div>
                
                    
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>