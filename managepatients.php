
<?php
include 'config.php';
  $sql="select * from patient";
  $r=mysqli_query($conn,$sql);
?>
<div class="container">
  <h2> <span>Details Patient Informations are:</span></h2>
  
<table  align="center">
  
    <tr>
      <th>Serial no.</th>
      <th>Name</th>
      <th>Password</th>
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
          <td><?php echo $res['pname'];?></td>
          <td><?php echo $res['ppassword'];?></td>
          <td><?php echo $res['psage'];?></td>
          <td><?php echo $res['pcontact'];?></td>
          <td><?php echo $res['paddress'];?></td>
          <td><?php echo $res['pbloodgroup'];?></td>
         <td><a href="pupdate.php?pid=<?php echo $res['pid'];?>"><button>edit</button></a></td>
          <td><a href="pdelete.php?pid=<?php echo $res['pid'];?>"><button>delete</button></a></td>
          
          
          
    </tr>
  <?php
    $sn=$sn+1;
  }
  ?>
</table>
</div>
