<?php
    require"Form.php";
    $forminscription = new Form($_POST);

?>

<form action="#" method="POST"></form>

<?php
    echo $forminscription->input('username');
    echo $forminscription->input('nom');
    echo $forminscription->input('prenom');
    echo $forminscription->input('password');
    echo 
    

?>