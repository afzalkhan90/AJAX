<?php
include "db.php";
$query = "select id , name from users";
$res = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>JSON DropDown</title>
<?php include("link.php");  ?>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary py-3" >JSON & PHP</h1>
        <br><br>
        <div class="row">
            <div class="col-md-4">
        <form action="" class="" >
            <select name="" id="" class="form-select col-md-4" onchange="get_data(this.options[this.selectedIndex].value)">
            <option value="" selected>Select user ID</option>
                <?php while($row = mysqli_fetch_assoc($res)){  ?>
                <option value="<?php echo  $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?php } ?>
            </select>
        </form>
            </div>
            <div class="col-md-8">
            <table class="table"  id="tb" >
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id="name"></td>
      <td id="city"></td>
      <td id="email" ></td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <script>
        function get_data(id)
        {
            jQuery.ajax({
                url: 'getdata.php',
                type: 'post',
                data: 'id='+id,
                success:function(result)
                {
                    var jsondata=jQuery.parseJSON(result)
                   console.log(jsondata.id);
                   jQuery('#tb').show
                   jQuery('#name').html(jsondata.name)
                   jQuery('#city').html(jsondata.city)
                   jQuery('#email').html(jsondata.email)

                }
            })
        }
    </script>
</body>
</html>