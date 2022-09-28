<?php

?>

<main>
<a href="?pg=conteudo"></a>
<div>
<a href="https://www.youtube.com/watch?v=kw4Vb727bWg" target="_blank">
  <figure id="guts">
    <img src="midias/gutsmain.jpg" alt="guts" width="400px" height="600px">
    <figcaption class="logogutss">GUTS <figcaption class="textoguts">Guts é o principal protagonista de Berserk. Também conhecido como Espadachim Negro,
    Guts é um ex-mercenário e integrante do Bando do Falcão, atualmente um viajante com a marca 
    do sacrifício no qual viaja
    pelo mundo em constantes conflitos entre alcançar seus 
    objetivos e zelar pelos próximos a ele.</figcaption>
  </figcaption>
  </figure>
  </a>

  <a href="https://www.youtube.com/watch?v=Sbzkc8U-k4E" target="_blank">
  <figure id="grif">
    <img src="midias/grif.jpg" alt="grififh" width="400px" height="600px">
    <figcaption class="griflogo">GRIFFITH<figcaption class="textogrif">Griffith é o 
      antagonista principal de Berserk. Ele é o fundador e líder dos grupos 
    mercenários Bando do Falcão e o Novo Bando do Falcão, 
  o governador da cidade de Falconia e o quinto membro da Mão de Deus; conhecido como Femt.</figcaption>
  </figcaption>
  </a>
  </figure>
<a href="https://www.youtube.com/watch?v=-wfF1wQNSzw" target="_blank">
  <figure id="caska">
    <img src="midias/caska.jpg" alt="caska" width="400px" height="600px">
    <figcaption class="cascalogo">CASCA <figcaption class="cascatexto">
    Casca é apresentada como uma bela mulher, de baixa estatura e musculosa, negra de olhos 
    castanhos e cabelo preto curto. Em Pós-eclipse, sua aparência é alterada, 
    seus cabelos crescem até na altura dos ombros e a Marca do Sacrifício é selada em seu peito esquerdo.
    </figcaption>
  </figcaption>
  </a>
  </figure>

</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap');
*{
    margin: 0;
    padding: 0;

}
body{
    font-family: 'PT Serif', serif;
}
main{
    padding-left: 50px;
    background-color: black;
    cursor: pointer;
}

#guts {
  display: inline-block;
  position: relative;
}
#guts:hover{
  transition: all 0.7s;
  margin-left: 5px;
}
#grif:hover{
  transition: all 0.7s;
  margin-left: 8px;
}
#caska:hover{
  transition: all 0.7s;
  margin-left: 5px;
}
#guts figcaption{
  position: absolute;
  top: 250px;
  right: 70px;
  font-size: 40px;
  color: white;
  text-shadow: 0px 0px 5px black;
}
#guts .logogutss{
  position: absolute;
  left: 120px;
  
}
#guts .logogutss:hover{
  background:rgba(0, 0, 0, 0) ;
  color: red;
}
#guts figcaption:hover .textoguts{
    background:rgba(0, 0, 0, 0) ;
    color: red;
    box-shadow: inset 0 0 1px red;
    transition: all 1s;
}
#guts .textoguts{
  color: rgba(0, 0, 0, 0);
  font-size: 12px;
  position: sticky;
  transition: all 1s;
  background-color: rgba(0, 0, 0, 0);
}

#grif {
  display: inline-block;
  position: relative;
}

#grif figcaption{
  position: absolute;
  top: 250px;
  right: 70px;
  font-size: 40px;
  color: white;
  text-shadow: 0px 0px 5px black;
}
#grif .griflogo{
  left: 60px;
}
#grif .griflogo:hover{
  background:rgba(0, 0, 0, 0) ;
  color: lightblue;
}
#grif figcaption:hover .textogrif{
    background:rgba(0, 0, 0, 0) ;
    color: lightblue;
    box-shadow: inset 0 0 1px lightblue;
    transition: all 1s;
}
#grif .textogrif{
  color: rgba(0, 0, 0, 0);
  font-size: 12px;
  position: sticky;
  transition: all 1s;
  background-color: rgba(0, 0, 0, 0);
}

#caska {
  display: inline-block;
  position: relative;
}

#caska figcaption {
  position: absolute;
  top: 250px;
  left: 120px;
  font-size: 40px;
  color: white;
  text-shadow: 0px 0px 5px black;
}
#caska figcaption:hover{
    background:rgba(0, 0, 0, 0) ;
    color: orangered;
    box-shadow: inset 0 0 1px orangered;
    transition: all 1s;
}
#caska .cascalogo{
  left: 60px;
}
#caska .cascalogo:hover{
  background:rgba(0, 0, 0, 0) ;
  color: orangered;
}
#caska figcaption:hover .cascatexto{
    background:rgba(0, 0, 0, 0) ;
    color: orangered;
    box-shadow: inset 0 0 1px orangered;
    transition: all 1s;
}
#caska .cascatexto{
  color: rgba(0, 0, 0, 0);
  font-size: 12px;
  position: sticky;
  transition: all 1s;
  background-color: rgba(0, 0, 0, 0);
}
</style>
</main>
