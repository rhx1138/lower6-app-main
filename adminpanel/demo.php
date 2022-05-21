<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ajax Upload - Show Image</title>
<style type="text/css">
  #uploadframe { display:none; }
</style>
<script type="text/javascript" src="functions.js"></script>
</head>
<body>

<div id="showimg"> </div>
<form id="uploadform" action="upload_img.php" method="post" enctype="multipart/form-data" target="uploadframe" >
  <input type="file" id="myfile" name="myfile" />
  <input type="submit" value="Submit" />
  <iframe id="uploadframe" name="uploadframe" src="upload_img.php" width="8" height="8" scrolling="no" frameborder="0"></iframe>
</form>

</body>
</html>
<script>
/*** Script from http://coursesweb.net/ajax/ ***/

// gets data from the form and sumbit it
/*function uploadimg(theform){
  theform.submit();

  // calls the function to display Status loading
  setStatus("Loading...", "showimg");
  return false;
}

// this function is called from the iframe when the php return the result
function doneloading(rezultat) {
  // decode (urldecode) the parameter wich is encoded in PHP with 'urlencode'
  rezultat = decodeURIComponent(rezultat.replace(/\+/g,  " "));

  // add the value of the parameter inside tag with 'id=showimg'
  document.getElementById('showimg').innerHTML = rezultat;
}

// displays status loading
function setStatus(theStatus, theloc) {
  var tag = document.getElementById(theloc);

  // if there is "tag"
  if (tag) {
    // adds 'theStatus' inside it
    tag.innerHTML = '<b>'+ theStatus + "</b>";
  }
}*/
</script>