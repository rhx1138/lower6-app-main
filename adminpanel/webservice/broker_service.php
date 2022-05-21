
		<div id="display_data">
		</div>


<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
<script>
  // Initialize Firebase
 var config = {
		apiKey: "AIzaSyBCmvdoodJZtb4K-cBvSNr-BhlKwDTNb2I",
		authDomain: "social-trading-academy.firebaseapp.com",
		databaseURL: "https://social-trading-academy.firebaseio.com",
		projectId: "social-trading-academy",
		storageBucket: "social-trading-academy.appspot.com",
		messagingSenderId: "466715298080"
	};
	firebase.initializeApp(config);
  
  
	var databaseRef = firebase.database().ref('brokers/');

		databaseRef.once('value', function(snapshot) {
			//var text,is_login;
			var items=[];
			snapshot.forEach(function(childSnapshot) {

				var childData = childSnapshot.val();
				//alert(childData.user_name);
				
				//var obj = JSON.parse('{ "name":"'+childData.name+'" , "link":"'+childData.link+'" , "image":"http://keshavinfotechdemo.com/KESHAV/KG2/rich/adminpanel/offer_image/'+childData.image+'" , "description":"'+childData.description+'" }'); 
				//console.log(obj);
				items.push({ "name":childData.name , "link":childData.link , "image":"http://keshavinfotechdemo.com/KESHAV/KG2/rich/adminpanel/offer_image/"+childData.image , "description":childData.description });
	
			});
			console.log(JSON.stringify(items));
			document.getElementById("display_data").innerHTML = JSON.stringify(items);
		});
  
</script>

