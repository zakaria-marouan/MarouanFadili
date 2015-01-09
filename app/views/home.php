<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/bootstrap.min.css/">
	<meta charset="UTF-8">
	
	<link href="/css/carousel.css" rel="stylesheet">
	<title>Le blog du cinéma</title>


</head>
<body>
	<!-------------------------------------- début NavBar -------------------------------------------------------- -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
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
          <a class="navbar-brand" href="/home">Le Blog du cinéma</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class=""><a href="/home">Accueil</a></li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cinéma <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/NouveauteCinema">Nouveautés</a></li>
                <li><a href="/ClassiqueCinema">Classiques</a></li>
                
              </ul>
            </li>
            
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    		
	</div>
<!--------------------------------- Fin navBar----------------------------------------------- -->

   


  <!--------------------------------- Debut caroussel----------------------------------------------- -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://www.addictomovie.com/wp-content/uploads/2013/11/hobbit_2_affiche_33.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Le Hobbit 3: La batailles des cinq armées.</h1>
              <p> Quoi de meilleur pour Noël qu'un chef d'oeuvre du maître Peter Jackson qui nous offre une plongée dans un monde plein de magie.</p>
              <p><a class="btn btn-lg btn-primary" href="/NouveauteCinema" role="button">Lire plus</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://studentsforliberty-paris.fr/wp-content/uploads/2013/11/Clockwork-Orange.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A vos classiques.</h1>
              <p> Retrouvez entre autres le top 50 des "u must C be4 u die" et d'articles sur les classiques classés par thème afin de vous convaincre que vous passez à coté d'un inmanquable  .</p>
              <p><a class="btn btn-lg btn-primary" href="/ClassiqueCinema" role="button">Lire plus</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://www.gizmodo.fr/wp-content/uploads/2013/07/saison-4-the-walking-dead-trailer.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1> Les séries du moments </h1>
              <p> The Walking Dead, Game of thrones, Suits, Homeland, Breaking Bad?... Si cela ne vous dit rien, vous devez être largué au boulot durant la pause café! Retrouvez églalement les tops et les flops et toute une série de conseil qui vous mettront à la page et laisseront vos collègues sans voix</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     <!--------------------------------- Fin caroussel----------------------------------------------- -->



    <!-- Marketing messaging and featurettes
    
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/jpeg;base64,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" style="width: 200px; height: 200px;">
          <h2>Les tops et les flops</h2>
          <p> La fin de l'année approche! C'est l'heure du bilan de l'année 2014, tops et flops: ce qu'il fallait absoluement voir et ce qu'il fallait à tout prix éviter.</p>
          <p><a class="btn btn-default" href="/NouveauteCinema" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://cdn11.ne.be/ckContents/images//Novembre%202012/Game_of_thrones-logo.jpg" style="width: 200px; height: 200px;">
          <h2>Séries renouvelées les plus attendues</h2>
          <p>Que vous soyez plutôt accro à True Detective, Game of Thrones, Penny Dreadfull ou Suits, il va falloir s’armer de patience avant d’avoir une nouvelle dose de votre série préférée., </p>
          <p><a class="btn btn-default" href="/NouveauteCinema" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="http://static.allobo.com/affiche-small/s_0-le-parrain-affiche.jpg" style="width: 200px; height: 200px;">
          <h2>Top 50 des "Must C Be4 U Die</h2>
          <p>Les films cultes ayant marqué l’esprit des spectateurs de cinéma pour leur plus grand plaisir. Illustres acteurs ou inconnus aux bataillons, nous vous invitons à découvrir ou redécouvrir ces grands classiques.</p>
          <p><a class="btn btn-default" href="/ClassiqueCinema" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Homeland saison 4 : ce qu'en pensent les critiques américains </h2>
          <p class="lead">Une partie de la critique télé américaine a pu regarder les quelques premiers épisodes de la saison 4 de Homeland. Le constat d'ensemble se veut rassurant, mais la nouvelle orientation de la série divise.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/500x600/auto" alt="500x500" src="http://media.virginradio.fr/article-2447091-ajust_930/la-saison-4-d-homeland-c-est-sur-showtime.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="holder.js/600x591/auto" alt="500x500" src="http://3.bp.blogspot.com/-Wa1gkS5ATdU/UbGJHpOPQSI/AAAAAAAAApw/C04QxgNRXeM/s1600/nolan.jpg">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">« Interstellar » : parfois, c’est le cinéma qui aide la science. <span class="text-muted">By the way, Au revoir et merci Nolan </span></h2>
          <p class="lead">D’habitude, quand les astrophysiciens commentent un film de science-fiction, c’est plutôt pour s’en moquer. Mais le dernier film de Christopher Nolan, connu pour avoir réalisé « Inception » et « Batman », a réussi le pari de ravir les spectateurs et les physiciens.</p>
        </div>
      </div>

      <hr class="featurette-divider">

     

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2015 Fadili-Marouan, Inc.</p> 
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" title="" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1413989380948">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1413989380948" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div></body>
</body>
</html>


