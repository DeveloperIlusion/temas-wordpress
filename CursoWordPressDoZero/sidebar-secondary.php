<?php
    if (is_active_sidebar('sidebar-secondary')): 
?>
    <aside class="sidebar col-md-4 h-100">
        <?php 
            dynamic_sidebar('sidebar-secondary');
        ?>
    </aside>
<?php 
    endif; 
?>