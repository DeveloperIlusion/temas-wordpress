<?php
    if (is_active_sidebar('sidebar-primary')): 
?>
    <aside class="sidebar col-md-4 h-100">
        <?php 
            dynamic_sidebar('sidebar-primary');
        ?>
    </aside>
<?php 
    endif; 
?>