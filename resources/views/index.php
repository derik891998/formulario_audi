<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Autos</title>


     <!--recatcha-->

     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--recatcha-->

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="java/java.js"></script>
    <link rel="icon" href="logo1.ico">

</head>

<body>
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="59" height="20" fill="none" viewBox="0 0 59 20"><path fill="#000000" fill-rule="evenodd" d="M47.857 17.817a7.82 7.82 0 01-4.75-1.598 9.797 9.797 0 002.146-6.126c0-2.314-.803-4.44-2.147-6.126a7.821 7.821 0 014.751-1.598c4.31 0 7.805 3.458 7.805 7.724s-3.494 7.724-7.805 7.724zm-17.366-1.598a9.796 9.796 0 002.147-6.126c0-2.314-.804-4.44-2.147-6.126a7.823 7.823 0 014.75-1.598c1.789 0 3.436.597 4.752 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.751 1.598 7.822 7.822 0 01-4.751-1.598zm-12.616 0a9.797 9.797 0 002.147-6.126c0-2.314-.803-4.44-2.146-6.126a7.821 7.821 0 014.75-1.598c1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.146 6.126c0 2.314.803 4.44 2.146 6.126a7.822 7.822 0 01-4.75 1.598 7.821 7.821 0 01-4.752-1.598zM2.206 10.093c0-4.266 3.495-7.724 7.805-7.724 1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.75 1.598c-4.311 0-7.806-3.458-7.806-7.724zm14.113 4.547a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.633 7.633 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.615 0a7.632 7.632 0 01-1.497-4.547c0-1.7.556-3.271 1.497-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.616 0a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.557 3.271-1.497 4.547zM47.857.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0035.242.186c-2.392 0-4.586.831-6.308 2.215A10.032 10.032 0 0022.626.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0010.01.186C4.482.186 0 4.622 0 10.093 0 15.565 4.482 20 10.011 20c2.392 0 4.586-.831 6.308-2.215A10.033 10.033 0 0022.626 20c2.392 0 4.586-.831 6.308-2.215A10.034 10.034 0 0035.242 20c2.391 0 4.586-.831 6.308-2.215A10.033 10.033 0 0047.857 20c5.53 0 10.011-4.435 10.011-9.907 0-5.471-4.482-9.907-10.01-9.907z" clip-rule="evenodd"></path></svg>
    </div>
    <div class="logo-b">
        <svg xmlns="http://www.w3.org/2000/svg" width="94.41" height="32" fill="none" viewBox="0 0 59 20"><path fill="#ffffff" fill-rule="evenodd" d="M47.857 17.817a7.82 7.82 0 01-4.75-1.598 9.797 9.797 0 002.146-6.126c0-2.314-.803-4.44-2.147-6.126a7.821 7.821 0 014.751-1.598c4.31 0 7.805 3.458 7.805 7.724s-3.494 7.724-7.805 7.724zm-17.366-1.598a9.796 9.796 0 002.147-6.126c0-2.314-.804-4.44-2.147-6.126a7.823 7.823 0 014.75-1.598c1.789 0 3.436.597 4.752 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.751 1.598 7.822 7.822 0 01-4.751-1.598zm-12.616 0a9.797 9.797 0 002.147-6.126c0-2.314-.803-4.44-2.146-6.126a7.821 7.821 0 014.75-1.598c1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.146 6.126c0 2.314.803 4.44 2.146 6.126a7.822 7.822 0 01-4.75 1.598 7.821 7.821 0 01-4.752-1.598zM2.206 10.093c0-4.266 3.495-7.724 7.805-7.724 1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.75 1.598c-4.311 0-7.806-3.458-7.806-7.724zm14.113 4.547a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.633 7.633 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.615 0a7.632 7.632 0 01-1.497-4.547c0-1.7.556-3.271 1.497-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.616 0a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.557 3.271-1.497 4.547zM47.857.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0035.242.186c-2.392 0-4.586.831-6.308 2.215A10.032 10.032 0 0022.626.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0010.01.186C4.482.186 0 4.622 0 10.093 0 15.565 4.482 20 10.011 20c2.392 0 4.586-.831 6.308-2.215A10.033 10.033 0 0022.626 20c2.392 0 4.586-.831 6.308-2.215A10.034 10.034 0 0035.242 20c2.391 0 4.586-.831 6.308-2.215A10.033 10.033 0 0047.857 20c5.53 0 10.011-4.435 10.011-9.907 0-5.471-4.482-9.907-10.01-9.907z" clip-rule="evenodd"></path></svg>
    </div>
    <div class="logo-g">
        <svg xmlns="http://www.w3.org/2000/svg" width="147.5" height="50" fill="none" viewBox="0 0 59 20"><path fill="#ffffff" fill-rule="evenodd" d="M47.857 17.817a7.82 7.82 0 01-4.75-1.598 9.797 9.797 0 002.146-6.126c0-2.314-.803-4.44-2.147-6.126a7.821 7.821 0 014.751-1.598c4.31 0 7.805 3.458 7.805 7.724s-3.494 7.724-7.805 7.724zm-17.366-1.598a9.796 9.796 0 002.147-6.126c0-2.314-.804-4.44-2.147-6.126a7.823 7.823 0 014.75-1.598c1.789 0 3.436.597 4.752 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.751 1.598 7.822 7.822 0 01-4.751-1.598zm-12.616 0a9.797 9.797 0 002.147-6.126c0-2.314-.803-4.44-2.146-6.126a7.821 7.821 0 014.75-1.598c1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.146 6.126c0 2.314.803 4.44 2.146 6.126a7.822 7.822 0 01-4.75 1.598 7.821 7.821 0 01-4.752-1.598zM2.206 10.093c0-4.266 3.495-7.724 7.805-7.724 1.788 0 3.435.597 4.751 1.598a9.796 9.796 0 00-2.147 6.126c0 2.314.804 4.44 2.147 6.126a7.822 7.822 0 01-4.75 1.598c-4.311 0-7.806-3.458-7.806-7.724zm14.113 4.547a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.633 7.633 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.615 0a7.632 7.632 0 01-1.497-4.547c0-1.7.556-3.271 1.497-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.556 3.271-1.497 4.547zm12.616 0a7.633 7.633 0 01-1.498-4.547c0-1.7.557-3.271 1.498-4.547a7.634 7.634 0 011.497 4.547c0 1.7-.557 3.271-1.497 4.547zM47.857.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0035.242.186c-2.392 0-4.586.831-6.308 2.215A10.032 10.032 0 0022.626.186c-2.391 0-4.586.831-6.307 2.215A10.033 10.033 0 0010.01.186C4.482.186 0 4.622 0 10.093 0 15.565 4.482 20 10.011 20c2.392 0 4.586-.831 6.308-2.215A10.033 10.033 0 0022.626 20c2.392 0 4.586-.831 6.308-2.215A10.034 10.034 0 0035.242 20c2.391 0 4.586-.831 6.308-2.215A10.033 10.033 0 0047.857 20c5.53 0 10.011-4.435 10.011-9.907 0-5.471-4.482-9.907-10.01-9.907z" clip-rule="evenodd"></path></svg>
    </div>

    <div class="container">
        <div class="img">
        </div>

        <div class="form">
            <form class="formulario" id="formulario" action="post" >
                <h1 class="formulario__titulo">Cotiza un auto</h1>

                <div class="entradas">
                    <div class="entrada grupo__nombres">
                        <div class="mov">
                            <input type="text" class="formulario__input" name="nombres" id="nombre__input" placeholder=" " required>
                            <label for="" class="formulario__label" id="nombre__label" >Nombres</label>
                            <span class="error" id="nombre__color">
                                Nombres no válidos
                            </span>
                        </div>
                    </div>

                    <div class="entrada" id="grupo__apellidos">
                        <div class="mov">
                            <input type="text" class="formulario__input" name="apellidos" id="apellido__input" placeholder=" " required>

                            <label for="" class="formulario__label" id="apellido__label">Apellidos</label>
                            <span class="error" id="apellido__color">
                                Apellidos no válidos
                            </span>
                        </div>
                    </div>

                    <div class="entrada">
                        <div class="mov">
                            <select class="formulario__select">
                                <option selected value="dni">DNI</option>
                                <option value="ruc">RUC</option>
                            </select>

                            <div class="entrada__documento" id="documento">
                                <input type="text" class="formulario__documento" name="documento" id="documento__input" placeholder=" " required>
                                <label for="" class="formulario__label doc" maxlength="8" id="documento__label">Documento</label>
                            </div>
                            <span class="error" id="documento__color">
                                Este campo es obligatorio
                            </span>
                        </div>
                    </div>

                    <div class="entrada" id="grupo__celular">
                        <div class="mov">
                            <input type="tel" class="formulario__input" name="celular" id="celular__input" placeholder=" " required>
                            <label for="" class="formulario__label" maxlength="9" id="celular__label">Número de celular</label>
                            <span class="error" id="celular__color">
                                Solo puedes ingresar un número de 9 dígitos sin espacios
                            </span>
                        </div>
                    </div>

                    <div class="entrada" id="grupo__email">
                        <div class="mov">
                            <input type="email" class="formulario__input" name="email" id="email__input" placeholder=" " required>
                            <label for="" class="formulario__label" id="email__label">Correo electrónico</label>
                            <span class="error" id="email__color">
                                Tu correo electrónico es obligatorio
                            </span>
                        </div>
                    </div>

                    <!--RECATCHA--
                    <div class="g-recaptcha" data-sitekey="6Lefr8kdAAAAAPUW9fMO923tSmgGYVBZiykYdN6j"></div>

                    <!--clave secreta recatcha--
                    6Lefr8kdAAAAAIRe0qX1_Te5WyW5pV_bh7UWA9yT-->
                    <!--RECATCHA-->



                            <button class="formulario__submit" type="submit" id="btn"  >Registrar</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
