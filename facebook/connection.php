        <?php
		 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
		 $dbname = 'facebook';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          if(!$conn)
          {
            echo 'Connected failure<br>';
          }
          else
          {
            "Connected Successfully <br>";
          }
		 ?>