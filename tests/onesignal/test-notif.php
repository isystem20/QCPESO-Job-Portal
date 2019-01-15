<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="manifest" href="manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "6a3fac48-55eb-4236-ac2c-31085678326c",
    });
  });
</script>
</head>
<body>
<script type="text/javascript">

if (!('serviceWorker' in navigator)) { 
  // Service Worker isn't supported on this browser, disable or hide UI. 
  alert(' Service Worker isnt supported on this browser, disable or hide UI.'); 

}

if (!('PushManager' in window)) { 
  // Push isn't supported on this browser, disable or hide UI. 
  alert('Push isnt supported on this browser, disable or hide UI. '); 

}


	// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function notifyMe() {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('Notification title', {
      icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
      body: "Hey there! You've been notified!",
    });

    notification.onclick = function () {
      window.open("http://stackoverflow.com/a/13328397/1269037");      
    };

  }

}
</script>
<button onclick="notifyMe()">Notify me!</button>
</body>
</html>