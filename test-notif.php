<!DOCTYPE html>
<html>
<!-- <head>
	<title></title>
<link rel="manifest" href="manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "6a3fac48-55eb-4236-ac2c-31085678326c",
    });
  OneSignal.sendTags({
    key: 'value',
    key2: 'value2',
  }, function(tagsSent) {
    console.log(tagsSent);
  });
  });
</script>
</head> -->
<body>
<?PHP
function sendMessage() {
    $content      = array(
        "en" => "Quezon City Public Employment Service Office\nPosted new job opportunities."
    );
    $header = array(
      'en' => "QCPESO Job Alert", 
    );
    // $hashes_array = array();
    // array_push($hashes_array, array(
    //     "id" => "like-button",
    //     "text" => "Like",
    //     "icon" => "http://i.imgur.com/N8SN8ZS.png",
    //     "url" => "https://qcpeso.com"
    // ));
    // array_push($hashes_array, array(
    //     "id" => "like-button-2",
    //     "text" => "Like2",
    //     "icon" => "http://i.imgur.com/N8SN8ZS.png",
    //     "url" => "https://qcpeso.com"
    // ));



    $fields = array(
        'app_id' => "6a3fac48-55eb-4236-ac2c-31085678326c",
        'included_segments' => array(
            'All'
        ),
        'headings' => $header,
        // 'filters' => array(
        //   array("field" => "tag", "key" => "key", "relation" => "=", "value" => "value"),
        //   // array("operator" => "OR"),
        //   // array("field" => "amount_spent", "relation" => "=", "value" => "0")
        // ),
        'chrome_web_icon' => 'https://qcpeso.com/themes/admin-pro/assets/images/logo-icon.png',
        // 'data' => array(
        //     "foo" => "bar"
        // ),
        'url' => 'https://qcpeso.com/manage',
        'contents' => $content,
        // 'web_buttons' => $hashes_array
    );

    $fields = json_encode($fields);
    print("\nJSON sent:\n");
    print($fields);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MmJhMGU1NTctMmI3NC00ODMxLWFkZjctMzJiYzgwOTViYjk4'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

// $response = sendMessage();
// $return["allresponses"] = $response;
// $return = json_encode($return);

// $data = json_decode($response, true);
// print_r($data);
// $id = $data['id'];
// print_r($id);

// print("\n\nJSON received:\n");
// print($return);
// print("\n");

$num = 0;
$filters = array();

$array1 = array("field" => "tag", "key" => "Userid", "relation" => "=", "value" => "1234");
$array2 = array("operator" => "OR");
$array3 = array("field" => "tag", "key" => "Userid", "relation" => "=", "value" => "5678");



  $filters2 = array(
    array("field" => "tag", "key" => "key", "relation" => "=", "value" => "value"),
    array("operator" => "OR"),
    array("field" => "amount_spent", "relation" => "=", "value" => "0")
  );


array_push($filters,$array1);
array_push($filters,$array2);
print_r($filters); 
echo '<br>';
print_r($filters2); 




?>


</body>
</html>