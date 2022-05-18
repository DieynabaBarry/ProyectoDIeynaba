<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sasha</title>
    <link rel="stylesheet" href="styleopinion.css">
</head>
<body>
<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">Shasas</span>
			<span class="site-desc">Find your world</span>
		</a>

		<nav>
			<ul>
                    <li><a href="Mascotas.php">Mascotas</a></li>
                    <li><a href="Comentarios.php">Comentarios</a></li>
                    <li><a href="Inicio.php">Exit</a></li>
			</ul>
		</nav>
	</header>
	<section id="main-content">
                <article>
                    <header>
                        <h1>Openiones</h1>
                        
                    </header>
                    
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    </div>
                    
                </article> 
            </section>
    <section id="main-content">
        <div class="col-md-6 pane">
    <div class="col-md-4">
                <div class="alert alert-light"><h4>Comentarios</h4></div>
                </div>
                <div id="result">
    
    
    
    
            </div>
    
        <div class="col-md-8">
            <form>
                <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text"  id="name">
                </div>
                <div class="form-group">
                <label>Comentario</label>
                <textarea id="comment" class="form-control"></textarea></label>
                </div>
                <button type="button" class="btn btn-primary" onclick="commentBox();">Enviar</button>
            </form>
        </div>
    
    
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    
        <script src="coment.js"></script>
        </div>
        </div>
    </section>
    <footer id="main-footer">
		<p>&copy; 2022 <a href="">Sasha</a></p>
	</footer>
</body>
</html>