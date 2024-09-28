<?php

include 'config.php';

?>


<h1>Display Orders</h1>

<div class="container-fluid">
    <div class="table-responsive">
      <?php
      $query = "SELECT * FROM `order`";
      $query_run = mysqli_query($conn, $query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Order ID </th>
            <th>  Name </th>            
            <th>Number</th>
            <th>Email </th>
            <th>Method </th>
            <th>Flat</th>
            <th>Street </th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Pin Code</th>
            <th>Total Products</th>
            <th>Total Price</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Order status</th>    

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
            <td> <?php  echo $row['id'];?> </td>
            <td> <?php  echo $row['name'];?> </td>
            <td> <?php  echo $row['number'];?></td>
            <td> <?php  echo $row['email'];?></td>
            <td> <?php  echo $row['method'];?></td>
            <td> <?php  echo $row['flat'];?></td>
            <td> <?php  echo $row['street'];?></td>
            <td> <?php  echo $row['city'];?></td>
            <td> <?php  echo $row['state'];?></td>
            <td> <?php  echo $row['country'];?></td>
            <td> <?php  echo $row['pin_code'];?></td>
            <td> <?php  echo $row['total_products'];?></td>
            <td> <?php  echo $row['total_price'];?></td>
            <td> <?php  echo $row['delivery_lat'];?></td>
            <td> <?php  echo $row['delivery_lng'];?></td>
            <td> <?php  echo $row['order_status'];?></td>
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

