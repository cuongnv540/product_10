<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($betyolo_category->getId(), 'betyolo_category_edit', $betyolo_category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $betyolo_category->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $betyolo_category->getDescription() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($betyolo_category->getCreatedAt()) ? format_date($betyolo_category->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($betyolo_category->getUpdatedAt()) ? format_date($betyolo_category->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
