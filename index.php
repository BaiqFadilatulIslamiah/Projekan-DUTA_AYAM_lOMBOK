<?php

$page = $_GET['page'] ?? 'Beranda';

include "partials/header.php";
include "partials/navbar.php";

include "pages/$page.php";

include "partials/footer.php";
include "partials/whatsapp-button.php";

?>