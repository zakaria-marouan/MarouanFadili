<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css/">
	<!-- Custom CSS -->
    <link href="css/inscription.css" rel="stylesheet">
	<meta charset="UTF-8">
	<title>Le blog du cinéma</title>
	</head>
<body>
	
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <form class="navbar-form navbar-right" role="form" action="connexion" method="post">
            <div class="form-group">
              <input type="text" placeholder="Email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a class="btn btn-success" href="/inscription" role="button">S'inscrire</a>
            
          </form>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Le Blog du cinéma</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class=""><a href="/home">Acceuil</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cinéma <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/NouveauteCinema">Nouveautés</a></li>
                <li><a href="#">Critiques</a></li>
                <li><a href="#">Classique</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Séries <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">Critiques</a></li>
                <li><a href="#">Classique</a></li>
            </ul>
            </li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

 
 
<form action="users" method="post" >
  <div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrer Nom">
  </div>
  
  <div class="form-group">
    <label for="">Prenom</label>
    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrer Prénom">
  </div>
  
  <div class="form-group">
    <label for="">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Entrer email">
  </div>
  
  
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
