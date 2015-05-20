<?php
    require_once 'api-keys.php';
    require_once 'vendor/autoload.php';

    use transit_realtime\FeedMessage;

    $data = file_get_contents("http://datamine.mta.info/mta_esi.php?key=".$mta_key."&feed_id=1");
    $feed = new FeedMessage();
    $feed->parse($data);

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    foreach ($feed->getEntityList() as $entity) {
      if ($entity->hasTripUpdate()) {
        error_log("trip: " . $entity->getId());
      }
    }
