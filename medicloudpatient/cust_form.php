<?php require_once 'controllers/appointmentController.php'; ?>
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
                <form action="cust_form.php" method="POST">
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
                    <label for="hospitalname">Hospitalname</label>
                    <select name="hospitalname" class="form-control"  value="<?php echo $hospname; ?>">
                        <option disabled selected>-- Select Hospital --</option>
                        <?php
                            include_once "config.php";
                            $a=" ,";
                            $sql = mysqli_query($conn, "SELECT cname from individual_clinics");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value=" . $row['cname'].  ">".  $row['cname']. "</option>" ;
                            
                            }
                        ?>
                        </select>


 
                    
                    <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="aadhar">Aadhar</label>
                    <input type="text" name="aadhar" value="<?php echo $aadhar; ?>" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" value="<?php echo $date; ?>" class="form-control form-control-lg">
                    </div>

                    
  
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btnlg">Submit</button>
                    </div>
                
                    
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>