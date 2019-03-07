

<?php


    
   /* O1: Get Kontrolü */
   function g($get) { return htmlspecialchars(addslashes($_GET[$get])); }

   /* 02: Post Kontrol */
   function p($post, $html = true) {
       if ( is_array($_POST[$post]) ) { return array_map('addslashes strip_tags', $_POST[$post]); }
       else { if ( $html ){ return addslashes(trim( $_POST[$post] )); } else { return str_replace("n", "<br />", htmlspecialchars(trim($_POST[$post]))); } }
   }

?>
