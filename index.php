<?php
    include($_SERVER['DOCUMENT_ROOT'].'/partials/common/_head.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_nav.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_hero.php');
    echo '<section class="about-bg-wrapper">';
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_about.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_work.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_ventures.php');
    echo '</section>';
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_achievments.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_timeline.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_quotes.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/landing/_contact.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/common/_contact-modal.php');
    include($_SERVER['DOCUMENT_ROOT'].'/partials/common/_footer.php');
