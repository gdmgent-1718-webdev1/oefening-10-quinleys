<?php

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'onbekend';
$formSubmitted = isset($_REQUEST['formSubmitted']);

if($formSubmitted){
    $voornaam = isset($_POST['voornaam']) && !empty($_POST['voornaam']) ? $_POST['voornaam'] : 'Anoniempje';
    $familienaam = isset($_POST['familienaam']) && !empty($_POST['familienaam']) ? $_POST['familienaam'] : 'Anoniempje';
    $mail = isset($_POST['mail']) && !empty($_POST['mail']) ? $_POST['mail'] : 'Anoniempje';
    $password = isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] : 'Anoniempje';
    $message = isset($_POST['message']) && !empty($_POST['message']) ? $_POST['message'] : 'Anoniempje';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php if($formSubmitted): ?>
    <div class="card">
    <h2 class="card-header">Hallo, <?=$voornaam ?> <?=$familienaam?>!</h2>
    <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Info:</h6>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Voornaam: <?=$voornaam ?></li>
    <li class="list-group-item">Familienaam: <?=$familienaam ?></li>
    <li class="list-group-item">Passwoord: <?=$password ?></li>
    <li class="list-group-item">E-mail: <?=$mail ?></li>
    <li class="list-group-item">Bericht: <?=$message ?></li>
    </ul>
    </div>
<?php else: ?>
<div class="container">
<form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="voornaam">Voornaam: </label>
            <input name="voornaam" class="form-control" type="text">
        </div>
        <div class="form-group col-md-6">
            <label for="familienaam">Familienaam: </label>
            <input name="familienaam" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="mail">E-mail: </label>
        <input type="email" name="mail" class="form-control" id="exampleInputEmail1" type="text">
    </div>
    <div class="form-group">
        <label for="password">Wachtwoord: </label>
        <input type ="password" name="password" class="form-control" id="exampleInputPassword1" type="text">
    </div>
    <div class="form-group">
        <label for="message">Bericht: </label>
        <textarea class="form-control" name="message" type="text"></textarea>
    </div>
        <input name="formSubmitted" type="submit" value="Verzenden" class="btn btn-primary">
    </form>
    </div>
    <?php endif ?>    
    </div>
    </div>
    <script>
    console.info('Request Method:', `<?= $_SERVER ['REQUEST_METHOD']?>`);
    console.info('$_GET:', `<?php var_export($_GET) ?>`);
    console.info('$_POST:', `<?php var_export($_POST)?>`);
    console.info('$_REQUEST:', `<?php var_export($_REQUEST)?>`);
    </script>
</body>
</html>