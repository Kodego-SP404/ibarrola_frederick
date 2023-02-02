

<?php 
// dbconnect
$servername = "localhost";
$username = "eric";
$password = "123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=feddback", $username, $password);
  $sql = 'SELECT * FROM feedback';
  $select = $conn->query($sql);
  $result = $select->fetchAll();

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php include ("./include/header.php");?>

    <main>
      <div class="container d-flex flex-column align-items-center">
        <h2>Feedback</h2>
        <?php if(empty($result)){
          echo "<div class=\"card my-3\">
          <div class=\"card-body text-center\">
          <p>No Feedback</p>
          </div>
          </div>";
        }
        ?>
        <?php 
        foreach($conn->query($sql)as $row) {
          ?>

        <div class="card my-3">
          <div class="card-body">
          <?php echo $row['body'];
            echo "<br>";
            echo $row['name'];echo (" ");
            echo $row['email'];echo (" ");
            echo $row['date'];?>
          </div>
        </div>
        <?php }
        ?>

       

        
      </div>
    </main>

    <?php include ("./include/footer.php");?>