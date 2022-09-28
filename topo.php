<?php

?>
    <header>
    <div class="menu">
    <ul>  
        <a href="?pg=conteudo" class="home"><li>HOME</li></a>
        <a href="?pg=sobre" class="sobre"><li>SOBRE</li></a>
        <a href="?pg=manga" class="manga"><li>MANGA</li></a>
    </ul> 
    <style>
@import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap');
*{
    margin: 0;
    padding: 0;

}
body{
    font-family: 'PT Serif', serif;
    background-color: rgb(255, 255, 255);
}

header{
    height: 10vh;
    display: flex;
    justify-content: space-between;
    background-color: black;
    box-shadow: 0 0 1rem black;
    border-bottom: red solid 2px;
}
.menu ul{
display: flex;
margin: 23px;

}
.home li:hover{
    transition: all 1s;
    color: white;
    background-color: 0;
    margin-left: 10px;
}
.contato li:hover{
    transition: all 1s;
    color: white;
    background-color: 0;
    margin-left: 10px;
}
.sobre li:hover{
    transition: all 1s;
    color: white;
    background-color: 0;
    margin-left: 10px;
}
.manga li:hover{
    transition: all 1s;
    color: white;
    background-color: 0;
    background-position: 10px;
    margin-left: 10px;
}
.menu ul li{
    color: rgb(190, 34, 34);
    list-style-position: none;
    cursor: pointer;
    padding-left: 2rem;
    list-style-type: none;
}

a{
    color: none;
    text-decoration: none;
}
    </style> 
    </div>
    </header>
