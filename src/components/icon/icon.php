<?php function IconBody($icon) { 
    echo file_get_contents('./components/icon/icons/'.$icon.'.svg');
} ?>
