<?php

if($_SESSION['login']) {
  
?>
<!-- html -->
<div class="container">
    <h1>Bienvenue, <?php echo $_SESSION['login']; ?>!</h1>
    <p>Vous êtes connecté en tant que membre.</p>
   
<?php } else {
    
    ?>
    <!-- html -->

    <h1>Bienvenue sur notre site!</h1>
<?php 
}
?>
