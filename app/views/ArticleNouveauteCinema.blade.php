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
<!--------------------------------- Debut navBar----------------------------------------------- -->	
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
    <!--------------------------------- Fin navBar----------------------------------------------- -->



<!-- --------------------------- Page Content ----------------------------------------------- -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blog Post
                    <small>by <a href="#">Start Bootstrap</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://www.avoir-alire.com/IMG/jpg/la-french-affiche-jean-dujardin.jpg/200x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                        <form action="comments" method="post">
                <div class="form-group">
                            	
							<h4 class="media-heading">Titre:</h4>
                            <textarea class="form-control" rows="1" name="title" id="title"></textarea>
                           	<h4 class="media-heading">Commentaire:</h4>
                            <textarea class="form-control" rows="3" name="text" id="text"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>
				<!-- Posted Comments -->

             
                <!-- Comment -->
               @foreach($comments as $entry)
      
      <p> <h4>{{ $entry->title }}</h4> </p>
      <p>{{ $entry->text }}</p>
      <p><h4>Posted on {{ $entry->created_at->format('M jS, Y') }}
      </h4></p>
      {{ Form::open(array('url'=>'critiques/delete', 'class' => 'inline', 'method' => 'DELETE')) }}

      {{ Form::hidden('id',$entry->id)}} 
      {{ Form::submit('Delete')}} 
      {{ Form::close()}} 
      {{ HTML::linkRoute('edit_critiques', 'Edit', array($entry->id), array('class' => 'btn')) }}
       
    @endforeach 
    			<!-- EndComment -->
             
               
               
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                            <h4 class="media-heading">Start Bootstrap 
                            <small>August 25, 2014 at 9:30 PM</small> <button type="submit" class="btn btn-primary">Modifier</button>

                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                            
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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

