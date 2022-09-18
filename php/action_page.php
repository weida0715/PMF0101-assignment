<!DOCTYPE.html>
<html>
    <body>

<?php
$name=$_POST["name"]
echo "submit"$name;
?> 

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>

</body>
</html>

<div class="container">
              <form action="action_page.php" method="post">

                <div class="rating1">
              
                    <input type="radio" name="rating1" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating1" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating1" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating1" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating1" value="1" id="1"><label for="1">☆</label>
                  
                  </div>

                <label for="fname">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
            
                <label for="lname">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email..">
        
                <label for="feedback">Feedback</label>
              <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>
                
                <input type="submit" value="Submit">
              </form>

              </body>
</html>