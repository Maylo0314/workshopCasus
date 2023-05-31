<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">  
</head>
<body>

    <h2 class="wit">Klanten aanmaken</h2>

    <form action="CheckRegistreren.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Voornaam</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="voornaam" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Achternaam</label>
        <input type="text" class="form-control" id="exampleInputtext2" name="achternaam" required>
    </div>
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleInputtext2" name="email" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Gender</label>
        <input  class="form-control" id="exampleInputtext2" name="gender" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefoonnummer</label>
        <input type="text" class="form-control" id="exampleInputtext2" name="nummer" required>
    </div>

    <label for="exampleInputPassword1" class="form-label">Geboortedatum</label> 
        <br>
        <input class="datumcss bc" type="date" name="geboortedatum" required>
        <br>
        <br>
    <button type="submit" href="index.php" class="btn btn-primary buttonkleur" name="login">klant aanmaken</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> 