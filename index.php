
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="utf-8">
        <title>E-Shop</title>
    </head>
    <body>
        <!-- Header -->
        <header>
            <!-- Logo -->
            <div id="logo" >
                <a href="index.php">
                    E-Shop
                </a>
            </div>
            <!-- Menu -->            
            <nav id="nav" >
                <ul>
                    <li>
                        <a href="">Inicio</a>
                    </li>
                    <li>
                        <a href="">Categoria</a>
                    </li>
                    <li>
                        <a href="">Carrto</a>
                    </li>
                    <li>
                        <a href="">Lista de deseo</a>
                    </li>
                    <li>
                        <a href="">Acerca de...</a>
                    </li>
                    <li>
                        <a href="">Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="container" >
            <!-- side bar -->
            <aside id="sidebar" >

                <div id="login" class="block-aside" >
                    <h3>Identificate</h3>
                    <form action="login.php" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" >

                        <label for="password">Contrasena</label>
                        <input type="password" name="password"> 

                        <input type="submit" value="Entrar">  
                    </form>
                </div>

                <div id="register" class="block-aside" >
                    <h3>Registrate</h3>
                    <form action="register.php" method="post">

                        <label for="name">Nombre</label>
                        <input type="text" name="nombre" >

                        <label for="lastname">Apellido</label>
                        <input type="text" name="lastname" >

                        <label for="email">Email</label>
                        <input type="email" name="email" >

                        <label for="password">Contrasena</label>
                        <input type="password" name="password"> 

                        <input type="submit" value="Registrar">  
                    </form>
                </div>

            </aside>

            <!-- Main Container-->
            <div id="main" >
                <h1>Articulos</h1>
                <article class="article" >
                    <h2>Articulos</h2>
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's 
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make 
                    </p>
                </article>

            </div>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <p>Desarrollado por TechMark &copy; 2020</p>

        </footer>



        
    </body>

<!-- -->


</html> 