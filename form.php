<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <title>Studento registracija</title>
</head>
<?php ?>
<body>
<div class="mx-auto" style="width: 50rem; height: 80rem;">
    <h1 class="form-heading mb-5 text-center">Studento registracija</h1>
    <form action="response.php" method="POST">
        <div class="mb-3">
            <label for="vardas" class="form-label">Vardas:</label>
            <input type="text" name="vardas" class="form-control" id="vardas">
        </div>
        <div class="mb-3">
            <label for="pavarde" class="form-label">Pavardė:</label>
            <input type="text" name="pavarde" class="form-control" id="pavarde">
        </div>
        <p>Lytis:</p>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lytis" value="vyras" id="vyras">
            <label class="form-check-label" for="vyras">Vyras</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lytis" value="moteris" id="moteris">
            <label class="form-check-label" for="moteris">Moteris</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="lytis" value="kita" id="kita">
            <label class="form-check-label" for="kita">Kita</label>
        </div>
        <p class="mt-3">Į paskaitas vyksiu:</p>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="transportas[]" value="dviračiu" id="dviraciu">
            <label class="form-check-label pe-3" for="dviraciu">Dviračiu</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="transportas[]" value="mašina" id="masina">
            <label class="form-check-label pe-3" for="masina">Mašina</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="transportas[]" value="autobusu" id="autobusu">
            <label class="form-check-label pe-3" for="autobusu">Autobusu</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="transportas[]" value="pėsčiomis" id="pesciomis">
            <label class="form-check-label pe-3" for="pesciomis">Pėsčiomis</label>
        </div>
        <p class="mt-3">Kokiame mieste studijuojate:</p>
        <select class="form-select" name="select-option">
            <option selected>Pasirinkite</option>
            <option value="Vilnius">Vilnius</option>
            <option value="Kaunas">Kaunas</option>
            <option value="Klaipėda">Klaipėda</option>
            <option value="Šiauliai">Šiauliai</option>
            <option value="Panevėžys">Panevėžys</option>
        </select>
        <p class="mt-3">Trumpai apie save:</p>
        <div class="input-group">
            <textarea class="form-control" name="about-me-area" placeholder="Labas, mano vardas..."></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-warning mt-4">Pateikti</button>
    </form>
</div>
    
</body>
</html>