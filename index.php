<!DOCTYPE html>
<?php
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );


// Change this to match the URL of your public interface. Something like: http://yoursite.com/index.php
$page = YOURLS_SITE . '/index.php' ;
// Part to be executed if FORM has been submitted
if ( isset( $_REQUEST['url'] ) && $_REQUEST['url'] != 'http://' ) {

	// Get parameters -- they will all be sanitized in yourls_add_new_link()
	$url     = $_REQUEST['url'];
	$keyword = isset( $_REQUEST['keyword'] ) ? $_REQUEST['keyword'] : '' ;
	$title   = isset( $_REQUEST['title'] ) ?  $_REQUEST['title'] : '' ;
	$text    = isset( $_REQUEST['text'] ) ?  $_REQUEST['text'] : '' ;

	// Create short URL, receive array $return with various information
	$return  = yourls_add_new_link( $url, $keyword, $title );
	
	$shorturl = isset( $return['shorturl'] ) ? $return['shorturl'] : '';
	$message  = isset( $return['message'] ) ? $return['message'] : '';
	$title    = isset( $return['title'] ) ? $return['title'] : '';
	$status   = isset( $return['status'] ) ? $return['status'] : '';
	
	// Stop here if bookmarklet with a JSON callback function ("instant" bookmarklets)
	if( isset( $_GET['jsonp'] ) && $_GET['jsonp'] == 'yourls' ) {
		$short = $return['shorturl'] ? $return['shorturl'] : '';
		$message = "Short URL (Ctrl+C to copy)";
		header('Content-type: application/json');
		// echo yourls_apply_filter( 'bookmarklet_jsonp', "yourls_callback({'short_url':'$short','message':'$message'});" );	
		die();
	}
}
?>


<?php include('tpl/header.php');?>

          <div class="inner cover">
            <h1 class="cover-heading">Shorten your urls.<br /></h1>
            <p class="lead">BritShorten gives you reasonable shortened urls.<br />Easy to remember. Easy to use.</p>
            </p>
            
            <?php
            // Part to be executed if FORM has been submitted
            
            
            if ( isset( $_REQUEST['url'] ) && $_REQUEST['url'] != 'http://' ) {

            // Display result message of short link creation
            if( isset( $message ) ) {
                //echo "<h2>$message</h2>";
                echo "<h2 class=\"animated fadeIn float-shadow\"><a style=\"position: relative; top: -10px; text-decoration: none;\" href=\"$shorturl\">$shorturl</a></h2><br /><br />";
              
                echo "Just copy & paste the link to your browser <br /><br />";
//                echo '
//                <div class="row">
//                    <button type="submit" class="btn btn-default col-md-6">Copy to clipboard</button>"
//                    <button type="submit" class="btn btn-default col-md-6">Create new</button>"
//                </div>
//                ';
                echo "<button id=\"zclip\" data-clipboard-text=\"$shorturl\" style=\"margin-right: 60px\"  class=\"btn btn-default\">Copy to clipboard</button>";
                echo "<a class=\"btn btn-default\" href=\"$site2\">Create new</a>";
            }
	
            if( $status == 'success' ) {
                // Include the Copy box and the Quick Share box
//                yourls_share_box( $url, $shorturl, $title, $text );
//
//                // Initialize clipboard -- requires js/share.js and js/jquery.zclip.min.js to be properly loaded in the <head>
//                echo "<script>init_clipboard();</script>\n";
            }

            // Part to be executed when no form has been submitted
            } else {
                $site = YOURLS_SITE;
                echo '
                <form method="post" action="" role="form">
                <p>
                    <label>URL: <input type="text" class="form-control" name="url" value="http://" /></label></p>
                    <button type="submit" class="btn btn-default" value="Shorten">Submit</button>
                </p>
                </form>
                ';
            }
            ?>
        </div>
      
    <?php include ('tpl/footer.php');
