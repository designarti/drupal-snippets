<?php
  //
  // Add CSS class to the body element based on published regions
  // In template.php
  function THEMENAME_preprocess_page(&$vars, $hook) {
    $body_classes = array($vars['body_classes']);
    if ($vars['region_machine_name']) {
      $body_classes[] = 'desired-class';
    }
    $vars['body_classes'] = implode(' ', $body_classes);
  }
  
  // Create a new function available in page.tpl.php
  
  // In template.php
  function THEMENAME_preprocess_page(&$variables) {
    $variables['variable_name'] = t('The variable string or text');
  }
  
  // In page.tpl.php
  <?php print $variable_name; ?>

?>
