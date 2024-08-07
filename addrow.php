<?php
include("db.php");
if(isset($_POST['action']))
{
    $query = "SELECT * FROM users";
    $run = mysqli_query($con,$query);
?>
   <tr>
        <td><input type="text" placeholder="Name" name="name"></td>
        <td>
        <select name="city" id="">
                <option value="">Select</option>
                <?php while($row = mysqli_fetch_assoc($run)){ ?>
                    <option value=""><?php echo $row['city'];  ?></option>
                    <?php } ?>
            </select>
        </td>
        <td><input type="text" placeholder="Email" name="email"></td>
    </tr>
<?php
}
?>
