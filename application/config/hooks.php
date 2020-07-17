<?php 
  // create hook for multi langunage
  $hook['post_controller_constructor'] = array(
      'class'    => 'MultiLanguageLoader',
      'function' => 'initialize',
      'filename' => 'MultiLanguageLoader.php',
      'filepath' => 'hooks'
  );
?>
