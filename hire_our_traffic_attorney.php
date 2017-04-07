<?php
    if (empty (?_POST)[submit]))
{
   echo"Form is Not Submitted!";
    exit;
}
    echo "Please fill the form";
exit;
}
$name = $_POST["fullname"];
$email = $_POST["email"];
mail( 'info@californiaticketking.com' , 'New form submission' , 
"New form submission: Name: $name, Email:$email"  );
header('Location: thank-you');
?>

    
?>    
