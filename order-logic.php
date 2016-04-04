
<?php
require __DIR__ . '/google-api-php-client/src/Google/autoload.php';

define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
define('SCOPES', implode(' ', array(Google_Service_Calendar::CALENDAR)));

ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$token = array(
    'access_token' => 'ya29.qQIkubIu2AEdkxMwwF_7H0Cr8zn1RYrb3YjqKWHUcOjRRanGIL2HO6LTinYndIn3qg',
    'token_type' => 'Bearer',
    'expires_in' => 3600,
    'created' => 1458335905,
    'refresh_token' => '1/VqLpOz83ZgbgJJaGwLSQuPMeaY_ZcT36uOX9atGfxKwMEudVrK5jSpoR30zcRFq6');

$json_token = json_encode($token);



  $client = new Google_Client();
  $client->setScopes(SCOPES);
  $client->setRedirectUri('http://obscur.pro');
  $client->setAuthConfigFile(CLIENT_SECRET_PATH);
  $client->setAccessType('offline');
  $client->refreshToken('1/VqLpOz83ZgbgJJaGwLSQuPMeaY_ZcT36uOX9atGfxKwMEudVrK5jSpoR30zcRFq6');
  $client->setAccessToken($json_token);



$flname = $_POST['flname'];
$comment = $_POST['comment'];
$startTime = str_replace(' ','T',$_POST['start']);
$endTime = str_replace(' ','T',$_POST['end']);
$members = $_POST['members'];
$phone = $_POST['phone'];
$summary = $flname .' '. $members .' '. $comment .' '. $phone;



if($flname && $startTime && $members && $endTime && $phone != ""){

  $service = new Google_Service_Calendar($client);

  $event_info = new Google_Service_Calendar_Event(array(
  'summary' => 'Занято',
  'description' => $summary,
  'start' => array(
    'dateTime' => $startTime,
    'timeZone' => 'Asia/Almaty',
  ),
  'end' => array(
    'dateTime' => $endTime,
    'timeZone' => 'Asia/Almaty',
  ), 
  ));

  $events = $service->events->listEvents('primary');

  while(true) {
    foreach ($events->getItems() as $event) {
      

      if(substr($event->start->dateTime, 0, -6) == $startTime){
        echo 'Извините, на данное время уже есть запись';
        $exist = true;
        break;
      }else{
        $exist = false;
      }
    }
    $pageToken = $events->getNextPageToken();
    if ($pageToken) {
      $optParams = array('pageToken' => $pageToken);
      $events = $service->events->listEvents('primary', $optParams);
    } else {
      break;
    }
  }
if($exist == false){


  if(isset($_POST['opt1'])){
      $calendarId = 'obscur.pro_9dulh2f3g5c76r2lrgkoao1dfk@group.calendar.google.com';
  }else if(isset($_POST['opt2'])){
      $calendarId = 'obscur.pro_mn4icd23g78plluo5kcaj0a160@group.calendar.google.com';
  }else if(isset($_POST['opt3'])){
      $calendarId = 'obscur.pro_j3hd29nufqlc3o8bvhb3s1gmgk@group.calendar.google.com';
  }else{
      $calendarId = 'obscur.pro_qt4lnrm4pvo4vvcd46iiq19l80@group.calendar.google.com'; 
  }

  




  $event = $service->events->insert($calendarId, $event_info);
  echo 'Запись добавлена';
  header("Location: http://obscur.pro/booking.html");

}
        

  


}else{
	echo "Вы заполнили не все поля";
}


?>
