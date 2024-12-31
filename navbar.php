<!DOCTYPE html>
<html lang="es-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/logo_miradorrar.jpg">
    <link rel="stylesheet" href="Css/style10.css" />
    <title> HOSTAL MIRADOR PISCO </title>
    <link rel="icon" type="image/x-icon" href="icono.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Teachers', sans-serif;
            background-color:white;
        }

        img {
            width: 100vw;
            height: 86vh;
            object-fit: cover;
        }

        /* Estilo para la barra de navegación */
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: transparent;
            transition: background-color 0.3s ease;
            padding: 20px 20px; /* Aumentar altura de la barra de navegación */
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Espacio entre los elementos */
            flex-wrap: wrap; /* Permite que los elementos se ajusten en la línea siguiente si es necesario */
        }

        .navbar.scrolled {
            background-color: #a08869; /* Color arena */
        }

        .navbar .menu-container {
            display: flex;
            align-items: center;
            transform: translateX(400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .menu-button {
            cursor: pointer;
            font-size: 24px; /* Reducir tamaño del ícono del menú */
            color: white;
            margin-right: 10px; /* Espacio entre el ícono y el texto */
        }

        .navbar .location {
            font-size: 16px; /* Reducir tamaño del texto de la ubicación */
            color: #fff;
            transform: translateX(400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .location i {
            margin-right: 10px; /* Espacio entre el ícono y el texto */
            font-size: 20px; /* Reducir tamaño del ícono de ubicación */
        }

        .navbar .reserve-button a {
            background-color: #fff;
            color: #a08869; /* Color arena */
            border: none;
            padding: 10px 20px; /* Reducir tamaño del botón */
            font-size: 16px; /* Reducir tamaño del texto del botón */
            font-weight: bold;
            cursor: pointer;
            border-radius: 0px;
            text-decoration: none;
            transform: translateX(-100px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .language-selector select {
            background: transparent;
            color: white;
            border: none;
            font-size: 16px; /* Reducir tamaño del texto del selector de idioma */
            transform: translateX(-400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .menu-container span {
            font-size: 16px; /* Ajustar tamaño del texto del menú */
            color: white;
            margin-right: 20px; /* Espacio entre el texto del menú y el siguiente elemento */
        }

        /* Estilos para el menú desplegable */
        #btn-menu {
            display: none;
        }

        .container-menu {
    position: fixed;
    background: white; /* Fondo blanco medio transparente */
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    opacity: 0;
    visibility: hidden;
    z-index: 1000;
}


        #btn-menu:checked ~ .container-menu {
            opacity: 1;
            visibility: visible;
        }

        .cont-menu {
            width: 100%;
            background: white;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column; /* Cambiar a columna para ajustar las filas */
            padding-top: 50px; /* Espacio superior */
        }

        nav {
            display: flex;
            flex-direction: column; /* Coloca los elementos en columnas */
            align-items: center; /* Centra los elementos horizontalmente */
            width: 100%; /* Asegura que el menú ocupe todo el ancho */
            background: white; /* Fondo del menú */
            border-radius: 8px; /* Bordes redondeados del menú */
            overflow: hidden; /* Oculta el desbordamiento del menú */
        }

        .nav-row {
            width:100%;
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente en cada fila */
            margin-bottom: 20px; /* Espacio entre las filas */
        }

        .nav-row a {
            display: block;
            text-decoration: none;
            padding: 20px 30px; /* Aumentar el padding para más separación */
            color: #c7c7c7;
            border: 2px solid trasparent; /* Borde transparente por defecto */
            border-radius: 8px; /* Bordes redondeados para forma rectangular */
            transition: all 0.3s ease;
            width: 250px; /* Ajustar el ancho de cada enlace */
            text-align: center; /* Centra el texto dentro de cada enlace */
            position: relative; /* Necesario para el posicionamiento de la imagen */
            margin: 10px 0; /* Añadir margen vertical entre los elementos */
        }

        .nav-row a:hover {
            border: 2px solid #c7c7c7; /* Borde visible en hover */
            background: #1f1f1f; /* Fondo en hover */
            color: #fff; /* Color de texto en hover */
        }


        .nav-row a.habitacionesh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */

}

.nav-row a.habitacionesh:hover {
    background: url('imagenes/imagen1.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */

}

.nav-row a.habitacionesh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen1.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.habitacionesh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}

.nav-row a.galeriah {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black; /* Color de texto blanco */
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.galeriah:hover {
    background: url('imagenes/imagen2.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: white; /* Asegura que el texto siga siendo blanco sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}

.nav-row a.galeriah::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen2.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.galeriah:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}



.nav-row a.restauranteh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.restauranteh:hover {
    background: url('imagenes/imagen3.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.restauranteh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen3.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.restauranteh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}

.nav-row a.reservash {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.reservash:hover {
    background: url('imagenes/imagen4.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.reservash::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen4.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.reservash:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}


.nav-row a.contactoh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.contactoh:hover {
    background: url('imagenes/imagen5.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.contactoh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen5.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.contactoh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}



.nav-row a.eventosh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.eventosh:hover {
    background: url('imagenes/imagen6.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.eventosh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen6.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.eventosh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}
        .cont-menu label {
            position: absolute;
            right: 20px;
            top: 20px;
            color: #fff;
            cursor: pointer;
            font-size: 24px; /* Tamaño del ícono */
            z-index: 1001; /* Asegúrate de que esté por encima del menú */
        }

        .navbar .menu-button {
            cursor: pointer;
            font-size: 24px; /* Reducir tamaño del ícono del menú */
            color: white;
            margin-right: 10px; /* Espacio entre el ícono y el texto */
        }
        .icon-equis i {
    color: black; /* Color negro para el ícono */
}



/*responsive :C*/

@media screen and (max-width: 1366px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 15%; 
        height: 150px; 
        padding: 30px 40px; 
        text-align: center; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }
    .nav-row a {
        font-size: 14px; 
        
    }
    .navbar .location {
        transform: translateX(200px); /* Ajustar la posición */
    }
}

@media screen and (max-width: 850px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 20%; /
        height: 90px; 
        padding: 20px 10px; 
    }

    .nav-row a {
        font-size: 13px; 
    }
}


@media screen and (max-width: 430px) {
    .nav-row {
        display: flex;
        flex-wrap: wrap; 
        justify-content: center; 
    }

    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 48%; 
        margin-bottom: 2%; 
        height: 80px; 
        padding: 15px 10px; 
        text-align: center; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }

    .nav-row a {
        font-size: 12px; 
    }
}
@media screen and (max-width: 390px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 90%; 
        margin-bottom: 4%; 
        height: 60px; 
        padding: 8px; 
        font-size: 10px; 
    }
}
/*la cosa esa del menu*/
@media screen and (max-width: 1366px) {
    .navbar .menu-container {
        transform: translateX(300px); /* Mover menos a la izquierda */
    }
}

/* Ajustes para pantallas hasta 850px */
@media screen and (max-width: 850px) {
    .menu-container {
        transform: translateX(-100px); /* Mover menos a la izquierda */
    }
}
@media screen and (max-width: 1300px) {
    .navbar .menu-container {
        transform: translateX(200px); /* Mover más a la izquierda */
    }
}
@media screen and (max-width: 920px) {
    .navbar .menu-container {
        transform: translateX(100px); /* Mover más a la izquierda */
    }
}
@media screen and (max-width: 600px) {
    .navbar .menu-container {
        transform: translateX(60px); /* Mover más a la izquierda */
    }
}
/* Ajustes para pantallas hasta 430px */
@media screen and (max-width: 430px) {
    .navbar .menu-container {
        transform: translateX(40px); /* Mover menos a la izquierda */
    }

    .navbar .menu-container button {
        font-size: 20px; /* Reducir el tamaño del ícono */
    }

    .navbar .menu-container span {
        font-size: 12px; /* Reducir el tamaño del texto */
    }
}

/* Ajustes para pantallas hasta 390px */
@media screen and (max-width: 390px) {
    .navbar .menu-container {
        transform: translateX(20px); /* Mover menos a la izquierda */
    }

    .navbar .menu-container button {
        font-size: 18px; /* Reducir aún más el tamaño del ícono */
    }

    .navbar .menu-container span {
        font-size: 10px; /* Reducir aún más el tamaño del texto */
    }
}
/*LOCACIOOOONNNN*/
@media screen and (max-width: 1680px) {
    .navbar .location {
        transform: translateX(380px); 
    }
}
@media screen and (max-width: 1600px) {
    .navbar .location {
        transform: translateX(360px); 
    }
}
@media screen and (max-width: 1440px) {
    .navbar .location {
        transform: translateX(300px); 
    }
}
@media screen and (max-width: 1300px) {
    @media screen and (max-width: 1300px) {
    .navbar .location {
        transform: translateX(200px);
        font-size: 14px;
    }
}
}

@media screen and (max-width: 1366px) {
    .navbar .location {
        transform: translateX(280px); 
    }
}

@media screen and (max-width: 912px) {
    .navbar .location {
        font-size: 14px; 
        transform: translateX(250px); 
    }
}


@media screen and (max-width: 853px) {
    .navbar .location {
        font-size: 14px; 
        transform: translateX(230px); 
    }
    .navbar .location i {
        font-size: 18px; 
    }
}

@media screen and (max-width: 800px) {
    .navbar .location {
        display: none; 
    }
}



/*BOTON DE RESERVAAAARRR*/
@media screen and (max-width: 1366px) {
    .navbar .reserve-button {
        padding: 8px 16px; 
        font-size: 15px; 
        transform: translateX(20px); 
    }
}
@media screen and (max-width: 1280px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(40px); 
    }
}
@media screen and (max-width: 1230px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(50px); 
    }
}
@media screen and (max-width: 1200px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(60px); 
    }
}
@media screen and (max-width: 1180px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(70px); 
    }
}

@media screen and (max-width: 1150px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(80px);
    }
    
}
@media screen and (max-width: 1105px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(90px); 
    }
}
@media screen and (max-width: 1125px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(120px); 
    }
}
@media screen and (max-width: 853px) {
    .navbar .reserve-button a {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(-20px); 
    }
}
@media screen and (max-width: 500px) {
    .navbar .reserve-button {
        padding: 4px 10px; 
        font-size: 11px; 
        transform: translateX(-40px); */
    }
}

@media screen and (max-width: 430px) {
    .navbar .reserve-button {
        padding: 4px 10px; 
        font-size: 11px; 
        transform: translateX(-80px); */
    }
}

@media screen and (max-width: 390px) {
    .navbar .reserve-button a {
        padding: 3px 8px; 
        font-size: 10px; 
        transform: translateX(-20px); 
    }
}
/*lo de lenguajeeee*/
@media screen and (max-width: 1600px) {
    .navbar .language-selector {
        transform: translateX(60px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1440px) {
    .navbar .language-selector {
        transform: translateX(94px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1366px) {
    .navbar .language-selector {
        transform: translateX(150px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1200px) {
    .navbar .language-selector {
        transform: translateX(230px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1280px) {
    .navbar .language-selector {
        transform: translateX(220px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
@media screen and (max-width: 1152px) {
    .navbar .language-selector {
        transform: translateX(250px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
@media screen and (max-width: 1024px) {
    .navbar .language-selector {
        transform: translateX(350px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
/* Ajustes para pantallas hasta 850px */
@media screen and (max-width: 850px) {
    .navbar .language-selector {
        transform: translateX(-200px); /* Mueve aún menos a la izquierda */
        font-size: 13px; /* Ajusta el tamaño del texto */
    }
}

/* Ajustes para pantallas hasta 500px */
@media screen and (max-width: 500px) {
    .navbar .language-selector {
        display: none; 
    }
}

/* Ajustes para pantallas hasta 430px */
@media screen and (max-width: 430px) {
    .language-selector select {
        transform: translateX(0px); /* Ajuste adicional para pantallas más pequeñas */
        font-size: 12px; /* Tamaño más pequeño del texto */
    }
}

/* Ajustes para pantallas hasta 390px */
@media screen and (max-width: 390px) {
    .language-selector select {
        transform: translateX(-100px); /* Mueve el elemento más hacia el centro */
        font-size: 11px; /* Tamaño aún más pequeño del texto */
    }
}
.info-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    font-size: 18px;
    color: #777;
    margin: 0 20px;
}

.info-item a {
    text-decoration: none;
    color: #777;
}

.info-item a:hover {
    color: #000; /* Cambia el color al pasar el mouse */
}

.info-divider {
    width: 1px;
    height: 20px;
    background-color: #777;
    margin: 0 20px;
}

.info-item img {
    margin-left: 10px;
    width: 30px;
    height: auto;
}

    </style>
</head>
<body>
    <div class="navbar" id="navbar">
        <div class="menu-container">
            <label for="btn-menu" class="menu-button">
                <i class="fas fa-bars"></i>
            </label>
            <span>MENÚ</span>
        </div>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i> Av. San Martín 267 - Pisco
        </div>
        <div class="reserve-button"><a href="#">Reservar Aquí</a></div>

        <div class="language-selector">
            <select>
                <option value="es">Es</option>
                <option value="en">En</option>
            </select>
        </div>
    </div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <div class="nav-row">
                    <a href="cc.php" class="menu-item habitacionesh">HABITACIONES</a>
                    <a href="galeria.php" class="menu-item galeriah">GALERÍA</a>
                    <a href="restaurante.php" class="menu-item restauranteh">RESTAURANTE</a>
                    </div>

                    <div class="nav-row" >
                    <a href="#" class="menu-item reservash">RESERVAS</a>
                    <a href="contactos.php" class="menu-item contactoh">CONTACTO</a>
                    <a href="index.php" class="menu-item eventosh">INICIO</a>
                    </div>
                    <div class="info-section">
    <div class="info-item">
        <a href="nosotros.php">Sobre Nosotros</a>
    </div>
    <div class="info-divider"></div>
    <div class="info-item">
        <a href="librodereclamaciones.php">Libro de Reclamaciones</a>
        <img src="imagenes/libro.png" alt="Libro de Reclamaciones">
    </div>
</div>
            </nav>

            <label for="btn-menu" class="icon-equis">
                <i class="fas fa-times"></i>
            </label>
        </div>
    </div>
    <script>
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            if (window.pageYOffset > 0) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        };

        document.getElementById("menuButton").onclick = function() {
            var menuContent = document.getElementById("menuContent");
            menuContent.style.display = menuContent.style.display === "block" ? "none" : "block";
        };
    </script>
</body>
</html>
