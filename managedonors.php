<?php
include 'config.php';
  $sql="select * from donors";
  $r=mysqli_query($conn,$sql);
?>
<div class="container">
  <h2> <span>Details Donor Informations are:</span></h2>
  
<table  align="center">
  
    <tr>
      <th>Serial no.</th>
      <th>Name</th>
      <th>Age</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Bloodgroup</th>
      <th>Edit</th>
      <th>Delete</th>
       
      
    </tr>
    <?php
    $sn=1;
    while ($res = mysqli_fetch_array($r))
    
    {
    ?>
    <tr>
          <td><?php echo $sn;?></td>
          <td><?php echo $res['dname'];?></td>
          <td><?php echo $res['dage'];?></td>         
          <td><?php echo $res['dcontact'];?></td>
          <td><?php echo $res['daddress'];?></td>
          <td><?php echo $res['dbloodgroup'];?></td>
          <td><a href="dupdate.php?did=<?php echo $res['did'];?>"><button>edit</button></a></td>
          <td><a href="ddelete.php?did=<?php echo $res['did'];?>"><button>delete</button></a></td>

          
          
          
    </tr>
  <?php
    $sn=$sn+1;
  }
  ?>
</table>
</div>
