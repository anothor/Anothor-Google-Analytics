<?php
/*
Plugin Name: Anothor Google Analytics
Plugin URI: https://anothor.com
Description: Custom Google Analytics code
Version: 1.0
Author: Anothor
Author URI: https://anothor.com
License: GPL2
*/
function custom_google_analytics() {
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXXX-X');
</script>

<?php 
}
add_action( 'wp_head', 'custom_google_analytics', 10 );
?>
