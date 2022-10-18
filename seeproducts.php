
<?php include 'connection.php';?>
    <table>
        <thead>
            <tr>
                <th>Product name  </th>
                <th>Product type  </th>
                <th>Starting Price</th>
                
                <th>Your Price  </th>
                <th>Confirm  </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "select *from products";
                $result=mysqli_query($conn,$query);
                if ($result->num_rows > 0):
                while($array=mysqli_fetch_row($result)):?>
                <tr>
                    <td><?php echo $array[0];?></td>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><form action="priceconfirm.php" method="post"><input type="text" name="traderprice"><input type="text"  name="pid1" value="<?php echo $array[0]?>" style="background-color:aliceblue;color:aliceblue;;border:0" onclick="border:0"></td>
                    <td><input type="submit" name="submit1"></form></td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
        </tbody>
    </table>  