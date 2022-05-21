  


  // Initialize Firebase
    var config = {
        apiKey: "AIzaSyDQPPUNZMOw4C4d9iierza0f9smxSawcvQ",
        authDomain: "lower-6.firebaseapp.com",
        databaseURL: "https://lower-6.firebaseio.com",
        projectId: "lower-6",
        storageBucket: "lower-6.appspot.com",
        messagingSenderId: "163032087595"
    };
    firebase.initializeApp(config);
  
  //Get element
  
  function logout(){
	  
	  $.ajax({
				url: "../ajax_adminlogout.php",
				data:'',
				type: "POST",
				success: function(data) {
					//alert(data);
			
					firebase.auth().signOut();
					window.location = "index.php"; 
			
				}
			});
		
  }
	
