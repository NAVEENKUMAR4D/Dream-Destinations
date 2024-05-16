<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="main_page_style.css">
    <title>DashBoardAdmin</title>
    <link rel="icon" href="main_page_images/DD.jpg">
</head>
<body>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-teal">
        <div class="container">
            <a href="mainpage.html" class="navbar-brand font-weight-bold">
                <i class="fa fa-chart-bar  "></i>  
                DashBoard</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ui-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="ui-navbar">
                <ul class="navbar-nav ml-auto">
                     
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-user-circle"></i>Admin</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt  "></i> Logout</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Buttons Section -->
    <section class="p-3 bg-light">
        <div class="container">
            <div class="row  flipInX delay-1s">
                <div class="col-md-4">
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#task-modal">
                      <a href="addAccount.html"><i class="fa fa-plus-circle"></i> Add Account</a> 
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#category-modal">
                        <a href="deleteAccount.php"><i class="fa fa-plus-circle"></i> Delete Account</a>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#employee-modal">
                        <a href="BanAccount.php"><i class="fa fa-plus-circle"></i> Bank Account </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="p-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  zoomIn delay-1s">
                        <div class="card-header bg-success text-white">
                            <h3>ALL USERS DETAILS</h3>
                        </div>
                        <div class="card-body bg-teal">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM PROJECT;";
                            

                            $check = mysqli_query($connetion,$query);
                            
                            if(mysqli_num_rows($check)){
                                ?>
                                <table border="1" class="table table-hover text-center" style="border-collapse:collapse; text-align: center;">
                                        <thead class="bg-dark text-white">
                                        <tr>
                                            <th>SNO</th>
                                            <th>FirstName</th>
                                            <th>LastName </th>
                                            <th>Email </th>
                                            <th> Password</th>
                                            <th>PhoneNumber </th>
                                            
                                            
                                        </tr>
                                        </thead>
                                        <?php
                                        while($row  = mysqli_fetch_assoc($check)){
                                        ?>
                                                        
                                            <tr>
                                                <td><?php  echo $row[ "SNO"] ;?></td>
                                                <td><?php  echo $row[ "FIRSTNAME"] ;?></td>
                                                <td><?php  echo $row["LASTNAME"];?></td>
                                                <td><?php  echo $row["EMAIL"];?></td>
                                                <td><?php  echo $row["PASS"];?></td>
                                                <td><?php  echo $row["PHONENO"];?></td>
                                                
                                                
                                            </tr>				
                                            <?php 
                                        }
                                            ?>
                                </table>
                                
                                <?php	
                                    
                                        
                                        
                                
                            }
                            else{
                                echo "error";
                            }
                            mysqli_close($connetion);
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main PAYMENTS Section -->
    <section class="p-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  zoomIn delay-2s">
                        <div class="card-header bg-success text-white">
                            <h3>PAYMENTS DETAILS</h3>
                        </div>
                        <div class="card-body bg-teal">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM payments;";
                            

                            $check = mysqli_query($connetion,$query);
                            
                            if(mysqli_num_rows($check)){
                                ?>
                                <table border="1" class="table table-hover text-center" style="border-collapse:collapse; text-align: center;">
                                        <thead class="bg-dark text-white">
                                        <tr>
                                            <th>SNO</th>
                                            <th>FirstName</th>
                                            <th>LastName </th>
                                            <th>EMAIL </th>
                                            <th> STATUS</th>
                                             
                                            
                                            
                                        </tr>
                                        </thead>
                                        <?php
                                        while($row  = mysqli_fetch_assoc($check)){
                                        ?>
                                                        
                                            <tr>
                                                <td><?php  echo $row[ "SNO"] ;?></td>
                                                <td><?php  echo $row[ "FIRSTNAME"] ;?></td>
                                                <td><?php  echo $row["LASTNAME"];?></td>
                                                <td><?php  echo $row["EMAIL"];?></td>
                                                <td><?php  echo $row["STATUS"];?></td>
                                                 
                                                
                                                
                                            </tr>				
                                            <?php 
                                        }
                                            ?>
                                </table>
                                
                                <?php	
                                    
                                        
                                        
                                
                            }
                            else{
                                echo "NO PAMENTS ARE DONE";
                            }
                            mysqli_close($connetion);
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 

    <!-- Main PAYMENTS Section -->
    <section class="p-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  zoomIn delay-2s">
                        <div class="card-header bg-success text-white">
                            <h3>FEEDBACK DETAILS</h3>
                        </div>
                        <div class="card-body bg-teal">
                            <?php
                            include 'conn.php';
                            $query = "SELECT * FROM feedback;";
                            

                            $check = mysqli_query($connetion,$query);
                            
                            if(mysqli_num_rows($check)){
                                ?>
                                <table border="1" class="table table-hover text-center" style="border-collapse:collapse; text-align: center;">
                                        <thead class="bg-dark text-white">
                                        <tr>
                                            <th>SNO</th>
                                            <th>FirstName</th>
                                            <th>LastName </th>
                                            <th>EMAIL </th>
                                            <th> MOBILE NUMBER</th>
                                            <th> MESSAGE</th>
                                            
                                            
                                        </tr>
                                        </thead>
                                        <?php
                                        while($row  = mysqli_fetch_assoc($check)){
                                        ?>
                                                        
                                            <tr>
                                                <td><?php  echo $row[ "SNO"] ;?></td>
                                                <td><?php  echo $row[ "FIRSTNAME"] ;?></td>
                                                <td><?php  echo $row["LASTNAME"];?></td>
                                                <td><?php  echo $row["EMAIL"];?></td>
                                                <td><?php  echo $row["MOBILENO"];?></td>
                                                <td><?php  echo $row["MESSAGE"];?></td>
                                                
                                                
                                            </tr>				
                                            <?php 
                                        }
                                            ?>
                                </table>
                                
                                <?php	
                                    
                                        
                                        
                                
                            }
                            else{
                                echo "NO PAMENTS ARE DONE";
                            }
                            mysqli_close($connetion);
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card  zoomIn delay-2s">
                        <div class="card-header bg-success text-white">
                            <h3>TOTAL</h3>
                        </div>
                        <div class="card-body bg-teal">
                            <?php
                            include 'conn.php';
                            $query = "select count(SNO) as count from PROJECT;";
                            $query2 = "select sum(AMOUNT) as Total from payments;";

                            $check = mysqli_query($connetion,$query);
                            $check2 = mysqli_query($connetion,$query2);
                            if(mysqli_num_rows($check)){
                                ?>
                                <table border="1" class="table table-hover text-center" style="border-collapse:collapse; text-align: center;">
                                        <thead class="bg-dark text-white">
                                        <tr>
                                            <th>TOTAL USERS</th>
                                            <th>TOTAL AMOUNT</th>
                                             
                                        </tr>
                                        </thead>
                                        <?php
                                        while($row  = mysqli_fetch_assoc($check)){
                                        ?>
                                                        
                                            <tr>
                                                <td><?php  echo $row[ "count"] ;?></td>
                                                 
                                                
                                                
                                             				
                                            <?php 
                                        }
                                            ?>
                                        <?php
                                        while($row  = mysqli_fetch_assoc($check2)){
                                        ?>
                                                        
                                           
                                                <td><?php  echo $row[ "Total"] ;?></td>
                                                 
                                                
                                                
                                            </tr>				
                                            <?php 
                                        }
                                            ?>
                                </table>
                                
                                <?php	
                                    
                                        
                                        
                                
                            }
                            else{
                                echo "NO PAMENTS ARE DONE";
                            }
                            mysqli_close($connetion);
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     

    <!-- Main Footer -->
    <section class="bg-dark text-teal text-center p-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Copyright &copy; 2023 , <a href="mainpage.html" class="navbar-brand font-weight-bold">
                        <img src="main_page_images/DD.jpg" alt="" class="logo-img">
                         </a>Dream Destinations</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h6>All Rights Reserved</h6>
                    <h6>Developed & Maintained by<br>
                        <em class="text-danger">Team NK</em>
                    </h6>
                </div>                    
            </div>
            
        </div>
    </section>


<!-- Bootstrap JS files -->
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/mdb.js"></script>

</body>
</html>
