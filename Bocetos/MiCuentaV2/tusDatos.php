<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="index.js"></script>
        <link rel="stylesheet" href="index5.css">
        <script src="https://kit.fontawesome.com/b414b30242.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tus Datos</title>
    </head>
<body>
    <header>
        <div class="navBar">
            <div class="searchBar">
                <input type="text" id="searchText" placeholder="Buscar...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <p id="sansitoMaps">SANSITO-MAPS</p>
            <button id="userAccess"><i class="fa-solid fa-right-to-bracket"></i></button>
        </div>
    </header>
    <br><br><br><br><br><br><br><br>
    <div class="main__datos">
        <h1 class="datos-text">Mis Datos</h1>
        <div class="datos-container">
            <div class="container__name">
                <button id="btn__nombre" class="container-button">Nombre</button>
                <form id="form__nombre" style="display: none;">
                    <input type="text" name="nameTusDatos">
                    <button type="submit">Enviar</button>
                    <button onclick="cerrarForm(form__nombre);">Cerrar</button>
                </form>
            </div>
            <div class="container__number">
            <button id="btn__numContact" class="container-button">Número de contacto</button>
            <form id="form__numContact" style="display: none;">
                    <input type="text" name="numContactTusDatos">
                    <button type="submit">Enviar</button>
                    <button onclick="cerrarForm(form__numContact);">Cerrar</button>
                </form>
            </div>
            <div class="container__email">
            <button id="btn__email" class="container-button">Email</button>
            <form id="form__email" style="display: none;">
                    <input type="text" name="emailTusDatos">
                    <button type="submit">Enviar</button>
                    <button onclick="cerrarForm(form__email);">Cerrar</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function openForm(option){
            switch(option){
                case 0:
                    document.getElementById('form__nombre').style.display="block";
                break;
                case 1:
                    document.getElementById('form__numContact').style.display="block";
                break;
            }
        }

        function cerrarForm(form) {
            form.style.display = "none";
        }

        const btn__nombre = document.getElementById("btn__nombre");
        const form__nombre = document.getElementById("form__nombre");
        
        btn__nombre.addEventListener("click", function(){
            form__nombre.style.display="block";
        });

        const btn__numContact = document.getElementById("btn__numContact");
        const form__numContact = document.getElementById("form__numContact");
        
        btn__numContact.addEventListener("click", function(){
            form__numContact.style.display="block";
        });

        const btn__email = document.getElementById("btn__email");
        const form__email = document.getElementById("form__email");
        
        btn__email.addEventListener("click", function(){
            form__email.style.display="block";
        });
    </script>
</body>
</html>