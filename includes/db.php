
      <?php
         $dbhost = 'localhost:3307';
         $dbuser = 'root';
         $dbpass = 'root';
         $db ='zulenko_auto';
        
         $conn = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        ?>