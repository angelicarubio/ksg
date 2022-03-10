<?php
    include($_SERVER['DOCUMENT_ROOT'].'/partials/common/_head.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_hero.php');
    echo '<section class="about-bg-wrapper">';
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_about.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_work.php');
    echo '</section>';
    include($_SERVER['DOCUMENT_ROOT'].'/partials/common/_footer.php');
