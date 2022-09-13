
<?php include 'include/menu1.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bib/css/bootstrap.min.css">
	<link rel="stylesheet" href="bib/css/estilo.css">
  <script src="bib/js/jquery.min.js"></script>
  <script src="bib/js/bootstrap.min.js"></script>
	<title>Area de Autenticação</title>
</head>
<body>
 <!--<div class="row responsive">
 	<br>
  <div class="col-lg-3"></div>
  <div class="col-sm-5">
  	<img src="img/logicon.png" class="img-circle responsive">
  	<form name="frm" role="form" action="script_login.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="email">Usuario:</label>
	    <input name="email" type="text" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="senha">Senha:</label>
	    <input name="senha"  type="password" class="form-control" id="senha">
	  </div>
	  <button type="submit" class="btn btn-block bg-default">Entrar</button>
	</form>
  </div>

  <div class="col-sm-4"></div>
</div> -->
 <!-- Outer Row -->
 
    <div class="row justify-content-center">

      <div class="col-xl-0 col-lg-5 col-md-10">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-16">
                <div class="p-5">
                	                            	<img src="img/logicon.png" class="img-circle responsive">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Seja Bem-Vindo ao Megaschool!</h1>
                  </div>
                  <form class="user" name="frm" role="form" action="cadastrar_login.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input name="email"  type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input name="senha"  type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="entrar"> 
                    Entrar
                </button> 
                <a class="small" href="cadastrar.php?a=buscar">Criar Conta?</a>
                    <hr>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="recuperar_passe.php?a=buscar">Esqueceu a senha?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
 <Footer>
  <footer class="bg-dark py-2"> 
   <div class="small text-center text-light">MegaSchool &copy; 2021 </div>
  	<hr class="bg-gray-900">
     
  </footer> -->
</body>
</html>