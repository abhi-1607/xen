importScripts("https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js")
importScripts("https://www.gstatic.com/firebasejs/8.3.1/firebase-messaging.js")

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

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {

	console.log('[firebase-messaging-sw.js] Received background message ', payload);
	const title = "Hello World";
	const options = {
		body: payload.data.status
	};
	return self.registration.showNotification(title, options);
});