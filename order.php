<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Ordering-BuymE</title>
</head>
<body class="bg-info">
    <nav class="navbar navbar-expand  navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">BuymE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cakes.php">CAKES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bakers.php">BAKERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="order.php">ORDER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php">FEEDBACK</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-6 col-lg-6 col-xxl-6">
                  <table class="table borderless">
                      <tr>
                          <td>NEW ACCOUNT</td>
                          <td></td>
                      </tr>
                      <tr>
                          <td>Enter name</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Enter Delivery Address</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td>Enter phone No</td>
                          <td><input type="text" class="form-control">
                          </td>
                      </tr>
                      <tr>
                          <td>Message On Cake</td>
                          <td><input type="text" class="form-control"></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><button class="btn btn-success">ORDER</button></td>
                      </tr>
                      <tr>
                          <td>CASH ON DELIVERY</td>
                          <td></td>
                      </tr>
                  </table>
              </div>
              <div class="col col-12 col-sm-6 col-lg-6 col-xxl-6">
                <table class="table borderless">
                    <tr>
                        <td>SIGN IN</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Enter Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter Phone <input type="text" class="form-control">No </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">LOGIN AND ORDER</button></td>
                    </tr>
                </table>
              </div>
          </div>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>   
</body>
</html>