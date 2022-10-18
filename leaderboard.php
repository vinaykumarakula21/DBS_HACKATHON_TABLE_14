
<?php include 'connection.php';?>
    <table>
        <thead>
            <tr>
                <th>Product name  </th>
                <th>price </th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            
                $query = "select *from pricedetails where pname='earphone' order by price;";
                $result=mysqli_query($conn,$query);
                if ($result->num_rows > 0):
                while($array=mysqli_fetch_row($result)):?>
                <tr>
                    <td><?php echo $array[0];?></td>
                    <td><?php echo $array[1];?></td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
        </tbody>
    </table>  