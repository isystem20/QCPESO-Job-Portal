<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap1',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    '808d2fd6a36fbfae63fe',
    '809230edf3cf35e96fd9',
    '508621',
    $options
  );

  $data['message'] = $_POST['msg'];
  $pusher->trigger('my-channel_01', 'my-event', $data);
?>



<form method="post">
    <input type="text" name="msg">
    <input type="submit">
</form>