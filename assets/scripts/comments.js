var url = "http://kelvin.ist.rit.edu/~hxk1231/240/final/assets/scripts/addComment.php";

function checkMessages() {
  $.ajax({
    url: url,
    success: handleHttpResponse
  });
  setTimeout(checkMessages, 600);
}

function handleHttpResponse( xml ) {
  var stuffForPage = "",
      $msgTags = $( xml ).find( "msg" );

  $msgTags.each( function( id, msgTag ) {
    stuffForPage += $( msgTag ).text() + "<br/>";
  });

  $("#commentList").html(stuffForPage);
}

function addMessage( nameVal, commentVal ) {
  // validate - check both fields are not empty
  // regex to check that input is not all spaces
  // change style properties to let user know of input mistakes

  var nameIsValid = nameVal.replace(/ /g,'').length > 0,
  commentIsValid = commentVal.replace(/ /g,'').length > 0,
  name = document.getElementById("name"),
  comment = document.getElementById("comment"),
  notice = document.getElementById("required-notice");

  if( nameIsValid && commentIsValid ) {
    $.ajax({
      url: url + "?name=" + encodeURIComponent(nameVal) + "&comment=" + encodeURIComponent(commentVal),
      success: handleHttpResponse
    });
    notice.style.display = "none";
    name.value = "";
    comment.value = "";
    name.style.borderColor = "#CCCCCC";
    comment.style.borderColor = "#CCCCCC";
  } else {
      notice.style.display = "inline";
      if(!nameIsValid){
        name.style.borderColor = "red";
      } else {
        name.style.borderColor = "#CCCCCC";
      }
      if(!commentIsValid){
        comment.style.borderColor = "red";
      } else {
        comment.style.borderColor = "#CCCCCC";
      }
  }
  
  return false;
}

$( document ).ready(function(){
  checkMessages();
});