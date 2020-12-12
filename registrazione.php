

<h2>Registrazione Utenti</h2>



<form method="post">
  <div class="form-group">
    <label for="cognome">Nome</label>
    <input type="text" class="form-control" placeholder="il tuo nome" name="cognome" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="la tua email" name="email" required>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" placeholder="password" name="password" required>
  </div>

  <button type="submit" class="btn btn-block btn-primary" name="submit">Invia</button>

<!--non riusciamo a fare l'output della pagina, finora .,,un link, oppure un redirect,,,,
Stiamo per arrivare:,,,   http://www.localhost:8080/Views/Modules/registrazione.php Domenica, 06 Dicembre 2020. -->


</form>





<?php
$registra = new MvcTemplate;
$registra->RegistraUtenteController();


?>
