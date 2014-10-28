<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($betyolo_side->getId(), 'betyolo_side_edit', $betyolo_side) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $betyolo_side->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $betyolo_side->getDescription() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $betyolo_side->getCategoryId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($betyolo_side->getCreatedAt()) ? format_date($betyolo_side->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($betyolo_side->getUpdatedAt()) ? format_date($betyolo_side->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
