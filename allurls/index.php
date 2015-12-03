<?php
// pull in YOURLS system and configuration
require_once(dirname(__FILE__).'/../includes/load-yourls.php' );
define( 'YOURLS_ADMIN', true );
yourls_maybe_require_auth();
$site2 = YOURLS_SITE;

// connect to db
$db = yourls_db_connect();

// get all URLs
$urls = null;
if ($db) {
    $urls = $db->get_results("SELECT `keyword`,`url`,`title`,`timestamp`,`clicks` FROM `" . YOURLS_DB_TABLE_URL . "` ORDER BY `timestamp` DESC");
}

list( $total_urls, $total_clicks ) = array_values( yourls_get_db_stats() );
if ( $where ) {
	list( $total_items, $total_items_clicks ) = array_values( yourls_get_db_stats( $where ) );
} else {
	$total_items        = $total_urls;
	$total_items_clicks = false;
}

?>
<html>
<head>
    <title>Database</title>
     <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--    Animate.css-->
    <link href="../css/animate.css" rel="stylesheet">
    <meta name="robots" content="index,follow">
</head>
<body>

<div class="container">
    <h1><center>Links</center></h1>
    <?php
        if( defined( 'YOURLS_USER' ) ) {
                $logout_link = yourls_apply_filter( 'logout_link', sprintf( yourls__('Hello <strong>%s</strong>'), YOURLS_USER ) . ' (<a href="?action=logout" title="' . yourls_esc_attr__( 'Logout' ) . '">' . yourls__( 'Logout' ) . '</a>)' );
            } else {
                $logout_link = yourls_apply_filter( 'logout_link', '' );
            }

printf( yourls__( 'Tracking <strong class="increment">%1$s</strong> links, <strong>%2$s</strong> clicks, and counting!' ), yourls_number_format_i18n( $total_urls ), yourls_number_format_i18n( $total_clicks ) );
    echo '<p id="admin_menu_logout_link">' . $logout_link .'';
    echo "<br /><a href=\"$site2\">Back</a></p>";?>
    <?php if (!empty($urls)) : ?>
<table id="urls" class="table table-striped table-bordered table-condensed table-hover">

	<thead>
		<tr>
			<th>code</th>
			<th>original url</th>
			<th>created</th>
			<th>clicks</th>
		</tr>
	</thead>

	<tbody>
		<?php
		foreach ($urls as $url) {
			echo "<tr>\n";
			
			$title = $url->title;

			$short_code = $url->keyword;
			$short_link = YOURLS_SITE . "/" . $short_code;
			
			$long_code = $url->url;
			$long_code = preg_replace("#^http://#" ,       "", $long_code);
			$long_code = preg_replace("#^www.#"    ,       "", $long_code);
			$long_code = preg_replace("#/blog(..)#"    ,"/$1", $long_code);
			$long_code = preg_replace("#/archives#",    "...", $long_code);
			$long_code = preg_replace("#/$#"       ,       "", $long_code);
			if(strlen($long_code) > 80) {
				$long_code = substr_replace($long_code, "...", 80 - 3);
			}
			
			$short_date = substr($url->timestamp, 0, 10);
			
			echo "<td class=\"code\">";
			echo "<a rel=\"follow\" title=\"" . $title . "\" target=\"blank\" href=\"" . $short_link . "\">" . $short_code . "</a>";
			echo "</td>\n";

			echo "<td>";
			echo "<a rel=\"follow\" title=\"" . $title . "\" target=\"blank\" href=\"" . $url->url . "\">" . $long_code . "</a>";
			echo "</td>\n";
			
			echo "<td>";
			echo $short_date;
			echo "</td>\n";

			echo "<td class=\"clicks\">";
			echo $url->clicks;
			echo "</td>\n";
			
			echo "</tr>\n";
		}
		?>
	</tbody>

</table>
<?php endif ?>
</div>

<script type="text/javascript" src="/js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
<!--
$(document).ready(function(){ 
	$("#urls").tablesorter({
		sortList: [[2,1] , [0, 1]]
	}); 
}); 
// -->
</script>

</body>
</html>
