<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@betyolo_category') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('betyolo_category/form_fieldset', array('betyolo_category' => $betyolo_category, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <?php include_partial('betyolo_category/form_actions', array('betyolo_category' => $betyolo_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>