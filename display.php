<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class=" container col-md-6">
<form action="" method="post" class="form-group">
<label for="name">Name</label >
<input type="text" name="name" class="form-control">

<label for="Email">Email</label>
<input type="text" name="email" class="form-control">


<label for="phone">phone</label>
<input type="text" name="phone" class="form-control">

<button class="btn btn-success" type="Submit" name="submit">Submit</button>
 
</form>
<div class="col-md-6">
<table class="table">
    <h1>GET DATA</h1>
    <button class="btn btn-success" id="btn" type="Submit" name="Get">Get</button>
<thead >
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
    </tr>
</thead>
<tbody id="tab">



</tbody>
</table>
</div>
</div>


<script src="js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function(){
      
        $('#btn').click(function(){

            $.ajax({
                url : 'loaddata.php',
                method: 'post',
                success: function(data){
                console.log(data)
                $('#tab').html(data)
            }
            })
        })
    })
</script>
</body>
</html>