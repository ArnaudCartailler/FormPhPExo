<?php

if(isset($_POST['valid']) AND !empty($_POST['valid'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    echo 'Salut '. $firstname.' '. $lastname.'<br/>Bienvenue sur mon site !<br />';
    echo 'Tu as ' . $age . ' ans et tu es ' . $gender . '.'. '<br />';
}

$array = $_POST['case'];
foreach($array as $valeur){

   echo "Tu aimes :" .  $valeur . '<br/>';
}

/*if (isset($_FILES['myfile']) AND $_FILES['myfile']['error'] == 0)
{
        if ($_FILES['myfile']['size'] <= 1000000)
        {
                $infosfichier = pathinfo($_FILES['myfile']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('png');
                if (in_array($extension_upload, $extensions_autorisees))  {
        }
}
}
*/

?>

