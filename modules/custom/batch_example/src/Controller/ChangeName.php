<?php

namespace Drupal\batch_example\Controller;

class ChangeName {

function change(){

$query = \Drupal::entityQuery('node')
    // ->condition('bundle', 'page')
    ->condition('status', 1)
    // ->condition('changed', REQUEST_TIME, '<')
    ->condition('title', 'plaga', 'CONTAINS');
    // ->condition('field_tags.entity.name', 'cats');

$nids = $query->execute();
//   // $result = db_q
//   $batch = array(
//       'title' => t('Updating Node...'),
//       'operations' => array(
//         array(
//           '\Drupal\batch_example\ChangeName::change',
//           array($nids)
//         ),
//       ),
//       'finished' => '\Drupal\batch_example\DeleteNode::deleteNodeExampleFinishedCallback',
//     );
//     batch_set($batch);

  return [
    '#type' => 'textfield',
    '#value' => $nids,
  ];
}
}
