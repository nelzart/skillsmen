
<?php


if (isset($_POST['action'])) {
    if ($_POST['action'] == 'addUser()') {
        require('/controleur/users/createUser.php');
        require('/components/usersComponents/creation.php');
    }
   
}
else {
   echo "hello";
}
?>