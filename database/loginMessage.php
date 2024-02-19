<?php
if (isset($_SESSION['message'])) {
    // var_dump($_SESSION['message']);
    ?>
    <h3 style="color: red">
        <?= $_SESSION['message'] ?>
    </h3>
    <?php
};
unset($_SESSION['message']);