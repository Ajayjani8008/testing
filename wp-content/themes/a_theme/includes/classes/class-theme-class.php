<?php
/**
 * Basic functionality of theme
 * @package a_theme 
 */

namespace a_theme\includes\classes; // Namespace declaration corrected

use a_theme\includes\traits\singleton;

class a_theme_singleton{
    use singleton;

    protected function __construct(){
        // load class.
        $this->set_hooks();
    }
    protected function set_hooks(){
        //actions and  filters
    }

}
?>
