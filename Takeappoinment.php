<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">HealthCare</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Department.php">Departments</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Takeappoinment.php">Take an Appoinment</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="About.php">About</a>
                          </li>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Condact Us
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="#">Phone number</a></li>
                              <li><a class="dropdown-item" href="#">Queries</a></li>
                              <li><a class="dropdown-item" href="#">Give a feedback</a></li>
                            </ul>
                          </div>
                          
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Date of Appoinment</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                   <tr>
                       <td>Department</td>
                       <td><input type="text" class="form-control"></td>
                   </tr>
                    <tr>
                        <td>Doctor Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Submit</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   

</body>
</html>