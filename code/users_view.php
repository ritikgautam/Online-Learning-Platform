
<?php
    require "includes/classes/Header.php";

    $header = new Header("View User","");
    $header->output();
?>

<?php
$con = mysqli_connect("localhost", "root", "", "e-learning");

// Check if db connection success
if (mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_errno());
}
?>


 
 


<body>
<?php
         
         require "includes/config.php";
    include "includes/components/navbaradmin.php";
    require "includes/classes/Course.php";
 $coursesResult = mysqli_query($con,"SELECT * FROM users");
?>

<div class="container">
 <table class="table table-striped">
    <thead>
    <tr>
         <th style="text-align:center" colspan="4"><h2>Registered Users</h2></th>
     </tr>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
        <?php
                    while($course = mysqli_fetch_assoc($coursesResult))
                    {
                        ?>
                            <tr>
                            <td><?php echo $course['id']; ?></td>
                            <td><?php echo $course['fname'].' '.$course['lname']; ?></td>
                            <td><?php echo $course['email']; ?></td>
                            <td><?php echo $course['username']; ?></td>
                            </tr>
                        <?php
                    }
                    ?>
    </tbody>
  </table>
  </div>
</body>
</html>