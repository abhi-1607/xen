<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/xen.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="JavaScriptSpellCheck/include.js"></script>
  	
	
	<title>XENTATIC VIEW</title>
</head>
<body>

	<div class='container'>
		<h2>txt. checker</h2>
    	    <div>
    	    	<form name="notes" method="post" id ="myForm">
    	    	<div class="form-group">
    	    		<textarea id="inputNote" name="inputNote" rows="2" cols="80"></textarea>
    	    	</div>
    	    	<div class="form-group">
    	    		<button id='submitbtn' type='button' onclick="ajaxForm()"  class="btn btn-success btn-lg float-right" value='Submit'>Submit</button>
    	    	</div>	 
    	    		
    	    	</form>
    	    </div>
    	    <div class='container notes'>
    	    <?php
    	    if(isset($notes)){
        	    for($i=0; $i < sizeof($notes); $i++){
        	        ?>
        	        <div class='panel col-lg-3 col-md-4 col-sm-6' >
        	        
        	        <a class="delIcon" href='<?php echo base_url();?>Xentatic_controller/delete/<?php echo $notes[$i]['id'] ; ?>'><i class="fa fa-trash"></i></a>
        	        <a class="editIcon" href='<?php echo base_url();?>Xentatic_controller/edit/<?php echo $notes[$i]['id'] ; ?>'><i style='font-size:24px' class='far'>&#xf044;</i>
        	        </a>
        	        <div class="notesIcon">
        	        </div>
        	        <p class="notesText">
        	       <?php  echo $notes[$i]['data']; ?>
        	        </p>
        	        </div>
        	    <?php     
        	    }
    	    }
    	    
    	    ?>
    	    
    	    </div>
    </div>
    
    <!-- div to display the generated registration token -->
          <div id="token_div" style="display: none;">
            <h4>Registration Token</h4>
            <p id="token" style="word-break: break-all;"></p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                    onclick="deleteToken()">Delete Token</button>
          </div>
          <!-- div to display the UI to allow the request for permission to
               notify the user. This is shown if the app has not yet been
               granted permission to notify. -->
          <div id="permission_div" style="display: none;">
            <h4>Needs Permission</h4>
            <p id="token"></p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"
                    onclick="requestPermission()">Request Permission</button>
          </div>
          <!-- div to display messages received by this app. -->
          <div id="messages"></div>
	
</body>
<script>
	
		
		function ajaxForm(){
		
		var inputNote = $('#inputNote').val();
			
			$.ajax({
				url: "<?php echo base_url();?>Xentatic_controller/insert",
				type: 'post',
				data: {inputNote: inputNote},
				
				success: function(data){
				
					location.reload();
				}
			});
			

		}
</script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDjWJVKOGtWIDbHVq5T_WiXkWGrYjmVso4",
    authDomain: "tya-web-push.firebaseapp.com",
    projectId: "tya-web-push",
    storageBucket: "tya-web-push.appspot.com",
    messagingSenderId: "822773306438",
    appId: "1:822773306438:web:60bb8a5319229fd3c1e647",
    measurementId: "G-L8MENW9HVM"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  firebase.messaging();
</script>
<script>
	const messaging = firebase.messaging();
	
	
	messaging.requestPermission()
	.then(function() {
		console.log("Notification permission granted.");
		
		if(isTokenSentToServer()) {
			console.log("Token already sent")
		}else{
			getRegistrationToken();
			}
	})
	.then(function(token) {
		console.log(token); // Display user token
	})
	.catch(function(err){
		console.log("Unable to get permission to notify.",err); // Happen if user deny permission
	});
	
	messaging.onMessage(function(payload){
    	console.log('onMessage',payload);
// 		Update the UI to include the received message.
     	appendMessage(payload);
    });
		
	function getRegistrationToken() {
// 		 Get registration token. Initially this makes a network call, once retrieved
//       subsequent calls to getToken will return from cache.
        
        messaging.getToken({ vapidKey: "BDDzUMeBQJw0vNrtY9RR0L068V7DbqKRlrs8GgOu--MM7510-2KMqFsPdJCKekGM1Csod3f3bzoL7u_2CU4QloY" }).then((currentToken) => {
        	if (currentToken) {
//         		saveToken(currentToken);
              	console.log(currentToken);
              	
              	sendTokenToServer(currentToken);
              	updateUIForPushEnabled(currentToken);
			} else {
			
// 				Show permission request UI
                console.log('No registration token available. Request permission to generate one.');
                
                updateUIForPushPermissionRequired();
                setTokenSentToServer(false);
			}
		}).catch((err) => {
			console.log("error occured while retriving token.", err);
			showToken('Error retrieving registration token. ', err);
			setTokenSentToServer(false);
		});
	}
	
	function setTokenSentToServer(sent) {
    	window.localStorage.setItem('sentToServer', sent ? '1' : '0');
    }
    
    // Send the registration token your application server, so that it can:
  // - send messages back to this app
  // - subscribe/unsubscribe the token from topics
    
	function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer()) {
      console.log('Sending token to server...');
      // TODO(developer): Send the current token to your server.
      setTokenSentToServer(true);
    } else {
      console.log('Token already sent to server so won\'t send it again ' +
          'unless it changes');
    	}
	}
	
	function isTokenSentToServer() {
    	return window.localStorage.getItem('sentToServer') === '1';
    }
    
    // Add a message to the messages element.
    function appendMessage(payload) {
        const messagesElement = document.querySelector('#messages');
        const dataHeaderElement = document.createElement('h5');
        const dataElement = document.createElement('pre');
        dataElement.style = 'overflow-x:hidden;';
        dataHeaderElement.textContent = 'Received message:';
        dataElement.textContent = JSON.stringify(payload, null, 2);
        messagesElement.appendChild(dataHeaderElement);
        messagesElement.appendChild(dataElement);
    }
    
//     Clear the messages element of all children.
    function clearMessages() {
        const messagesElement = document.querySelector('#messages');
        while (messagesElement.hasChildNodes()) {
            messagesElement.removeChild(messagesElement.lastChild);
        }
    }
    
    function updateUIForPushEnabled(currentToken) {
        showHideDiv(tokenDivId, true);
        showHideDiv(permissionDivId, false);
        showToken(currentToken);
	}
    
    function showHideDiv(divId, show) {
    	const div = document.querySelector('#' + divId);
    	if (show) {
      		div.style = 'display: visible';
    	} else {
      		div.style = 'display: none';
    	}
	}
    
    function showToken(currentToken) {
        // Show token in console and UI.
        const tokenElement = document.querySelector('#token');
        tokenElement.textContent = currentToken;
	}
</script>	
</html>