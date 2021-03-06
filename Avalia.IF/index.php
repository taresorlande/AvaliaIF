<?php
	include_once "conexao.php";
?>
<html lang="pt-BR">

<head>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1" charset="ISO-8859-1">-->
  <meta charset="UTF-8">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/avaliations.js"></script>

  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  <title>AVALIF</title>
  <link rel="shortcut icon" href="/IF.png" type="image/png">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body class="bg-secondary">
	<?php
		$id = 5;
		$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
		$pegaArtigo->execute(array($id));
		while($artigo = $pegaArtigo->fetchObject()){
			$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
	?>

	<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
	<span class="article" data-id="<?php echo $id;?>"></span>

	<div class="barra">
		<span class="bg"></span>
		<span class="stars">
	<?php for($i=1; $i<=5; $i++):?>


	<span class="star" data-vote="<?php echo $i;?>">
		<span class="starAbsolute"></span>
	</span>
	<?php
		endfor;
		echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
	}
	?>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="#">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b> Menu</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="#">About</a> </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="#">Log in</a> </li>
          <li class="nav-item"> <a class="nav-link text-primary" href="#">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="d-flex align-items-center section-aquamarine py-5 cover bg-dark" style="	background-image: linear-gradient(to bottom, rgba(0,0,245,0.1), rgba(0,44,0,0.5));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-5">
          <h1 class="display-2 d-none d-md-block text-center text-warning"><i class="fa fa-user fa-fw"></i><i class="fa fa-user fa-fw text-primary"></i>Avalia.IF</h1>
          <h1 class="display-4 d-block d-md-none text-center">Avalia.IF</h1>
          <p class="text-center text-success" style="">Avaliação de professores do IFMG Campus Sabará </p>
          <div class="form-group"><label></label><input class="form-control" id="myInput" type="text" placeholder="Pesquisar.."></div><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color:#26992f;">
    <div class="container">
      <div class="input-group mb-3">
        <!--div class="input-group-append">
					<button class="btn btn-success" type="submit" data-toggle="tooltip" title="Pesquise o Professor Aqui!">Pesquisar</button>
				</div-->
      </div>
    </div>
    <div class="row">
      <div class="col-2" style="background-color:white;">
        <!--.col-->
      </div>
      <table class="table table-hover table-dark table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Conteudo</th>
            <th>Didatica</th>
            <th>Planejamento</th>
            <th>Avaliacao</th>
            <th>Relacionamento</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <tr>
            <th>1</th>
            <td><a href="#" data-toggle="modal" data-target="#myModalJohn" class="text-warning">John</a></td>
            <td>
              <div class="rate">
								<?php
									$id = 1;
									$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
									$pegaArtigo->execute(array($id));
									while($artigo = $pegaArtigo->fetchObject()){
										$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
								?>

								<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
								<span class="article" data-id="<?php echo $id;?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php
									endfor;
									echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
								}
								?>
              </div>
            </td>
            <td>
              <div class="rate">
								<?php
									$id = 2;
									$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
									$pegaArtigo->execute(array($id));
									while($artigo = $pegaArtigo->fetchObject()){
										$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
								?>

								<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
								<span class="article" data-id="<?php echo $id;?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php
									endfor;
									echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
								}
								?>
              </div>
            </td>
            <td>
              <div class="rate">
								<?php
									$id = 3;
									$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
									$pegaArtigo->execute(array($id));
									while($artigo = $pegaArtigo->fetchObject()){
										$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
								?>

								<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
								<span class="article" data-id="<?php echo $id;?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php
									endfor;
									echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
								}
								?>
              </div>
            </td>
            <td>
              <div class="rate">
								<?php
									$id = 4;
									$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
									$pegaArtigo->execute(array($id));
									while($artigo = $pegaArtigo->fetchObject()){
										$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
								?>

								<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
								<span class="article" data-id="<?php echo $id;?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php
									endfor;
									echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
								}
								?>
              </div>
            </td>
            <td>
              <div class="rate">
								<?php
									$id = 5;
									$pegaArtigo = $pdo->prepare("SELECT * FROM `artigos` WHERE id = ?");
									$pegaArtigo->execute(array($id));
									while($artigo = $pegaArtigo->fetchObject()){
										$calculo = ($artigo->pontos == 0) ? 0 : round(($artigo->pontos/$artigo->votos), 1);
								?>

								<span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
								<span class="article" data-id="<?php echo $id;?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php
									endfor;
									echo '</span></div><p class="votos"><span>'.$artigo->votos.'</span> votos</p>';
								}
								?>
              </div>
            </td>
          </tr>
          <tr>
            <th>2</th>
            <td><a href="#" data-toggle="modal" data-target="#myModalRick" class="text-warning">Rick</a></td>
            <td>
              <div class="rate">
                <input type="radio" id="star95" name="rate" value="5">
                <label for="star95" title="text">5 stars</label>
                <input type="radio" id="star94" name="rate" value="4">
                <label for="star94" title="text">4 stars</label>
                <input type="radio" id="star93" name="rate" value="3">
                <label for="star93" title="text">3 stars</label>
                <input type="radio" id="star92" name="rate" value="2">
                <label for="star92" title="text">2 stars</label>
                <input type="radio" id="star91" name="rate" value="1">
                <label for="star91" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star90" name="rate" value="5">
                <label for="star90" title="text">5 stars</label>
                <input type="radio" id="star99" name="rate" value="4">
                <label for="star99" title="text">4 stars</label>
                <input type="radio" id="star98" name="rate" value="3">
                <label for="star98" title="text">3 stars</label>
                <input type="radio" id="star97" name="rate" value="2">
                <label for="star97" title="text">2 stars</label>
                <input type="radio" id="star96" name="rate" value="1">
                <label for="star96" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star105" name="rate" value="5">
                <label for="star105" title="text">5 stars</label>
                <input type="radio" id="star104" name="rate" value="4">
                <label for="star104" title="text">4 stars</label>
                <input type="radio" id="star103" name="rate" value="3">
                <label for="star103" title="text">3 stars</label>
                <input type="radio" id="star102" name="rate" value="2">
                <label for="star102" title="text">2 stars</label>
                <input type="radio" id="star101" name="rate" value="1">
                <label for="star101" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star100" name="rate" value="5">
                <label for="star200" title="text">5 stars</label>
                <input type="radio" id="star109" name="rate" value="4">
                <label for="star109" title="text">4 stars</label>
                <input type="radio" id="star108" name="rate" value="3">
                <label for="star108" title="text">3 stars</label>
                <input type="radio" id="star107" name="rate" value="2">
                <label for="star107" title="text">2 stars</label>
                <input type="radio" id="star106" name="rate" value="1">
                <label for="star106" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star115" name="rate" value="5">
                <label for="star115" title="text">5 stars</label>
                <input type="radio" id="star114" name="rate" value="4">
                <label for="star114" title="text">4 stars</label>
                <input type="radio" id="star113" name="rate" value="3">
                <label for="star113" title="text">3 stars</label>
                <input type="radio" id="star112" name="rate" value="2">
                <label for="star112" title="text">2 stars</label>
                <input type="radio" id="star111" name="rate" value="1">
                <label for="star111" title="text">1 star</label>
              </div>
            </td>
          </tr>
          <tr>
            <th>3</th>
            <td><a href="#" data-toggle="modal" data-target="#myModalMary" class="text-warning">Mary</a></td>
            <td>
              <div class="rate">
                <input type="radio" id="star35" name="rate" value="5">
                <label for="star35" title="text">5 stars</label>
                <input type="radio" id="star34" name="rate" value="4">
                <label for="star34" title="text">4 stars</label>
                <input type="radio" id="star33" name="rate" value="3">
                <label for="star33" title="text">3 stars</label>
                <input type="radio" id="star32" name="rate" value="2">
                <label for="star32" title="text">2 stars</label>
                <input type="radio" id="star31" name="rate" value="1">
                <label for="star31" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star30" name="rate" value="5">
                <label for="star30" title="text">5 stars</label>
                <input type="radio" id="star39" name="rate" value="4">
                <label for="star39" title="text">4 stars</label>
                <input type="radio" id="star38" name="rate" value="3">
                <label for="star38" title="text">3 stars</label>
                <input type="radio" id="star37" name="rate" value="2">
                <label for="star37" title="text">2 stars</label>
                <input type="radio" id="star36" name="rate" value="1">
                <label for="star36" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star45" name="rate" value="5">
                <label for="star45" title="text">5 stars</label>
                <input type="radio" id="star44" name="rate" value="4">
                <label for="star44" title="text">4 stars</label>
                <input type="radio" id="star43" name="rate" value="3">
                <label for="star43" title="text">3 stars</label>
                <input type="radio" id="star42" name="rate" value="2">
                <label for="star42" title="text">2 stars</label>
                <input type="radio" id="star41" name="rate" value="1">
                <label for="star41" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star40" name="rate" value="5">
                <label for="star40" title="text">5 stars</label>
                <input type="radio" id="star49" name="rate" value="4">
                <label for="star49" title="text">4 stars</label>
                <input type="radio" id="star48" name="rate" value="3">
                <label for="star48" title="text">3 stars</label>
                <input type="radio" id="star47" name="rate" value="2">
                <label for="star47" title="text">2 stars</label>
                <input type="radio" id="star46" name="rate" value="1">
                <label for="star46" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star55" name="rate" value="5">
                <label for="star55" title="text">5 stars</label>
                <input type="radio" id="star54" name="rate" value="4">
                <label for="star54" title="text">4 stars</label>
                <input type="radio" id="star53" name="rate" value="3">
                <label for="star53" title="text">3 stars</label>
                <input type="radio" id="star52" name="rate" value="2">
                <label for="star52" title="text">2 stars</label>
                <input type="radio" id="star51" name="rate" value="1">
                <label for="star51" title="text">1 star</label>
              </div>
            </td>
          </tr>
          <tr>
            <th>4</th>
            <td><a href="#" data-toggle="modal" data-target="#myModalJuly" class="text-warning">July</a></td>
            <td>
              <div class="rate">
                <input type="radio" id="star65" name="rate" value="5">
                <label for="star65" title="text">5 stars</label>
                <input type="radio" id="star64" name="rate" value="4">
                <label for="star64" title="text">4 stars</label>
                <input type="radio" id="star63" name="rate" value="3">
                <label for="star63" title="text">3 stars</label>
                <input type="radio" id="star62" name="rate" value="2">
                <label for="star62" title="text">2 stars</label>
                <input type="radio" id="star61" name="rate" value="1">
                <label for="star61" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star60" name="rate" value="5">
                <label for="star60" title="text">5 stars</label>
                <input type="radio" id="star69" name="rate" value="4">
                <label for="star69" title="text">4 stars</label>
                <input type="radio" id="star68" name="rate" value="3">
                <label for="star68" title="text">3 stars</label>
                <input type="radio" id="star67" name="rate" value="2">
                <label for="star67" title="text">2 stars</label>
                <input type="radio" id="star66" name="rate" value="1">
                <label for="star66" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star75" name="rate" value="5">
                <label for="star75" title="text">5 stars</label>
                <input type="radio" id="star74" name="rate" value="4">
                <label for="star74" title="text">4 stars</label>
                <input type="radio" id="star73" name="rate" value="3">
                <label for="star73" title="text">3 stars</label>
                <input type="radio" id="star72" name="rate" value="2">
                <label for="star72" title="text">2 stars</label>
                <input type="radio" id="star71" name="rate" value="1">
                <label for="star71" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star70" name="rate" value="5">
                <label for="star70" title="text">5 stars</label>
                <input type="radio" id="star79" name="rate" value="4">
                <label for="star79" title="text">4 stars</label>
                <input type="radio" id="star78" name="rate" value="3">
                <label for="star78" title="text">3 stars</label>
                <input type="radio" id="star77" name="rate" value="2">
                <label for="star77" title="text">2 stars</label>
                <input type="radio" id="star76" name="rate" value="1">
                <label for="star76" title="text">1 star</label>
              </div>
            </td>
            <td>
              <div class="rate">
                <input type="radio" id="star85" name="rate" value="5">
                <label for="star85" title="text">5 stars</label>
                <input type="radio" id="star84" name="rate" value="4">
                <label for="star84" title="text">4 stars</label>
                <input type="radio" id="star83" name="rate" value="3">
                <label for="star83" title="text">3 stars</label>
                <input type="radio" id="star82" name="rate" value="2">
                <label for="star82" title="text">2 stars</label>
                <input type="radio" id="star81" name="rate" value="1">
                <label for="star81" title="text">1 star</label>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="py-5 text-center text-white" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(img/if.png);	background-position: center center, center center;	background-size: cover, cover;	background-repeat: repeat, repeat;">
      <div class="container">
        <div class="row">
          <div class="mx-auto col-md-12">
            <h1 class="mb-3">Time de desenvolvimento</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/ta.jpg" alt="Card image cap" width="200">
            <h4> <b>Tares Orlande</b></h4>
            <p class="mb-0">CEO</p>
          </div>
          <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/sl.jpg" alt="Card image cap" width="200">
            <h4> <b>Matheus Saliba</b></h4>
            <p class="mb-0">Designer</p>
          </div>
          <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="img/le.jpg" width="200">
            <h4> <b>Leando H. Sousa</b></h4>
            <p class="mb-0">Architect</p>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
    </div>
    <!-- The Modal John-->
    <div class="modal fade text-primary bg-dark" id="myModalJohn">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title text-body">John Doe</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
              <div class="col-8 table-responsive" style="background-color:green;">
                <div class="container">
                  <div class="card" style="width:400px">
                    <img class="card-img-top" src="./img/img_avatar1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title text-body">John Doe</h4>
                      <p class="card-text text-body">Algum exemplo de texto sobre esta pessoa esta inserido aqui (imagine)</p>
                      <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- The Modal John-->
    <div class="modal fade bg-dark" id="myModalRick">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Rick Zed</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
              <div class="col-8 table-responsive" style="background-color:green;">
                <div class="container">
                  <div class="card" style="width:400px">
                    <img class="card-img-top" src="./img/img_avatar1.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title">Rick Zed</h4>
                      <p class="card-text">Algum exemplo de texto sobre esta pessoa esta inserido aqui (imagine)</p>
                      <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- The Modal Mary-->
    <div class="modal fade bg-dark" id="myModalMary">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Mary Jo<br></h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
              <div class="col-8 table-responsive" style="background-color:green;">
                <div class="container">
                  <div class="card" style="width:400px">
                    <img class="card-img-top" src="./img/img_avatar2.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title">Mary Jo</h4>
                      <p class="card-text">Algum exemplo de texto sobre esta pessoa esta inserido aqui (imagine)</p>
                      <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- The Modal July-->
    <div class="modal fade bg-dark" id="myModalJuly">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">July Joe</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
              <div class="col-8 table-responsive" style="background-color:green;">
                <div class="container">
                  <div class="card" style="width:400px">
                    <img class="card-img-top" src="./img/img_avatar2.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <h4 class="card-title">July Joe</h4>
                      <p class="card-text">Algum exemplo de texto sobre esta pessoa esta inserido aqui (imagine)</p>
                      <a href="#" class="btn btn-primary">Ver Perfil</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-2" style="background-color:lavender;">
                <!--.col-->
              </div>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
    <script>
      $(document).ready(function() {
        $("#myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
  </div>
</body>

</html>
