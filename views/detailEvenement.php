<?php 

require_once 'backend/models/dataMapper.php';

$entId = $_GET['id'];

if ($entId) {
    $eventDetails = getEventDetails($entId);
}

?>

<div>
    <?= htmlspecialchars($eventDetails["titre"], ENT_QUOTES | ENT_SUBSTITUTE,"UTF-8") ?>
</div>