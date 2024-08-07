<?php include('db.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('link.php');  ?>
    <?php
    $query = "SELECT * FROM users";
    $run = mysqli_query($con,$query);
    ?>
</head>
<body>
    <div class="container">
<table id="myTable" class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>City</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>

<button id="addBtn" class="btn btn-primary" >Add Row</button>
    </div>
    <script>
        $(document).ready(function() {
  $('#addBtn').on("click",function() {
    $.ajax({
      url: 'addrow.php',
      type: 'POST',
      data:{"action":"addrow"},
      success: function(data) {
        $('#myTable tbody').append(data);
      }
    });
  });
});

    </script>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
