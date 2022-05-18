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
        
        padding-top: 80px;
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

<style type="text/css">

html {
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;
}


* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
}


.perfil-usuario {
    background: linear-gradient(#3FD0F4, transparent);
    color: #666;
}
.perfil-usuario .sombra {
    position: absolute;
    display: block;
    background: linear-gradient(transparent,#666);
    width: 100%;
    height: 50%;
    bottom: 0;
    left: 0;
}
.perfil-usuario .portada-perfil,
.perfil-usuario .sombra {
    border-radius: 0 0 20px 20px;
}
.perfil-usuario img {
    width: 100%;
}
.contenedor-perfil {
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;
}
.perfil-usuario .contenedor-perfil {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
}
.perfil-usuario .portada-perfil {
    display: block;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 20rem;
    margin-bottom: .5rem;
}
.perfil-usuario .avatar-perfil {
    display: block;
    width: 230px;
    height: 230px;
    background-color: #D9DCF1;
    position: absolute;
    bottom: -65px;
    left: 4rem;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #FFFFFF;
    box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);
}
.perfil-usuario .cambiar-foto {
    position: absolute;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, .5);
    height: 57%;
    bottom: 0;
    left: 0;
    color: #fff;
    text-decoration: none;
    transform: translateY(50%);
    opacity: 0;
    transition: all ease-in 200ms;
}
.perfil-usuario .cambiar-foto i {
    margin-bottom: .5rem;
    font-size: 2rem;
}
.perfil-usuario .avatar-perfil:hover .cambiar-foto {
    transform: translateY(0);
    opacity: 1;
}
.perfil-usuario .datos-perfil {
    position: absolute;
    display: block;
    width: calc(100% - 230px - 8rem);
    right: 0;
    bottom: 0;
    color: #fff;
    text-shadow: 0 0 5px rgba(0, 0, 0, .2);
    padding-bottom: 1rem;
    padding-right: 1rem;
}
.perfil-usuario .titulo-usuario {
    font-size: 2.3rem;
    white-space: nowrap;
    margin-bottom: .5rem;
    overflow: hidden;
    text-overflow: ellipsis;
}
.perfil-usuario .bio-usuario {
    font-size: 1em;
    margin-bottom: .75rem;
}
.perfil-usuario .lista-perfil {
    list-style: none;
}
.perfil-usuario .lista-perfil li {
    display: inline-block;
    font-size: 1em;
    margin-right: 1rem;
}

.perfil-usuario .opcciones-perfil {
    display: block;
    position: absolute;
    right: 2rem;
    top: 1rem;
}
.perfil-usuario .opcciones-perfil button {
    border: 0;
    padding: 8px 20px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}
.perfil-usuario .menu-perfil ul {
    display: flex;
    list-style: none;
    margin-left: calc(200px + 8rem);
    width: calc(100% - 200px - 8rem);
}
.perfil-usuario .menu-perfil ul li {
    margin-right: 1rem;
}
.perfil-usuario .menu-perfil a {
    display: block;
    text-decoration: none;
    color: inherit;
    padding: 8px 20px;
    font-weight: bold;
    border-radius: 8px;
    transition: all ease-in 100ms;
}
.perfil-usuario .menu-perfil a:hover {
    background-color: #4CB0C6;
    color: #fff;
}
.perfil-usuario .icono-perfil {
    display: none;
    margin-right: .75rem;
}
@media (max-width: 780px) {
    .perfil-usuario .contenedor-perfil {
        width: 100%;
    }
    .perfil-usuario .avatar-perfil {
        left: calc(50% - 115px)
    }
    .perfil-usuario .datos-perfil {
        bottom: 200px;
        left: 0;
        width: 100%;
        padding: 15px;
        text-align: center;
    }
    .perfil-usuario .bio-usuario {
        font-size: 1em;
        overflow:hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .perfil-usuario .titulo-usuario {
        font-size: 2.1rem;
    }
    .perfil-usuario .portada-perfil {
        height: 28rem;
    }
    .perfil-usuario .menu-perfil ul {
        flex-direction: column;
    }
    .perfil-usuario .lista-perfil {
        display: block;
    }
    .perfil-usuario .menu-perfil {
        margin-top: 2rem;
    }
    .perfil-usuario .menu-perfil ul {
        display: flex;
        list-style: none;
        margin-left: auto;
        margin-right: auto;
        padding-top: 2.5rem;
        width: 70%;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
    }
    .perfil-usuario .icono-perfil {
        display: inline-block;
    }
}
</style>
<section class="perfil-usuario">
    <div class="contenedor-perfil">
        <div class="portada-perfil" >
            <div class="sombra"></div>
            <div class="avatar-perfil">
                <img src="data:image/jpeg;base64,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" alt="img">
                <a href="#" class="cambiar-foto">
                    <i class="fas fa-camera"></i> 
                    <span>Cambiar foto</span>
                </a>
            </div>
            <div class="datos-perfil">
                <h4 class="titulo-usuario">Nombre de usuario</h4>
                <p class="bio-usuario">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <ul class="lista-perfil">
                    <li>35 Seguidores</li>
                    <li>7 Seguidos</li>
                    <li>32 Publicaciones</li>
                </ul>
            </div>
            <div class="opcciones-perfil">
                <button type="">Cambiar portada</button>
                <button type=""><i class="fas fa-wrench"></i></button>
            </div>
        </div>
        <div class="menu-perfil">
            <ul>
                <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i> Publicaciones</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-grin"></i> Amigos 43</a></li>
                <li><a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a></li>
            </ul>
        </div>
    </div>
</section>
<style>
.mensaje a {
    color: inherit;
    margin-right: .5rem;
    display: inline-block;
}
.mensaje a:hover {
    color: #309B76;
    transform: scale(1.4)
}
</style>
<div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">

    <div>
        <a target="_blank" href=""><i class="fab fa-facebook-square"></i></a>
        <a target="_blank" href=""><i class="fab fa-twitter"></i></a>
        <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
        <a target="_blank" href=""><i class="fab fa-youtube"></i></a>
    </div>
    <footer id="main-footer">
		<p>&copy; 2022 <a href="">Sasha</a></p>
	</footer>
</body>
</html>