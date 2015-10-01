# ROMA FRAMEWORK
# FRAMEWORK PARA SITES SIMPLES

Ao fazer o download, abra o arquivo header.php e defina o caminho base do seu site na constante BASEPATH.

Caso você necessite chamar algum arquivo .js, .css, .img, ou até mesmo criar um link interno em seu site é necessário que você realize no seguinte formato:

<script src="<?php echo BASEPATH; ?>meuscript.js"></script>
<link rel="stylesheet" href="<?php echo BASEPATH; ?>meuestilo.css" />
<img src="<?php echo BASEPATH; ?>minhaimagem.png" alt="">
<a href="<?php echo BASEPATH; ?>meulink">Link</a>

Mais detalhes nos arquivos do framework.

 
