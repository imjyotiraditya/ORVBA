<?php
$title = "Assistance";
$activePage = "assistance";
include("includes/head.php");
if (!isLoggedIn()) {
    header("Location: user-login.php");
}
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">Hello <?php echo $_SESSION['name']; ?>,<br>
            <form action="assistance.php" method="POST">
                <div class="form-floating">
                    <input type="text" class="form-control" id="pin" placeholder="Password" name="pin" />
                    <label for="pin">Search for Pincode</label>
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Search</button> <br />
            </form>
            <br />
            <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$sql = 'SELECT * FROM mechanics WHERE pin=\''.$_POST['pin'].'\'';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<div class="alert alert-info">
  <strong>'.mysqli_num_rows($result).'</strong>  results found for <b>'.$_POST['pin'].'</b>.
</div>';
  while($row = mysqli_fetch_assoc($result)) {
    echo '<div class="col-md-8 dash justify-content-evenly">
    '.$row['name'].' <button class="btn btn-danger"><i class="bi bi-telephone"></i> Call</button>
    </div>';
  }
  echo '';
} else {
  echo '<div class="alert alert-info">
  <strong>No mechanic found with the ID you provided.
</div>';
}
}
echo '</div>
</div>
';
include("includes/footer.php");
?>
