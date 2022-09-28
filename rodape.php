<?php

?>

<footer>
    <nav class="foot">
        <div class="rodape">
            <span class="sobreu">
                <h2>Sobre</h2>
                <ul>
                    <li><a href="?pg=sobre">sobre</a></li>
                    <li>contato</li>
                    <li>instagram</li>
                </ul>
            </span>
            <hr>
            <span class="ler">
                <h2>Ler Berserk</h2>
                <ul>
                    <li><a href="https://mangalivre.net/manga/berserk/117" target="_blank">Clique para ler</a></li>
                </ul>
            </span>
        </div>
        <div class="vline">

        </div>
    </nav>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap');
*{
    margin: 0;
    padding: 0;

}
body{
    font-family: 'PT Serif', serif;
}

footer{
    width: 100%;
    height: 100px;
    color: red;
    justify-content: space-between;
    background-color:white;
    box-shadow: 0,0,0,1;
}
footer hr{
    color: rgba(0, 0, 0, 0.479);
    background-color: red;
    width: 2px;
    padding-bottom: 10px;
}
.rodape{
    display: flex;
    justify-content: space-around;
    padding-top: 30px;
    border-top: red solid 2px;
    
}
.sobreu{
    color: black;
}
.sobreu li{
    font-size: 10px;
}

.ler{
    color: black;
}
.ler li{
    font-size: 10px;
}
a{
    color: black;
}
    </style>
</footer>