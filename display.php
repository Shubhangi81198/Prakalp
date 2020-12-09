
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<?php

$con=mysqli_connect("localhost","root","","login");
$query="select username,users.code from users  JOIN(select code from users group by code having count(username)>1) temp on users.code=temp.code";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($rows=mysqli_fetch_assoc($result))
    {
        ?>
        <form method="post">
        <div class="container">
            <div class="box">
                <div class="form-group">
                    <label>Username:</label>
                    <br>
                    <input type="number" class="form-control" name="uname" value="<?php echo$rows['username']?>">
                </div> 
            </div>
        </div>   
    </form>    
    <?php    
    }
}
else{
    echo"<script type='text/javascript'>alert('Group not found');</script>";
}
?>