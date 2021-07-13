<!DOCTYPE html>
<html>
<head>
	<title>Questionario</title>
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
</head>
<body>

  <?php include("app/php/modulo-questionario.php"); ?>

  <?php
     
    echo "
         <script>

             var pergunta_1 = '".$perguntas[0]."';
             var resposta_1 = '".$respostas[0]."';

             var pergunta_2 = '".$perguntas[1]."';
             var resposta_2 = '".$respostas[1]."';

             var pergunta_3 = '".$perguntas[2]."';
             var resposta_3 = '".$respostas[2]."';

             var pergunta_4 = '".$perguntas[3]."';
             var resposta_4 = '".$respostas[3]."';

             var pergunta_5 = '".$perguntas[4]."';
             var resposta_5 = '".$respostas[4]."';

             var pergunta_6 = '".$perguntas[5]."';
             var resposta_6 = '".$respostas[5]."';

             var pergunta_7 = '".$perguntas[6]."';
             var resposta_7 = '".$respostas[6]."';

             var pergunta_8 = '".$perguntas[7]."';
             var resposta_8 = '".$respostas[7]."';

             var pergunta_9 = '".$perguntas[8]."';
             var resposta_9 = '".$respostas[8]."';

             var pergunta_10 = '".$perguntas[9]."';
             var resposta_10 = '".$respostas[9]."';
            

         </script>
    ";

  ?>
    
    <div class="menu">QUESTIONARIO.COM</div>


    <div class="questionario">

      <?php
         
        for($i = 0; $i < 10; $i++){

      ?>

      <div class="questionario-bloco">
    	  <div class="questionario-grupo">
            <span class="questionario-numero-questao"><?php echo $i + 1; ?> -</span> 
            <span class="questionario-texto-questao"> <?php echo $perguntas[$i]; ?> </span>
        </div>
        <div class="questionario-item">
           <div class="questionario-opcao">
               <input type="radio" name="questao<?php echo $i + 1; ?>" class="questionario-opcao-radio" value="q_1a">
               <div class="questionario-opcao-letra">A - </div>
               <div class="questionario-opcao-texto">Uma das opções do questionario</div>
               <div class="questionario-opcao-resposta">&check;</div>
            </div>
        </div>
        <div class="questionario-item">
           <div class="questionario-opcao">
               <input type="radio" name="questao<?php echo $i + 1; ?>" class="questionario-opcao-radio" value="q_1b">
               <div class="questionario-opcao-letra">B - </div>
               <div class="questionario-opcao-texto">Uma das opções do questionario</div>
               <div class="questionario-opcao-resposta">&check;</div>
            </div>
        </div>
        <div class="questionario-item">
           <div class="questionario-opcao">
               <input type="radio" name="questao<?php echo $i + 1; ?>" class="questionario-opcao-radio" value="q_1c">
               <div class="questionario-opcao-letra">C - </div>
               <div class="questionario-opcao-texto">Uma das opções do questionario</div>
               <div class="questionario-opcao-resposta">&check;</div>
            </div>
        </div>
        <div class="questionario-item">
           <div class="questionario-opcao">
               <input type="radio" name="questao<?php echo $i + 1; ?>" class="questionario-opcao-radio" value="q_1d">
               <div class="questionario-opcao-letra">D - </div>
               <div class="questionario-opcao-texto">Uma das opções do questionario</div>
               <div class="questionario-opcao-resposta">&check;</div>
            </div>
        </div>
        <div class="questionario-item">
           <div class="questionario-opcao">
               <input type="radio" name="questao<?php echo $i + 1; ?>" class="questionario-opcao-radio" value="q_1e">
               <div class="questionario-opcao-letra">E - </div>
               <div class="questionario-opcao-texto">Uma das opções do questionario</div>
               <div class="questionario-opcao-resposta">&check;</div>
            </div>
        </div>	
      </div>

      <?php

      }

      ?>

        <button class="questionario-submit" type="submit">Finalizar Questionario</button>
    </div>	

 <script type="text/javascript" src="app/js/jquery-3.6.0.min.js"></script>
 <script type="text/javascript" src="app/js/script.js"></script>
</body>
</html>