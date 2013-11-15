
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <title></title>
    </head>
    <body>
        <div id="page-container">
            <div id="main-nav">
                <ul >
                    <li id="about" ><a href="index.php?page=about">About</a></li>
                    <li id="services"><a href="index.php?page=services">Services</a></li>
                    <li id="portfolio"><a href="index.php?page=portfolio">Portfolio</a></li>
                    <li id="contact"><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </div>
            <div id="header">
                <h1>                    
                    <a href="index.php"><img src ="images/headings/header_full.png" width ="760" height ="60" alt="Progress In Motion"/></a>
                </h1>
            </div>
            <div id="sidebar-a"> 
                <div class="padding">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam gravida enim ut risus. 
                    Praesent sapien purus, ultrices a, varius ac, suscipit ut, enim. Maecenas in lectus. 
                    Donec in sapien in nibh rutrum gravida. Sed ut mauris. Fusce malesuada enim vitae lacus 
                    euismod vulputate. Nullam rhoncus mauris ac metus. Maecenas vulputate aliquam odio. 
                    Duis scelerisque justo a pede. Nam augue lorem, semper at, porta eget, placerat eget, 
                    purus. Suspendisse mattis nunc vestibulum ligula. In hac habitasse platea dictumst.
                </div>
            </div>
            <div id="content">
                <?php
                $p = !empty($_GET['page']) ? $_GET['page'] : 'index';
                $p = preg_replace('/[^\da-z\-]/i', '', $p); // Allows A-z 0-9 and -
                $contentPath = 'content';
                if (!file_exists($contentPath . '/' . $p . '.php')) {
                    $p = '404';
                }
                echo '<div id="'. $p .'">';
                switch ($p) {
                    // Pages
                    case 'index':
                    case 'about':
                    case 'services':
                    case 'portfolio':
                    case 'contact':
                        require($contentPath . '/' . $p . '.php');
                        break;

                    default:
                        require($contentPath . '/404.php');
                        break;
                }
                 echo '</div>';
                ?>


            </div>
            <div id="footer">
                <div id="altnav">
                    <a href="index.php?page=about">About</a> - 
                    <a href="index.php?page=services">Services</a> - 
                    <a href="index.php?page=portfolio">Portfolio</a> - 
                    <a href="index.php?page=contact">Contact Us</a> - 
                    <a href="#">Terms of Trade</a>
                </div>
                Copyright © Progress In Motion
            </div>
        </div>
    </body>
</html>
