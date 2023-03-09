<?php
include 'config.php';
  $sql="select * from donors";
  $r=mysqli_query($conn,$sql);
?>
<div class="container">
  <h2> <span>Detail Donor informations are:</span></h2>
  
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
    $did=5;
    while ($res = mysqli_fetch_array($r))
    
    {
    ?>
    <tr>
          <td><?php echo $did;?></td>
          <td><?php echo $res['dname'];?></td>
          <td><?php echo $res['dage'];?></td>
          <td><?php echo $res['dcontact'];?></td>
          <td><?php echo $res['daddress'];?></td>
          <td><?php echo $res['dbloodgroup'];?></td>
          
          
          
    </tr>
  <?php
    $did=$did+1;
  }
  ?>
</table>
</div>