 <?php
  

function send_LINE($msg){
 $access_token = 'XDjssYLS9SARx+epl8bU7fAVZHzfLQeBJgSjGco1PuWx0t1bXRWJvOv1oT49RbiwRSW6Umd5OTx8l7/UyLGakmjG89R+OqRHxHCDNCj9z0c0IJLG//fYJr+hVMgDYsoxC+lLHcjo2Jj3zNmrdCDkMQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U4c30069caae7979fad13160c72ca5220',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
