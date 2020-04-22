  <?php
 $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
 if (!$link) {
 printf("Connect failed: %s\n", mysqli_connect_error());
 exit();
 }

 if (isset($_POST['id_prac']) &&
 is_numeric($_POST['id_prac']) &&
 is_string($_POST['nazwisko']))
 {
 $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
 $stmt = $link->prepare($sql);
 $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
 $result = $stmt->execute();
 if (!$result) {
 //printf("Query failed: %s\n", mysqli_error($link));
 ?>
<script type="text/javascript">; 
    alert("Query failed!"); 
    window.location.href="form06_post.php";
</script>;
 <?php
 }
 else {
     ?>
<script type="text/javascript">; 
    alert("Query successful!"); 
    window.location.href="form06_get.php";
</script>;
    <?php
 }
 $stmt->close();
 }
?>