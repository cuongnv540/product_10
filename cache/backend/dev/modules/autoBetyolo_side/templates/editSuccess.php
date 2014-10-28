<?php use_helper('I18N', 'Date') ?>
<?php include_partial('betyolo_side/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Betyolo side', array(), 'messages') ?></h1>

  <?php include_partial('betyolo_side/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('betyolo_side/form_header', array('betyolo_side' => $betyolo_side, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('betyolo_side/form', array('betyolo_side' => $betyolo_side, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('betyolo_side/form_footer', array('betyolo_side' => $betyolo_side, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
