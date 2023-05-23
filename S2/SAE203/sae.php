<?php
$semestres = [];

if (!empty($_GET["FiltreS1"]))
    $semestres[] = $_GET["FiltreS1"];
if (!empty($_GET["FiltreS2"]))
    $semestres[] = $_GET["FiltreS2"];
if (!empty($_GET["FiltreS3"]))
    $semestres[] = $_GET["FiltreS3"];
if (!empty($_GET["FiltreS4"]))
    $semestres[] = $_GET["FiltreS4"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sae.css">
    <title>SAE</title>
</head>

<body>
    <!-- For Matrix BG -->
    <canvas id="canvas">Canvas is not supported in your browser.</canvas>
    <canvas id="canvas2">Canvas is not supported in your browser.</canvas>

    <div class="page_show">

        <div class="pageshow-wrapper">
            <h1>
                <div class="decode-text">
                    <div class="text">S</div>
                    <div class="text">A</div>
                    <div class="text">E</div>
                    <div class="text">'</div>
                    <div class="text">s</div>
                    <div class="space"></div>

                    <div class="text">L</div>
                    <div class="text">I</div>
                    <div class="text">S</div>
                    <div class="text">T</div>
                </div>
            </h1>

            <div class="filterWrapper">
                <div class="zoneFiltres">
                    <input type="checkbox" name="FiltreS1" value="S1" id="S1" <?php if (isset($_GET["FiltreS1"]))
                        echo "checked";
                    ?>>
                    <span class="checkmark"></span>
                    <label for="S1">Semestre 1</label>

                    <input type="checkbox" name="FiltreS2" value="S2" id="S2" <?php if (isset($_GET["FiltreS2"]))
                        echo "checked";
                    ?>>
                    <span class="checkmark"></span>
                    <label for="S2">Semestre 2</label>

                    <input type="checkbox" name="FiltreS3" value="S3" id="S3" <?php if (isset($_GET["FiltreS3"]))
                        echo "<script>alert(\"la variable est nulle\")</script>";
                    ?>>
                    <span class="checkmark"></span>
                    <label for="S3">Semestre 3</label>

                    <input type="checkbox" name="FiltreS4" value="S4" id="S4" <?php if (isset($_GET["FiltreS4"]))
                        echo "checked";
                    ?>>
                    <span class="checkmark"></span>
                    <label for="S4">Semestre 4</label>
                </div>

                <main>
                    <div class="carousel-slideL">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8l-4 4 4 4M16 12H9" />
                        </svg>
                    </div>
                    <div class="carousel">
                        <div class="carousel-elements">
                            <div class="S1 SAE SAE101">SAE1.01</div>
                            <div class="S1 SAE SAE102">SAE1.02</div>
                            <div class="S1 SAE SAE103">SAE1.03</div>
                            <div class="S1 SAE SAE104">SAE1.04</div>
                            <div class="S1 SAE SAE105">SAE1.05</div>
                            <div class="S1 SAE SAE106">SAE1.06</div>
                            <div class="S2 SAE SAE201">SAE2.01</div>
                            <div class="S2 SAE SAE202">SAE2.02</div>
                            <div class="S2 SAE SAE203">SAE2.03</div>
                            <div class="S2 SAE SAE204">SAE2.04</div>
                        </div>
                    </div>
                    <div class="carousel-slideR">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8l4 4-4 4M8 12h7" />
                        </svg>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <?php
    echo "SALUT";
    ?>

    <script src="./js/sae.js"></script>
</body>

</html>