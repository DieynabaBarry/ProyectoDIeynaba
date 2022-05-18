<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Sasha</Title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
     body {
        margin: 0;
        padding: 0;
        font-family: Helvetica, Arial, sans-serif;
        color: #666;
        background: #f2f2f2; 
        font-size: 1em;
        line-height: 1.5em;
        
        padding-top: 80px; /* Relleno superior igual a la altura de la cabecera*/
}
    


h1 {
	font-size: 2.3em;
	line-height: 1.3em;
	margin: 15px 0;
	text-align: center;
	font-weight: 300;
}

p {
	margin: 0 0 1.5em 0;
}

img {
	max-width: 100%;
	height: auto;
}


#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}

/*
 * Logo
 */
#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #f19595;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	

/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
    nav li a{
            background-color: #333;
           color: black;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
		nav>li{
            float: left;
        }
        nav li a:hover{
            background-color:#333;
        }
        nav > li{
            float: left;
        }
        nav li ul{
            display:none;
            position: absolute;
            min-width: 140px;
        } 	
        nav li:hover >ul{
            display: block;
        }
        nav li:hover >ul{
            display: block;
        }
        nav li ul li ul{
            right:-170px;
            top: 0px;
        }
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			 


#main-content {
	background: white;
	width: 90%;
	max-width: 800px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}

	#main-content header,
	#main-content .content {
		padding: 40px;
	}


#main-footer {
	background: #333;
	color: white;
	text-align: center;
	padding: 20px;
	margin-top: 40px;
}
	#main-footer p {
		margin: 0;
	}
	
	#main-footer a {
		color: white;
	}
    #main-header {
        background: #333;
        color: white;
        height: 80px;
        
        width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
        left: 0; /* Posicionamos la cabecera al lado izquierdo */
        top: 0; /* Posicionamos la cabecera pegada arriba */
        position: fixed; /* Hacemos que la cabecera tenga una posición fija */
    }
    
    </style>
</head>
<body>
<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">Shasas</span>
			<span class="site-desc">Find your world</span>
		</a>

		<nav>
			<ul>
            <ul class="nav">
            <li><a href="Mascotas.php">Mascotas</a>
            <li><a href="Comentarios.php">Comentarios</a></li>
            <li><a href="">Exit</a></li>
        </ul>
			</ul>
		</nav>

	</header>
    <div id="header">
        <a href="" id="logo"><img src="Proyecto/Logo.png" alt=""></a>
       
    </div>
</body>
</html>