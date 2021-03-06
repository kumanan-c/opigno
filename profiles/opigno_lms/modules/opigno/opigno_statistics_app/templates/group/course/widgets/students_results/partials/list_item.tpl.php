<?php
/**
 * @file
 * Opigno statistics app - Course - Students results list item template file
 *
 * @param array $student_result
 *  $student_result['uid']
 *  $student_result['student_name']
 *  $student_result['number_of_interactions']
 *  $student_result['avg_number_of_interactions']
 *  $student_result['score']
 *  $student_result['avg_score']
 *  $student_result['status']
 */
?>
<tr>
  <td><?php print $student_result['student_name']; ?></td>
  <td><?php print $student_result['number_of_interactions']; ?></td>
  <td><?php print $student_result['avg_number_of_interactions']; ?></td>
  <td><?php print $student_result['score'] . '%'; ?></td>
  <td><?php print $student_result['avg_score'] . '%'; ?></td>
  <td><?php print ($student_result['status']? t('Yes') : t('No')); ?></td>
  <td><?php print l(t('View statistics'), "user/{$student_result['uid']}/opigno-statistics"); ?></td>
</tr>