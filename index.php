<!-- <?php
 require_once 'connection.php';
 $sql = "SELECT * FROM job_brief ORDER BY S.NO DESC";
 $result = mysqli_query($conn, $sql);
//  $row= mysqli_fetch_assoc($result);
//  echo var_dump($row);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
<?php include 'style.css'; ?>
</style>
    
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <header>
        
        <h2 class="quote">Helping To Find Right career</h2>
        <nav>
            <a href="contactus.php">Contact Us</a>
            <a href="aboutus.php">About Us</a>
        </nav>
    </header>

    <div class="company">

    <div class="description">
<?php
while($row= mysqli_fetch_assoc($result))
{
    // echo base64_encode($row['company_image']);

?>
<!-- <div class="row"> -->
    <div class="card">
  <img src= "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['company_image']); ?>"  alt="image" style="width:100%">
  <div class="container">
    <p><b><?php echo $row["job_and_position"]; ?></b></p>
    <p> <?php echo $row["date_time"]; ?></p>
    <div class="text-center">
    <a class="btn" href="description.php?id=<?php echo $row["S.NO"] ;?>">Apply</a>
  <!-- <button type="button" class="btn btn-primary">Centered button</button> -->
</div>
  </div>
</div>
<!-- </div> -->

<?php
}
?>

    </div>
    </div>

    <footer>
    <div class="link">
    <ul class="no-bullets">
    <li><a href="privacyandpolicy.php" class="Privacy">Privacy and policy</a></li>
    <li><a href="termsandconditions.php" class="Terms">Terms and conditions</a></li>
    <li><a href="disclaimer.php" class="disclaimer">Disclaimer</a></li>
    <li><a href="contactus.php" class="us">Contact Us</a></li>
  </ul>

  <ul class="no-bullets">
  <li class="social">Social Media</li>
    <li><a href="https://t.me/+u6XDxwA2kb4wNTI9" class="telegram">Telegram</a></li>
    <li><a href="https://chat.whatsapp.com/E761jytOA1pGreUI3jnuqJ" class="whatsapp">Whatsapp</a></li>
    <li><a href="https://www.instagram.com/freshcareer4u?igsh=YzAwZjE1ZTI0Zg==" class="instagram">Instagram</a></li>
  </ul>
    </div>
    </footer>


</body>
</html>
<?php
 require_once 'connection.php';
 $sql = "SELECT * FROM job_brief";
 $result = mysqli_query($conn, $sql);
//  $row= mysqli_fetch_assoc($result);
//  echo var_dump($row);
?>