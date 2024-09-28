<?php

include 'config.php';

?>


<h1>Display Users</h1>

<div class="container-fluid">
    <div class="table-responsive">
      <?php
      $query = "SELECT * FROM user";
      $query_run = mysqli_query($conn, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>User ID </th>
            <th> User Name </th>            
            <th>Password</th>
            <th>Address </th>
            <th>Email </th>
            <th>Orders</th>
            <th>User Type </th>
            <th>image</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run)>0)
        {
          while($row = mysqli_fetch_assoc($query_run))
          {
            ?>              
          <tr>           
            <td> <?php  echo $row['user_id'];?> </td>
            <td> <?php  echo $row['username'];?> </td>
            <td> <?php  echo $row['password'];?></td>
            <td> <?php  echo $row['address'];?></td>
            <td> <?php  echo $row['email'];?></td>
            <td> <?php  echo $row['orders'];?></td>
            <td> <?php  echo $row['user_type'];?></td>
            <td> <?php  echo $row['image'];?></td>
           
          </tr>
          <?php           
          }

        }
        else
        {
          echo "No record found";
        }
        ?>          
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

