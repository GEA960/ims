<?php
 $db = mysqli_connect('ftp.geaa.tech', 'u180008257_ims', 'iMSPASSWORD1') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'u180008257_ims' ) or die(mysqli_error($db));
?>