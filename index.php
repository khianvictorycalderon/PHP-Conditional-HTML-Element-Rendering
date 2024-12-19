<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/index.css" />
    <script src="assets/index.js"></script>
    <title>PHP Conditional HTML Element Rendering</title>
  </head>
  <body>
    <?php
    session_start();
      
      if(!isset($_SESSION["shown"])) {
        $_SESSION["shown"] = false;
      }

      if(isset($_POST["submit"])) {
        // If submit button was pressed or clicked
        if(isset($_POST["input"])) {
          // If input has value
          if($_POST["input"] == "toggle") {
            $_SESSION["shown"] = !$_SESSION["shown"];
          } else {
            echo "<script>alert('Invalid Input!');</script>";
          }
        }
      }
    ?>
    
    <div id="container">
      <form method="POST">
        <label for="input">Enter "toggle" to hide or show the conditional rendered element:</label><br/><br/>
        <input name="input" type="text" /><br/><br/>
        <input name="submit" type="submit" value="Submit" />
      </form>
    </div>

    <?php
    if($_SESSION["shown"]) { ?> 
      <h1>This is a conditional rendered HTML Element</h1>
    <?php } ?>

  </body>
</html>
