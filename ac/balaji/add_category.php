<?php
include('../cont.php');



?>



<div class="project-boxes jsGridView">
   <?php
      if (isset($_POST['submit'])) {
         $category = $_POST['category'];
         $description = $_POST['description'];

         // Insert the data into the database
         $sql = "INSERT INTO food_category (category, description) VALUES ('$category', '$description')";
         mysqli_query($conn, $sql);

         // Redirect to the dashboard page
         header("Location: dashboard.php");
      }
   ?>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="category" placeholder="Category">
      <input type="text" name="description" placeholder="Description">
      <input type="submit" name="submit" value="Submit">
   </form>
</div>
