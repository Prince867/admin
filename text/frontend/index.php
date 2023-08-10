<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard Sidebar Menu</title>
    <?php



session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../login.php");
    exit();
}

$username = $_SESSION["username"];
?>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">
                        <?php echo $username; ?>
                    </span>
                    <span class="profession">Admin</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input required type="text" placeholder="Search...">
                </li>

                <li class="">
                    <a href="#">
                    <i class='bx bxs-dashboard icon'></i>
                        <!-- <i class='bx bx-log-out icon'></i> -->
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <!-- <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> -->

            </div>
        </div>

    </nav>

    <!-- <section class="home">
        <div class="text">
          <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" style="top: 57;
          margin: 5px;">
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://tse4.mm.bing.net/th?id=OIP.X_DgyBQGvGLtgc044_4r0wHaEK&pid=Api&P=0" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>3D product name</h5>
                        <p>Descriptioin</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://tse2.mm.bing.net/th?id=OIP.VGXU_SMIvn2RxQp26jM4QwHaEK&pid=Api&P=0" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>3D product name</h5>
                        <p>Descriptioin</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://cdn.educba.com/academy/wp-content/uploads/2019/11/3d-printing-models-768x427.jpg"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>3D product name</h5>
                        <p>Descriptioin</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    
            <div class="mifgd">
              <center>
                <h1>
                  OUR PROGRAMS
                </h1>
                
                  <div class="cards-container">
                    <div class="card">
                        <img src="path/to/image1.jpg" alt="Card Image 1">
                        <h2>Card Title 1</h2>
                        <p>This is the content of Card 1.</p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="card">
                        <img src="path/to/image2.jpg" alt="Card Image 2">
                        <h2>Card Title 2</h2>
                        <p>This is the content of Card 2.</p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="card">
                        <img src="path/to/image3.jpg" alt="Card Image 3">
                        <h2>Card Title 3</h2>
                        <p>This is the content of Card 3.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>



                <section class="elementor-section elementor-top-section elementor-element elementor-element-dcb5b5d elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="dcb5b5d" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4eb9877" data-id="4eb9877" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <section class="elementor-section elementor-inner-section elementor-element elementor-element-2a7f3ed elementor-section-full_width elementor-section-height-min-height elementor-section-height-default" data-id="2a7f3ed" data-element_type="section">
                  <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-62f5229 qodef-cut-borders-yes" data-id="62f5229" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-1b3438b elementor-widget elementor-widget-stronger_core_counter" data-id="1b3438b" data-element_type="widget" data-widget_type="stronger_core_counter.default">
              <div class="elementor-widget-container">
            <div class="qodef-shortcode qodef-m  qodef-counter qodef-layout--simple" data-start-digit="1" data-end-digit="8">
        <div class="qodef-m-digit-wrapper">
          <span class="qodef-m-digit" style="font-size: 82px">8</span>
        </div>
        <div class="qodef-m-content">
            <h6 class="qodef-m-title">
                Years of Experience			</h6>
            </div>
      </div>
          </div>
              </div>
                </div>
          </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-dd99524 qodef-cut-borders-yes" data-id="dd99524" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-f2c0959 elementor-widget elementor-widget-stronger_core_counter" data-id="f2c0959" data-element_type="widget" data-widget_type="stronger_core_counter.default">
              <div class="elementor-widget-container">
            <div class="qodef-shortcode qodef-m  qodef-counter qodef-layout--simple" data-start-digit="1" data-end-digit="16">
        <div class="qodef-m-digit-wrapper">
          <span class="qodef-m-digit" style="font-size: 82px">16</span>
        </div>
        <div class="qodef-m-content">
            <h6 class="qodef-m-title">
                Skilled Trainer			</h6>
            </div>
      </div>
          </div>
              </div>
                </div>
          </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1dc93de qodef-cut-borders-yes" data-id="1dc93de" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-5cb5039 elementor-widget elementor-widget-stronger_core_counter" data-id="5cb5039" data-element_type="widget" data-widget_type="stronger_core_counter.default">
              <div class="elementor-widget-container">
            <div class="qodef-shortcode qodef-m  qodef-counter qodef-layout--simple" data-start-digit="3" data-end-digit="64" data-step-digit="3" data-digit-label="K">
        <div class="qodef-m-digit-wrapper">
          <span class="qodef-m-digit" style="font-size: 82px">64K</span>
        </div>
        <div class="qodef-m-content">
            <h6 class="qodef-m-title">
                Calories Burned			</h6>
            </div>
      </div>
          </div>
              </div>
                </div>
          </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6741307 qodef-cut-borders-yes" data-id="6741307" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-73f0e42 elementor-widget elementor-widget-stronger_core_counter" data-id="73f0e42" data-element_type="widget" data-widget_type="stronger_core_counter.default">
              <div class="elementor-widget-container">
            <div class="qodef-shortcode qodef-m  qodef-counter qodef-layout--simple" data-start-digit="50" data-end-digit="256" data-step-digit="20">
        <div class="qodef-m-digit-wrapper">
          <span class="qodef-m-digit" style="font-size: 82px">256</span>
        </div>
        <div class="qodef-m-content">
            <h6 class="qodef-m-title">
                Happy Members			</h6>
            </div>
      </div>
          </div>
              </div>
                </div>
          </div>
                    </div>
          </section>
                </div>
          </div>
                    </div>
          </section>
              </center>
            </div>            
        </div>
    </section> -->
    <!-- Just an image -->
    <div class="home">
        <nav class=" ml-3 navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <!-- <img src="logo.png" width="30" height="30" alt=""> Dashboard -->
                <h4>Dashboard</h4>
            </a>
        </nav>
        
        <!-- large button -->
        <button type="button" data-toggle="modal" data-target="#exampleModal" class=" btn btn-outline-primary btn-lg float-right m-5">New Registration</button>
       <!-- data -->
        <div class="jumbotron jumbotron-fluid bg-light m-3 rounded">
            <h5 class="m-5 ">Profile Dashboard </h5>
            <div class="container">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM user ORDER BY join_date DESC";
$result = mysqli_query($conn, $query);
?>
            
            <table class="table" border="1">
        <tr class="alert alert-info">
           
            <th>Full Name</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Join Date</th>
            <th>Father name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
           
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['join_date'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td><a href='edit.php?id={$row['id']}'<button  type='button' class='btn btn-outline-primary btn-sm'>Edit</button.</td>";
            echo "<td><a href='delete.php?id={$row['id']}'><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a></td>";
            echo "</tr>";
        }
        ?>
<?php
mysqli_close($conn);
?>
    </table>
            
            </div>
        </div>

    </div>
<!-- mondal -->

<!-- $full_name = $_POST['full_name'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];
    $join_date = $_POST['join_date'];
    $age = $_POST['age']; -->

    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Registration</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- ...form -->
           
              <form method="POST" action="register.php">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input required type="text"   name="full_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone no.</label>
                  <input required type="number"  name="phone_no" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input required type="text" class="form-control"  name="address"  id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">join Date</label>
                    <input required type="date" name="join_date" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input required type="number" class="form-control" name="age" id="exampleInputPassword1">
                </div>
                <!-- <div class="form-group form-check">
                  <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>
            
          </div>
        </div>
      </div>

      <!-- edit -->
     

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>