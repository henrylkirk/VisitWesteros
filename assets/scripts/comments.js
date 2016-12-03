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

function addMessage( name, comment ) {
  console.log(name);
  console.log(comment);
  $.ajax({
    url: url + "?name=" + encodeURIComponent(name) + "&comment=" + encodeURIComponent(comment),
    success: handleHttpResponse
  });
  $("input[name='name-field']").val("");
  $("input[name='comment-field']").val("");

  return false;
}

$( document ).ready(function(){
  checkMessages();
});