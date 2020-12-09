<link  rel="stylesheet" href="startingpage.css">



<?php
if(array_key_exists('generate',$_POST))
{
    rand_password(2,4,5,1);
}
function rand_password($upper, $lower, $numeric, $other)
{
   
    $password_order = Array();
    $password = '';

   
    for ($i = 0; $i < $upper; $i++)
    {
        $password_order[] = chr(rand(65, 90));
    }
    for ($i = 0; $i < $lower; $i++)
    {
        $password_order[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $i++)
    {
        $password_order[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $i++)
    {
        $password_order[] = chr(rand(33, 47));
    }

    shuffle($password_order);

   
    foreach ($password_order as $char) {
        $password .= $char;

    }
    return $password;

}

$password=rand_password(2,4,5,1);
?>
<form action="storepwd.php" method="post">
    <input type="submit" id="generate" name="generate" class="button" value="GENERATE">
    
    <input type="text" name=pwd value="<?php echo"".$password ?>">
    
</form>


