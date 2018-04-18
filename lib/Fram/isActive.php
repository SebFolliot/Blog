<?php    
function isActive($page) {
  if ($page == $_SERVER['REQUEST_URI']) {
    return ' class="active"';
  }
}
