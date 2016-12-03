<?php
// Connect to Database
require "/home/hxk1231/db_conn.php";
$mysqli = new mysqli( $db_host, $db_user, $db_pass, $db_name );


if ( $mysqli->connect_errno ) {
	$error = "Database error: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
}
else {
	// If a comment has been sent, add it to the database
	if (   isset( $_GET['name'] ) 
		&& isset( $_GET['comment'] )) {

	  $sani_name = $_GET['name'];
	  $sani_comment = $_GET['comment'];
	  
	  // Strip out all unicode control chars and closing CDATA tags
	  $pattern = array( '/[\x00-\x1F]/', '/[\x7f-\x9f]/', '/\]\]>/' );
      $sani_name = preg_replace( $pattern, '', $sani_name);
      $sani_comment = preg_replace( $pattern, '', $sani_comment);
	  
	  // Strip out all HTML tags and trim whitespace
	  $sani_name =  trim( strip_tags( $sani_name ) );
	  $sani_comment =  trim( strip_tags( $sani_comment ) );
	  
	  if ( ($sani_name != "") && ($sani_comment != "")) {
  		if ( $stmt = $mysqli->prepare( "INSERT INTO finalComments (name, comment) VALUES (?, ?)" ) ) {
  			if ( $stmt->bind_param( "ss", $sani_name,  $sani_comment) ) {
  				$stmt->execute();
  			}
  		}
  	}
	}
	// Get all existing names in the database and generate an XML document
	$result = $mysqli->query( "SELECT name, comment FROM finalComments ORDER BY id DESC LIMIT 20" );
	$return = "<?xml version='1.0' standalone='yes'?>\n<messages>\n";
	if ( $result->num_rows > 0 ) {
		while ( $row = $result->fetch_assoc() ) {
			$records[] = $row;
			// Wrap all data in CDATA tags so they're ignored by the XML parser
			$return .= "\t<msg><![CDATA[<li><div class='commentText'><span class='name'>" . $row['name'] . 
						"</span><p>" . $row['comment'] . "</p></div></li>]]></msg>\n";
		}
	}
	else {
		$return .= "<msg>No messages</msg>\n";
	}
	$return .= "</messages>";
}


// Allow access from any client
// CORS: Cross Origin Resource Sharing
header( "Access-Control-Allow-Origin: *" );

// Prevent caching
header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" );
header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . " GMT" );
header( "Cache-Control: no-store, no-cache, must-revalidate" );
header( "Cache-Control: post-check=0, pre-check=0", false );
header( "Pragma: no-cache" );

// Specify XML for the content type
header( "Content-Type: text/xml" ); 

// This will become the response value for the XMLHttpRequest object
echo $return;   
?>