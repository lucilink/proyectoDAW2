<?php

$vistas=[
    'mtoUsuarios'=>'view/vMtoUsuarios.php',
    'borrarUsuario'=>'view/vBorrarUsuario.php',
    'editarPerfil'=>'view/vEditarPerfil.php',
    'registrar'=>'view/vNuevoUsuario.php',
    'login'=>'view/vLogin.php',
    'inicio'=>'view/vInicio.php',
    'mtoMascotas'=>'view/vMtoMascotas.php'
    ];

$controladores=[
    'mtoUsuarios'=>'controller/cMtoUsuarios.php',
    'borrarUsuario'=>'controller/cBorrarUsuario.php',
    'editarPerfil'=>'controller/cEditarPerfil.php',
    'registrar'=>'controller/cNuevoUsuario.php',
    'login'=>'controller/cLogin.php',
    'inicio'=>'controller/cInicio.php',
    'mtoMascotas'=>'controller/cMtoMascotas.php'
    ];
define("REGISTROSPAGINA",5);
define("MAXPAGINAS",3);