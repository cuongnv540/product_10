<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%description%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($betyolo_category->getId(), 'betyolo_category_edit', $betyolo_category), '%%name%%' => $betyolo_category->getName(), '%%description%%' => $betyolo_category->getDescription(), '%%created_at%%' => false !== strtotime($betyolo_category->getCreatedAt()) ? format_date($betyolo_category->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($betyolo_category->getUpdatedAt()) ? format_date($betyolo_category->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
