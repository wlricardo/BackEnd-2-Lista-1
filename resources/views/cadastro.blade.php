 <?php
 if (isset($_POST['senha'], $_POST['confirmarSenha'])) {
     if ($_POST['senha'] !== $_POST['confirmarSenha']) {
         echo "<p style='color: red;'>As senhas não coincidem.</p>";
     } else {
         echo "<p style='color: green;'>Acesso liberado.</p>";
     }
 }
 ?>
