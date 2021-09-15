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
                <form action="signup.php" method="POST">
                   <!-- <h3 class="text-center">Store Registration for Contact Tracer</h3>
-->
                    <?php if(count($errors)>0): ?>
                    <div class="alert alert-danger">
                        <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="form-group">
                    <label for="username">Clinic Name</label>
                    <input type="text" name="storename" value="<?php echo $storename; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="username">Doctor's Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control form-control-lg">
                    </div>
                
                    <div class="form-group">
                    <label for="aadhar">Doctor's Aadhar</label>
                    <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="pnumber">Password </label>
                    <input type="password" name="pnumber" value="<?php echo $pnumber; ?>" class="form-control form-control-lg">
                    </div>
                
                    <div class="form-group">
                    <label for="address">Address</label>
                    <textarea class="form-control form-control-lg" id="address"  rows="3" name="address" value="<?php echo $address; ?>"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlFile1">Proof of Highest Qualification</label>
                    <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" accept="image/png, image/gif, image/jpeg" / required>
                    </div>
  
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btnlg">Register Clinic</button>
                    </div>
                
                    
                </form>

            </div>
        </div>
    </div>
</body>
</html>