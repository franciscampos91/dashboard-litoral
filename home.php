<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação Verão</title>

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Estilo Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    

</head>
<body>
    
<header class="header">
    Cabeçalho
</header>

<nav class="navbar">
    Navegação

</nav>

<div class="content">

    <div class="opm__pendentes">
        OPM pendentes
    </div>

    <div class="dash__card">
        <div class="card__total">
            <label for="">Locais</label>
            <h1>16</h1>
        </div>
        <div class="card__total">
            <label for="">Viaturas</label>
            <h1>100</h1>
        </div>
        <div class="card__total">
            <label for="">Efetivo</label>
            <h1>3203</h1>
        </div>
        <div class="card__total">
            <label for="">Tenente</label>
            <h1>20</h1>
        </div>
        <div class="card__total">
            <label for="">Subtenente/Sargento</label>
            <h1>200</h1>
        </div>
        <div class="card__total">
            <label for="">Cabo/Soldado</label>
            <h1>1000</h1>
        </div>
        <div class="card__total">
            <label for="">Aluno Soldado</label>
            <h1>2000</h1>
        </div>

    </div>

    <div class="dash__graf">
        <div class="cpi cpi__um">
            
           <div class="cpi__titulo">
                CPI-1
           </div>
            
            <div class="container__graficos">

                <div class="grafico__coluna">
                    <div class="coluna coluna__ten">
                        <div style="background-color: navy; height: 50%; width: 100%;">1</div>
                    </div>
                    <div class="coluna coluna__sgt">2</div>
                    <div class="coluna coluna__cbsd">3</div>
                    <div class="coluna__cidade">Cidade</div>
                </div>

                <div class="grafico__coluna">
                    <div class="coluna coluna__ten">1</div>
                    <div class="coluna coluna__sgt">2</div>
                    <div class="coluna coluna__cbsd">3</div>
                    <div class="coluna__cidade">Cidade</div>
                </div>

                <div class="grafico__coluna">
                    <div class="coluna coluna__ten">1</div>
                    <div class="coluna coluna__sgt">2</div>
                    <div class="coluna__cidade">Cidade</div>
                    <div class="coluna coluna__cbsd">3</div>
                </div>


                <div class="grafico__coluna">
                    <div class="coluna coluna__ten">1</div>
                    <div class="coluna coluna__sgt">2</div>
                    <div class="coluna__cidade">Cidade</div>
                    <div class="coluna coluna__cbsd">3</div>
                </div>


                <div class="grafico__coluna">
                    <div class="coluna coluna__ten">1</div>
                    <div class="coluna coluna__sgt">2</div>
                    <div class="coluna coluna__cbsd">3</div>
                    <div class="coluna__cidade">Cidade</div>
                </div>


            </div>



        </div>

        <div class="cpi cpi__seis">CPI-6</div>
        <div class="porcentagem">Porcentagem</div>

    </div>

    <div class="dash__mapa" id="map">
        Mapas
    </div>

</div>
    
</body>

<script src="js/leaflet.js"></script>

</html>