<?php

if(isset($_POST[‘trimite’]))

{echo $_POST[‘name’].’:’.$_POST[‘mail’];

}

else {

?>

<form action=“index.php” method=“post”>

name: <input type=“text” name=“name”/>

<br/>

e-mail: <input type=“text” name=“mail”/>

<br/>

<input type=“submit” name=“trimite” value=“comments”/>

</form>

<?php

}

?>
