<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <!-- Fonts TrueType: Begin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts TrueType: End -->
    
    <!-- Arquivos externos CSS: Begin -->
    <link rel="stylesheet" href="<?php echo PATH_CSS.'reset.css' ?>">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'style.css' ?>">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'media.css' ?>">
    <link rel="stylesheet" href="<?php echo PATH_CSS.'menu-html5.css' ?>">
    <script defer>
        const link = document.createElement('link');
        if(window.location.pathname.endsWith('/html5.php')){
            link.rel = 'stylesheet';
            link.href = 'http://localhost/lexfstudio-estudos/public/css/menu-html5.css';
            document.head.appendChild(link);
        } else if (window.location.pathname.endsWith('/css3.php')){
            link.rel = "stylesheet";
            link.href = "http://localhost/lexfstudio-estudos/public/css/menu-css3.css";            
            document.head.appendChild(link); 
        }  else if (window.location.pathname.endsWith('/javascript.php')){
            link.rel = "stylesheet";
            link.href = "http://localhost/lexfstudio-estudos/public/css/menu-javascript.css";            
            document.head.appendChild(link); 
        }  else if (window.location.pathname.endsWith('/php.php')){
            link.rel = "stylesheet";
            link.href = "http://localhost/lexfstudio-estudos/public/css/menu-php.css";            
            document.head.appendChild(link); 
        }  else if (window.location.pathname.endsWith('/mysql.php')){
            link.rel = "stylesheet";
            link.href = "http://localhost/lexfstudio-estudos/public/css/menu-mysql.css";            
            document.head.appendChild(link); 
        }
    </script>
    <!-- Arquivos externos CSS: End -->
    
    <!-- Arquivos externos JavaScript: Begin -->
    <script src="<?php echo PATH_JS.'nav.js' ?>" defer></script>
    <script src="<?php echo PATH_JS.'menu.js' ?>" defer></script>
    <!-- Arquivos externos JavaScript: End -->
    <title><?php echo $title ?></title>
</head> 
<body>

<!-- Cabeçalho do site: Begin -->
<header>
    <div id="logo">
        <a href="<?php echo PATH_INDEX ?>">
            <img src="<?php echo PATH_IMG.'logo.png' ?>" alt="Lexf Studio">
        </a>
    </div>
    <!-- Menu principal: Begin -->
    <nav id="nav-main-body">
        <div id="nav-main-grp-desktop">
            <button><a href="<?php echo URL_HTML5 ?>">HTML5</a></button>
            <button><a href="<?php echo URL_CSS3 ?>">CSS3</a></button>
            <button><a href="<?php echo URL_JAVASCRIPT ?>">JavaScript</a></button>
            <button><a href="<?php echo URL_PHP ?>">PHP</a></button>
            <button><a href="<?php echo URL_MYSQL ?>">MySQL</a></button>
        </div>
        <button id="nav-main-btn-mobile"><a href="#"><span class="nav-main-span-dashes"></span></a></button>
    </nav>
    <!-- Menu principal: End -->
</header>
<!-- Cabeçalho do site: End -->