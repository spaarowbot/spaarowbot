$cfg['Console']['Mode'] = 'collapse';
$cfg['NavigationWidth'] = 0;
 ?>

//handleregister
 <?php
     $servername = "localhost";
     $username = "spaarow";
     $password
     = "Tye858k24.3008";
     $dbname = "spaarow_spaarowDB";
      Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
      Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
      Check if the form is submitted
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
          Retrieve form data
         $username = $_POST["username"];
         $email = $_POST["email"];
         $password = $_POST["password"];
         $repeatPassword = $_POST["repeat-password"];

          Validate form data (add your validation logic here)

          Insert new user into the database
         $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
         if ($conn->query($sql) === TRUE) {
              Redirect the user to the index page
             header("Location: /index.html");
             exit();
         } else {
              Redirect the user back to the signup page with an error message
             header("Location: /pages/createAccount.php?error=registration_failed");
             exit();
         }
     }

      Close the database connection
     $conn->close();
 ?>

//handle log in form
 <?php
      Database connection parameters
     $servername = "localhost";
     $username = "spaarow";
     $password
     = "Tye858k24.3008";
     $dbname = "spaarow_spaarowDB";
      Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
      Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
 }
  Check if the form is submitted
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
      Retrieve email and password
     $email = $_POST["email"];
     $password = $_POST["password"];
      Validate email and password (add your validation logic here)
      Query to authenticate user
     $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
          Authentication successful
          Redirect the user to the dashboard or another page
         header("Location: /index.html");
         exit();
     } else {
          Authentication failed
          Redirect the user back to the login page with an error message
         header("Location: /register.php");
         exit();
     }
 }
  Close the database connection
 $conn->close();
 ?>

//handlecreateaccount
 $cfg['Servers'][$i]['auth_type'] = 'cookie';
 $cfg['Servers'][$i]['host'] = 'localhost';
 $cfg['Servers'][$i]['compress'] = false;
 $cfg['Servers'][$i]['AllowNoPassword'] = false;
 $cfg['Servers'][$i]['ssl'] = false;
 $cfg['Servers'][$i]['controluser'] = 'spaarow';
 $cfg['Servers'][$i]['controlpass'] =
 'Tye858k24.3008';
 $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
 $cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
 $cfg['Servers'][$i]['relation'] = 'pma__relation';
 $cfg['Servers'][$i]['table_info'] = 'pma__table_info';
 $cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
 $cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
 $cfg['Servers'][$i]['column_info'] = 'pma__column_info';
 $cfg['Servers'][$i]['history'] = 'pma__history';
 $cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
 $cfg['Servers'][$i]['tracking'] = 'pma__tracking';
 $cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
 $cfg['Servers'][$i]['recent'] = 'pma__recent';
 $cfg['Servers'][$i]['favorite'] = 'pma__favorite';
 $cfg['Servers'][$i]['users'] = 'pma__users';
 $cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
 $cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
 $cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
 $cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
 $cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
 $cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';
 $cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
 $cfg['Servers'][$i]['tracking_version_auto_create'] = true;
 $cfg['Servers'][$i]['tracking_default_statements'] = 'CREATE TABLE,ALTER TABLE,DROP TABLE,RENAME TABLE,CREATE INDEX,DROP INDEX,INSERT,UPDATE,DELETE';
 $cfg['Servers'][$i]['tracking_add_drop_view'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_table'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_database'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_procedure'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_function'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_trigger'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_event'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_user'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_view'] = true;
 $cfg['Servers'][$i]['tracking_add_drop_table'] = true;
 $cfg['Console']['Mode'] = 'collapse';
 $cfg['NavigationWidth'] = 0;
$cfg['Console']['Mode'] = 'collapse';
$cfg['NavigationWidth'] = 0;
 ?>
