<?php use_helper('I18N', 'Date') ?>
<?php include_partial('betyolo_category/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Betyolo category', array(), 'messages') ?></h1>

  <?php include_partial('betyolo_category/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('betyolo_category/form_header', array('betyolo_category' => $betyolo_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('betyolo_category/form', array('betyolo_category' => $betyolo_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('betyolo_category/form_footer', array('betyolo_category' => $betyolo_category, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
