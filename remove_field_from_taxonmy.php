/**
 * Remove field and delete data.
 */
function profile_update_8001() {
  //taxonomy_term.vocabulary_name.field_name
  $entityFieldManager = \Drupal::service('entity_field.manager');
  $fields = $entityFieldManager->getFieldDefinitions('taxonomy_term', 'vocabulary_name');
  if ($field = $fields['field_name']) {
    $field->delete();
  }
}
