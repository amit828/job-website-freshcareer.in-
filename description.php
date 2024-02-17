<?php
$id=$_GET['id'];
require_once 'connection.php';
$sql= "SELECT * FROM job_description where id='$id'";
$result=mysqli_query($conn,$sql);

?>

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

    <div class="company companym">

    <div class="description1">
<?php
while($row= mysqli_fetch_assoc($result))
{
    
?>

<h1 class="jobrole"><?php echo $row["job_title"] ?></h1>
<hr>
<p><?php echo $row["date"]?></p>
<h3>About The Company</h3>
<p class="aboutcompany"><?php echo $row["about_company"] ?></p>
<img src= "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['company_image']); ?>"  alt="image" class="des_image" style="width: 100%;
    height: 50vh;">
<h3>Eligibility Criteria</h3>
<p><?php echo nl2br($row["Eligibility"]) ?></p>
<h3>Hiring Process</h3>
<p><?php echo nl2br($row["hiring_process"]) ?></p>
<h3>Hiring Details</h3>
<div class="table-responsive">
<table class="table">
    <tr>
        <td>Job Role</td>
        <td ><?php echo $row["job_role"] ?></td>
    </tr>
    <tr>
        <td>Qualification</td>
        <td><?php echo $row["qualification"] ?></td>
</tr>
<tr>
        <td>Batch</td>
        <td><?php echo $row["batch"] ?></td>
</tr>
<tr>
        <td>Job Location</td>
        <td><?php echo $row["job-location"] ?></td>
</tr>
<tr>
        <td>Salary Package</td>
        <td><?php echo $row["salary_package"] ?> LPA</td>
</tr>
<tr>
        <td>Apply Link</td>
        <td><a href="<?php echo $row["apply_link"]; ?>" style="text-decoration: none; ">Click here to Apply</a></td>
</tr>
<tr>
        <th>For Job Update Join Our WhatsApp Channel</th>
        <td><a href=""><img src="Screenshot 2024-01-08 124910.png" alt="Girl in a jacket" ></a></td>
    
</tr>
<tr>
        <th>For Regular job alert post Follow our Page</th>
        <td><a href=""><img src="Screenshot 2024-01-08 131104.png" alt="Instagram" ></a></td>
</tr>
<tr>
        <th>For Job Update Join Our Telegram Channel</th>
        <td><a href="https://t.me/+u6XDxwA2kb4wNTI9"><img src="Screenshot 2024-01-08 132216.png" alt="Telegram" ></a></td>
</tr>

 
 </table>

 <h3>Roles and Responsiblity</h3>
 <hr style="width:200px" />
<p><?php echo nl2br($row["roles_responsibilities"]) ?></p>

</div>
    
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