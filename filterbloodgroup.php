<div class="container">
  <h2><span>Search By Blood Group</span></h2>
  <form method = "post" class="myform f1" autocomplete="off">
    
    <select name="pbloodgroup">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
  </select>
  <input type="submit" value="Submit" name = "submit">
  </form>

<?php
include 'config.php';
if(isset($_POST['submit'])){
  $bg = $_POST['pbloodgroup'];

  $sql="select * from donors where dbloodgroup='$bg' ";
  $r=mysqli_query($conn,$sql);

?>
<div class="column">
  <h2 align="center"> Details informations are:</h2>
  
<table  align="center">
  
    <tr>
      <th>Serial no.</th>
      <th>Name</th>
      <th>Age</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Bloodgroup</th>
      
    </tr>
    <?php
    $s=1;
    while ($res = mysqli_fetch_array($r))
      
    {

    ?>
    <tr>
          <td><?php echo $s;?></td>
          <td><?php echo $res['dname'];?></td>
          <td><?php echo $res['dage'];?></td>
          <td><?php echo $res['dcontact'];?></td>
          <td><?php echo $res['daddress'];?></td>
          <td><?php echo $res['dbloodgroup'];?></td>
          
    </tr>
  <?php
    $s=$s+1;
  }

}
  ?>
</table>
</div>