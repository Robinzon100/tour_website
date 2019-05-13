 
<nav class="navigation scroll" anim-class = "anim-nav" anim-pos = "50">
    <div class="navigation__content">
    <a href="/">
        <img class="navigation__content__logo" src="img/SVG/logo/travel assistant 3.svg" alt="">
    </a>
    <div class="navigation__content__hamburger">
        <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80">
            <path class="line top"
                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom"
                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
        </svg>
    </div>


        <div class="navigation__content__links">
            <ul id='menu-js'>
                <?php
                    
                    $query  = "SELECT * FROM menu";
                    $result = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($result)){

                        
                        $manu_text = $row['text'];
                        $menu_id = $row['id_menu'];
                        echo "<li><a href='{$manu_text}.php'>{$manu_text}</a></li>";
                    }

                    echo "<li><a href='admin/admin.php'>{$manu_text}</a></li>";

                    if (isset($_SESSION['logedin'])) {
                        echo "<li><a href='logout.php'>logout</a></li>";
                    }
                ?>




            </ul>
        </div>
    </div>
</nav>