<?php 
    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];  
    $lytis = $_POST['lytis']; 
    $miestas = $_POST['select-option'];
    $aboutMe = $_POST['about-me-area'];
?>


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
    <link rel="stylesheet" href="response.css">
    <title>Info</title>
</head>
<body>
    <div class="output-card mx-auto" style="width: 30rem; height: 60rem;">
        <h1>Studentas</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <?php 
                        echo $vardas .  " " . $pavarde;
                    ?>
                </h5>
                <p class="card-text">
                <?php
                    echo "Mano lytis: $lytis". "<br/>";

                    if(isset($_POST['submit'])){
                        if(!empty($_POST['transportas'])) {    
                            foreach($_POST['transportas'] as $value){
                                echo "Į paskaitas vyksiu: ".$value.'<br/>';
                            }
                        }
                    }

                    echo "Miestas, kuriame studijuoju: $miestas" . "<br>";
                    echo "Trumpai apie mane: $aboutMe" . "<br>";

                   
                ?>
                </p>
                <a href="form.php" class="btn btn-warning">Atgal į formą</a>
            </div>
        </div>
    </div>
    
    
</body>
</html>