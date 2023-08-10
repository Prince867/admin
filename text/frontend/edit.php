
<!DOCTYPE html>
<html>
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

    <title>Edit User</title>
</head>
<body>

<?php
if (isset($_GET['id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
   

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $full_name = $_POST['full_name'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];
        $join_date = $_POST['join_date'];
        $age = $_POST['age'];

        $query = "UPDATE user SET full_name='$full_name', phone_no='$phone_no', address='$address', join_date='$join_date', age=$age WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: index.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

      
    
}
?>


<div class="container">
<h1 class="m-3">Edit User Information</h1>
  <form style="    padding: 23px;
    background-color: #c0c6ed;
    border-radius: 5px; " method="POST" >
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input required type="text"  class="form-control" name="full_name" value="<?php echo $user['full_name']; ?>">                
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone no.</label>
                  <input required type="text" class="form-control" name="phone_no" value="<?php echo $user['phone_no']; ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea  class="form-control" name="address"><?php echo $user['address']; ?></textarea>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">join Date</label>
                    <input required type="date" class="form-control" name="join_date" value="<?php echo $user['join_date']; ?>">                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input required type="number" class="form-control" name="age" value="<?php echo $user['age']; ?>">
                </div>
                <!-- <div class="form-group form-check">
                  <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
</div>
 



<!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
              <
</body>
</html>
