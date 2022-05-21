<html>
<head>
	<title>Json read</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>
</head>
<body>
	<script>
    var config = {
        apiKey: "AIzaSyDQPPUNZMOw4C4d9iierza0f9smxSawcvQ",
        authDomain: "lower-6.firebaseapp.com",
        databaseURL: "https://lower-6.firebaseio.com",
        projectId: "lower-6",
        storageBucket: "lower-6.appspot.com",
        messagingSenderId: "163032087595"
    };
    firebase.initializeApp(config);
	/*Json read code start*/
	$(document).ready(function(){
          /*Page 1*/
          /*var id1 = firebase.database().ref().child('staticpages').push().key;
          var data1 = {
            title: "static page 1",
            description: ""
          }
          var updates = {};
          updates['/staticpages/' + id1] = data1;
          firebase.database().ref().update(updates);*/
          /*Page 2*/
          /*var id2 = firebase.database().ref().child('staticpages').push().key;
          var data2 = {
          title: "static page 2",
          description: ""
          }
          var updates = {};
          updates['/staticpages/' + id2] = data2;
          firebase.database().ref().update(updates);*/
          /*Page 3*/
          /*var id3 = firebase.database().ref().child('staticpages').push().key;
          var data3 = {
          title: "static page 3",
          description: ""
          }
          var updates = {};
          updates['/staticpages/' + id3] = data3;
          firebase.database().ref().update(updates);*/
		//alert(1);
		/*$.getJSON('gidata.json', function(data) {
			//alert(2);
			var category = "";
			var food = "";
			var glycemic_index_glucose_100 = "";
			var serving_size_grams = "";
			var glycemic_load_per_serving = "";
            var counter = 0;
			$.each(data, function(key, val) {
                counter++;
				category = val.Category;
				food = val.Food;
				glycemic_index_glucose_100 = val.Glycemic_index_glucose_100;
				serving_size_grams = val.Serving_size_grams;
				glycemic_load_per_serving = val.Glycemic_load_per_serving;*/
                /*Flame calculation*/
                //console.log("\n"+glycemic_index_glucose_100+"\n");
             /*   flame_data = glycemic_index_glucose_100.split("�");
                   var flametype="0";
               if(counter>=0 && counter<=51) {
                   flametype="1";
               } else if(counter>=52 && counter<=55) {
                   flametype="2";
               } else if(counter>=56 && counter<=69) {
                   flametype="3";
               } else if(counter>=70) {
                   flametype="4";
               }*/
              /*Special character code*/
                /*glycemic_index_glucose_100 = flame_data[0]+"&plusmn;"+flame_data[1];
				var id = firebase.database().ref().child('GIData').push().key;
				var result = true;
				if (result) {
					var data1 = {
						category: category,	
						food: food,	
						glycemic_index_glucose_100: glycemic_index_glucose_100,	
						serving_size_grams: serving_size_grams,	
						glycemic_load_per_serving: glycemic_load_per_serving,
                        flametype: flametype
					}
                    console.log(data1);
                    console.log("\n");
                    //return false;
					var updates = {};
					updates['/GIData/' + id] = data1;
					firebase.database().ref().update(updates);
				}
			});
		});*/
	});
	/*Json read code end*/
	</script>
</body>
</html>
