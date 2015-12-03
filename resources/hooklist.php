<html>
<head>
<title>List of ACTIONS and FILTERS in YOURLS</title>
<link rel="icon" type="image/gif" href="http://yourls.org/images/favicon.gif" />
<link rel="stylesheet" href="http://yourls.org/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://yourls.org/css/tablesorter.css" type="text/css" media="screen" />
<style>
table {
	font-family:Verdana, Arial;
	background-color: #CDCDCD;
	margin:10px 0px 0px;
	font-size: 8pt;
	zwidth: 100%;
	text-align: left;
}
table thead tr th {
	background-color: #C7E7FF;
	border: 1px solid #FFF;
	font-size: 8pt;
	padding: 4px;
}
table thead tr .header {
	background-image: url('../images/bg.gif');
	background-repeat: no-repeat;
	background-position: center right;
	cursor: pointer;
	padding-right:19px;
}
table tbody tr:hover td {
	background-color:#F3FAFD;
}
table tbody td {
	color: #3D3D3D;
	padding: 4px;
	background-color: #FFF;
	vertical-align: top;
}
table thead tr .headerSortUp {
	background-image: url('/images/desc.gif');
}
table thead tr .headerSortDown {
	background-image: url('/images/asc.gif');
}
table tbody td {
	border:1px solid #C7E7FF;
}
h1{display:block; float:none;height:auto;width:auto}
#logo{ float: right;}
#stats{ display:none}
</style>
<script src="http://yourls.org/js/jquery-1.4.3.min.js?v=1.5.1-beta" type="text/javascript"></script>
<script src="http://yourls.org/js/jquery.tablesorter.min.js?v=1.5.1-beta" type="text/javascript"></script>
</head>
<body>

<div id="wrap">

<img id="logo" border="0" style="border: 0px;" title="YOURLS" alt="YOURLS" src="http://yourls.org/images/yourls-logo.png">
<h1>List of hooks (actions and filters) in YOURLS</h1>


<p id="stats">To date: <span id="count_hooks">0</span> hooks (<span id="count_actions">0</span> actions, <span id="count_filters">0</span> filters)</p>

<table id="hooktable" class="blSorter" border="1" cellspacing="0" cellpadding="3">
<thead>
<tr><th class="header">Hook type</th><th>Hook name</th><th>Hook location</th></tr>
</thead>
<tbody>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>activated_</td><td class='file'>/includes/functions-plugins.php, line 445</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>activated_plugin</td><td class='file'>/includes/functions-plugins.php, line 444</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>add_new_link_already_stored</td><td class='file'>/includes/functions.php, line 288</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>add_new_link_create_keyword</td><td class='file'>/includes/functions.php, line 255</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>add_new_link_custom_keyword</td><td class='file'>/includes/functions.php, line 232</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>add_option</td><td class='file'>/includes/functions.php, line 1107</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_headers</td><td class='file'>/includes/functions-html.php, line 64</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_init</td><td class='file'>/includes/load-yourls.php, line 187</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_menu</td><td class='file'>/user/plugins/sample-plugin/plugin.php, line 20</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_notice</td><td class='file'>/includes/functions-html.php, line 784</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_notices</td><td class='file'>/includes/functions-html.php, line 783</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_page_after_table</td><td class='file'>/admin/index.php, line 344</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_page_before_content</td><td class='file'>/admin/index.php, line 267</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_page_before_form</td><td class='file'>/admin/index.php, line 280</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>admin_page_before_table</td><td class='file'>/admin/index.php, line 294</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>api</td><td class='file'>/yourls-api.php, line 16</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>api_output</td><td class='file'>/includes/functions-api.php, line 130</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>auth_successful</td><td class='file'>/includes/auth.php, line 28</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>bookmarklet</td><td class='file'>/admin/index.php, line 135</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>check_ip_flood</td><td class='file'>/includes/functions.php, line 1352</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>deactivated_</td><td class='file'>/includes/functions-plugins.php, line 472</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>deactivated_plugin</td><td class='file'>/includes/functions-plugins.php, line 471</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>delete_link</td><td class='file'>/includes/functions.php, line 136</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>delete_option</td><td class='file'>/includes/functions.php, line 1134</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>deprecated_function</td><td class='file'>/includes/functions.php, line 2147</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>get_keyword_not_cached</td><td class='file'>/includes/functions.php, line 443</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>html_addnew</td><td class='file'>/includes/functions-html.php, line 182</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>html_footer</td><td class='file'>/includes/functions-html.php, line 157</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>html_head</td><td class='file'>/includes/functions-html.php, line 128</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>html_logo</td><td class='file'>/includes/functions-html.php, line 15</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>html_tfooter</td><td class='file'>/includes/functions-html.php, line 321</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>infos_keyword_not_found</td><td class='file'>/yourls-infos.php, line 33</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>infos_no_keyword</td><td class='file'>/yourls-infos.php, line 15</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>init</td><td class='file'>/includes/load-yourls.php, line 163</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>insert_link</td><td class='file'>/includes/functions.php, line 156</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>ip_flood</td><td class='file'>/includes/functions.php, line 1363</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>load_template_go</td><td class='file'>/yourls-loader.php, line 36</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>load_template_infos</td><td class='file'>/yourls-loader.php, line 46</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>load_template_redirect_admin</td><td class='file'>/yourls-loader.php, line 55</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>load_textdomain</td><td class='file'>/includes/functions-l10n.php, line 453</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>loader_failed</td><td class='file'>/yourls-loader.php, line 64</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>login</td><td class='file'>/includes/functions-auth.php, line 81</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>login_failed</td><td class='file'>/includes/functions-auth.php, line 99</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>logout</td><td class='file'>/includes/functions-auth.php, line 24</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>plugins_loaded</td><td class='file'>/includes/load-yourls.php, line 179</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_add_new_link</td><td class='file'>/includes/functions.php, line 298</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_page</td><td class='file'>/includes/functions-html.php, line 825</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_redirect_javascript</td><td class='file'>/includes/functions.php, line 732</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_yourls_info_location</td><td class='file'>/yourls-infos.php, line 460</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_yourls_info_sources</td><td class='file'>/yourls-infos.php, line 527</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>post_yourls_info_stats</td><td class='file'>/yourls-infos.php, line 423</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_add_new_link</td><td class='file'>/includes/functions.php, line 214</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_api_output</td><td class='file'>/includes/functions-api.php, line 95</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_check_ip_flood</td><td class='file'>/includes/functions.php, line 1323</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_edit_link</td><td class='file'>/includes/functions.php, line 340</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_get_keyword</td><td class='file'>/includes/functions.php, line 437</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_get_request</td><td class='file'>/includes/functions.php, line 1899</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_html_head</td><td class='file'>/includes/functions-html.php, line 26</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_html_logo</td><td class='file'>/includes/functions-html.php, line 8</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_load_template</td><td class='file'>/yourls-loader.php, line 28</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_login</td><td class='file'>/includes/functions-auth.php, line 31</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_login_cookie</td><td class='file'>/includes/functions-auth.php, line 72</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_login_signature</td><td class='file'>/includes/functions-auth.php, line 54</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_login_signature_timestamp</td><td class='file'>/includes/functions-auth.php, line 42</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_login_username_password</td><td class='file'>/includes/functions-auth.php, line 63</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_page</td><td class='file'>/includes/functions-html.php, line 823</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_redirect</td><td class='file'>/includes/functions.php, line 682</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_redirect_javascript</td><td class='file'>/includes/functions.php, line 719</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_share_redirect</td><td class='file'>/admin/index.php, line 177</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_stats_countries_map</td><td class='file'>/includes/functions-infos.php, line 9</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_stats_line</td><td class='file'>/includes/functions-infos.php, line 164</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_stats_pie</td><td class='file'>/includes/functions-infos.php, line 38</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_yourls_info_location</td><td class='file'>/yourls-infos.php, line 434</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_yourls_info_sources</td><td class='file'>/yourls-infos.php, line 471</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_yourls_info_stats</td><td class='file'>/yourls-infos.php, line 248</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>pre_yourls_infos</td><td class='file'>/yourls-infos.php, line 37</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>redirect_keyword_not_found</td><td class='file'>/yourls-go.php, line 40</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>redirect_no_keyword</td><td class='file'>/yourls-go.php, line 12</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>redirect_shorturl</td><td class='file'>/yourls-go.php, line 21</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>require_auth</td><td class='file'>/includes/functions.php, line 1267</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>require_no_auth</td><td class='file'>/includes/functions.php, line 1270</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>set_DB_driver</td><td class='file'>/includes/class-mysql.php, line 41</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>setcookie_failed</td><td class='file'>/includes/functions-auth.php, line 414</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>share_links</td><td class='file'>/includes/functions-html.php, line 409</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>share_redirect_</td><td class='file'>/admin/index.php, line 214</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>shareboxes_after</td><td class='file'>/includes/functions-html.php, line 415</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>shareboxes_before</td><td class='file'>/includes/functions-html.php, line 383</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>shareboxes_middle</td><td class='file'>/includes/functions-html.php, line 396</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>shutdown</td><td class='file'>/includes/functions.php, line 1975</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>social_bookmarklet_buttons_after</td><td class='file'>/admin/tools.php, line 76</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>status_header</td><td class='file'>/includes/functions.php, line 711</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>unload_textdomain</td><td class='file'>/includes/functions-l10n.php, line 490</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>update_clicks</td><td class='file'>/includes/functions.php, line 537</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>update_next_decimal</td><td class='file'>/includes/functions.php, line 117</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>update_option</td><td class='file'>/includes/functions.php, line 1066</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>yourls_ajax_</td><td class='file'>/admin/admin-ajax.php, line 47</td></tr>
<tr class='action'><td class='hook action'>ACTION</td><td class='name'>yourls_die</td><td class='file'>/includes/functions-html.php, line 435</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>action_links</td><td class='file'>/includes/functions-html.php, line 534</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>add_new_link</td><td class='file'>/includes/functions.php, line 301</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>add_new_link_fail_noloop</td><td class='file'>/includes/functions.php, line 210</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>add_new_link_fail_nourl</td><td class='file'>/includes/functions.php, line 196</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>add_new_title</td><td class='file'>/includes/functions.php, line 227</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>admin_links</td><td class='file'>/includes/functions-html.php, line 750</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>admin_list_where</td><td class='file'>/admin/index.php, line 320</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>admin_sublinks</td><td class='file'>/includes/functions-html.php, line 751</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>admin_url</td><td class='file'>/includes/functions.php, line 1749</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>admin_view_per_page</td><td class='file'>/admin/index.php, line 20</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_action_</td><td class='file'>/yourls-api.php, line 35</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_db_stats</td><td class='file'>/includes/functions-api.php, line 158</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_expand</td><td class='file'>/includes/functions-api.php, line 202</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_db_stats</td><td class='file'>/includes/functions-api.php, line 47</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_expand</td><td class='file'>/includes/functions-api.php, line 69</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_shorturl</td><td class='file'>/includes/functions-api.php, line 24</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_stats</td><td class='file'>/includes/functions-api.php, line 37</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_url_stats</td><td class='file'>/includes/functions-api.php, line 58</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_result_version</td><td class='file'>/includes/functions-api.php, line 82</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_stats</td><td class='file'>/includes/functions-api.php, line 143</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>api_url_stats</td><td class='file'>/includes/functions-api.php, line 171</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>bodyclass</td><td class='file'>/includes/functions-html.php, line 72</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>bookmarklet_jsonp</td><td class='file'>/admin/index.php, line 161</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>check_timestamp</td><td class='file'>/includes/functions-auth.php, line 376</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>custom_keyword</td><td class='file'>/includes/functions.php, line 235</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>die_message</td><td class='file'>/includes/functions-html.php, line 434</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>die_title</td><td class='file'>/includes/functions-html.php, line 433</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>edit_link</td><td class='file'>/includes/functions.php, line 360</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>encodeURI</td><td class='file'>/includes/functions-formatting.php, line 579</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>esc_url</td><td class='file'>/includes/functions-formatting.php, line 522</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>esc_url_protocols</td><td class='file'>/includes/functions-formatting.php, line 511</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>geo_get_flag</td><td class='file'>/includes/functions.php, line 923</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>geo_ip_to_countrycode</td><td class='file'>/includes/functions.php, line 885</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_IP</td><td class='file'>/includes/functions.php, line 99</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_all_options</td><td class='file'>/includes/functions.php, line 1018</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_db_stats</td><td class='file'>/includes/functions.php, line 650</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_duplicate_keywords</td><td class='file'>/includes/functions-deprecated.php, line 27</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_keyword_info</td><td class='file'>/includes/functions.php, line 476</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_keyword_infos</td><td class='file'>/includes/functions.php, line 455</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_link_stats</td><td class='file'>/includes/functions.php, line 633</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_longurl_keywords</td><td class='file'>/includes/functions.php, line 1309</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_next_decimal</td><td class='file'>/includes/functions.php, line 107</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_num_queries</td><td class='file'>/includes/functions.php, line 660</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_option_</td><td class='file'>/includes/functions.php, line 988</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_protocol</td><td class='file'>/includes/functions.php, line 2095</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_relative_url</td><td class='file'>/includes/functions.php, line 2121</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_remote_title</td><td class='file'>/includes/functions.php, line 1861</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_request</td><td class='file'>/includes/functions.php, line 1914</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_shorturl_charset</td><td class='file'>/includes/functions.php, line 23</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_stats</td><td class='file'>/includes/functions.php, line 596</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>get_user_agent</td><td class='file'>/includes/functions.php, line 674</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>help_link</td><td class='file'>/includes/functions-html.php, line 727</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>html_link</td><td class='file'>/includes/functions-html.php, line 675</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>html_title</td><td class='file'>/user/plugins/sample-plugin/plugin.php, line 44</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>http_default_options</td><td class='file'>/includes/functions-http.php, line 107</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>http_default_options_timeout</td><td class='file'>/includes/functions-http.php, line 93</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>http_proxy_is_defined</td><td class='file'>/includes/functions-http.php, line 77</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>http_user_agent</td><td class='file'>/includes/functions-http.php, line 215</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>int2string</td><td class='file'>/includes/functions-formatting.php, line 23</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_allowed_protocol</td><td class='file'>/includes/functions.php, line 2074</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_db_alive_custom</td><td class='file'>/includes/class-mysql.php, line 118</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_installed</td><td class='file'>/includes/functions.php, line 1405</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_installing</td><td class='file'>/includes/functions.php, line 1379</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_mobile_device</td><td class='file'>/includes/functions.php, line 1884</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_private</td><td class='file'>/includes/functions.php, line 1258</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_shorturl</td><td class='file'>/includes/functions.php, line 58</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_ssl</td><td class='file'>/includes/functions.php, line 1783</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_upgrading</td><td class='file'>/includes/functions.php, line 1390</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>is_valid_user</td><td class='file'>/includes/functions-auth.php, line 77</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>keyword_is_free</td><td class='file'>/includes/functions.php, line 394</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>keyword_is_reserved</td><td class='file'>/includes/functions.php, line 76</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>keyword_is_taken</td><td class='file'>/includes/functions.php, line 416</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>kses_allowed_entities</td><td class='file'>/includes/functions-kses.php, line 58</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>kses_allowed_protocols</td><td class='file'>/includes/functions-kses.php, line 62</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>kses_allowed_tags</td><td class='file'>/includes/functions-kses.php, line 79</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>kses_allowed_tags_all</td><td class='file'>/includes/functions-kses.php, line 70</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>logout_link</td><td class='file'>/includes/functions-html.php, line 725</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>match_current_protocol</td><td class='file'>/includes/functions.php, line 1924</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>phpass_new_instance_iteration</td><td class='file'>/includes/functions-auth.php, line 236</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>phpass_new_instance_portable</td><td class='file'>/includes/functions-auth.php, line 237</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>plugin_url</td><td class='file'>/includes/functions-plugins.php, line 494</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_countries</td><td class='file'>/yourls-infos.php, line 184</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_dates</td><td class='file'>/yourls-infos.php, line 179</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_direct</td><td class='file'>/yourls-infos.php, line 177</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_last_24h</td><td class='file'>/yourls-infos.php, line 183</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_list_of_days</td><td class='file'>/yourls-infos.php, line 180</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_list_of_months</td><td class='file'>/yourls-infos.php, line 181</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_list_of_years</td><td class='file'>/yourls-infos.php, line 182</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_notdirect</td><td class='file'>/yourls-infos.php, line 178</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_referrer_sort</td><td class='file'>/yourls-infos.php, line 176</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>pre_yourls_info_referrers</td><td class='file'>/yourls-infos.php, line 175</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>random_keyword</td><td class='file'>/includes/functions.php, line 262</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>redirect_code</td><td class='file'>/includes/functions.php, line 684</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>redirect_javascript</td><td class='file'>/includes/functions.php, line 720</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>redirect_location</td><td class='file'>/includes/functions.php, line 683</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>rnd_string</td><td class='file'>/includes/functions.php, line 1463</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>sanitize_string</td><td class='file'>/includes/functions-formatting.php, line 62</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>sanitize_title</td><td class='file'>/includes/functions-formatting.php, line 81</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>sanitize_url</td><td class='file'>/includes/functions-formatting.php, line 93</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>setcookie_domain</td><td class='file'>/includes/functions-auth.php, line 397</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>setcookie_httponly</td><td class='file'>/includes/functions-auth.php, line 399</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>setcookie_secure</td><td class='file'>/includes/functions-auth.php, line 398</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>share_box_data</td><td class='file'>/includes/functions-html.php, line 374</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_add_new_link</td><td class='file'>/includes/functions.php, line 185</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_all_options</td><td class='file'>/includes/functions.php, line 1005</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_check_IP_flood</td><td class='file'>/includes/functions.php, line 1319</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_delete_link_by_keyword</td><td class='file'>/includes/functions.php, line 127</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_edit_link</td><td class='file'>/includes/functions.php, line 311</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_edit_link_title</td><td class='file'>/includes/functions.php, line 369</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_geo_countrycode_to_countryname</td><td class='file'>/includes/functions.php, line 894</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_geo_ip_to_countrycode</td><td class='file'>/includes/functions.php, line 854</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_get_keyword_info</td><td class='file'>/includes/functions.php, line 465</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_get_remote_title</td><td class='file'>/includes/functions.php, line 1798</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_get_request</td><td class='file'>/includes/functions.php, line 1893</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_is_valid_user</td><td class='file'>/includes/functions-auth.php, line 13</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_keyword_is_taken</td><td class='file'>/includes/functions.php, line 404</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_log_redirect</td><td class='file'>/includes/functions.php, line 817</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_maybe_check_core_version</td><td class='file'>/includes/functions-http.php, line 333</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_option_</td><td class='file'>/includes/functions.php, line 971</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_send_through_proxy</td><td class='file'>/includes/functions-http.php, line 125</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_share_box</td><td class='file'>/includes/functions-html.php, line 362</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_update_clicks</td><td class='file'>/includes/functions.php, line 525</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>shunt_url_exists</td><td class='file'>/includes/functions.php, line 167</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>site_url</td><td class='file'>/includes/functions.php, line 1763</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stat_query_country</td><td class='file'>/yourls-infos.php, line 97</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stat_query_dates</td><td class='file'>/yourls-infos.php, line 119</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stat_query_last24h</td><td class='file'>/yourls-infos.php, line 156</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stat_query_referrer</td><td class='file'>/yourls-infos.php, line 63</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_countries_map</td><td class='file'>/includes/functions-infos.php, line 29</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_countries_map_options</td><td class='file'>/includes/functions-infos.php, line 25</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_line</td><td class='file'>/includes/functions-infos.php, line 195</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_line_options</td><td class='file'>/includes/functions-infos.php, line 191</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_pie</td><td class='file'>/includes/functions-infos.php, line 80</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>stats_pie_options</td><td class='file'>/includes/functions-infos.php, line 73</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>string2htmlid</td><td class='file'>/includes/functions-formatting.php, line 50</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>string2int</td><td class='file'>/includes/functions-formatting.php, line 42</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_add_row</td><td class='file'>/includes/functions-html.php, line 592</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_add_row_action_array</td><td class='file'>/includes/functions-html.php, line 524</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_add_row_cell_array</td><td class='file'>/includes/functions-html.php, line 577</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_edit_row</td><td class='file'>/includes/functions-html.php, line 469</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_end</td><td class='file'>/includes/functions-html.php, line 662</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_head_cells</td><td class='file'>/includes/functions-html.php, line 625</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_head_end</td><td class='file'>/includes/functions-html.php, line 638</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_head_start</td><td class='file'>/includes/functions-html.php, line 623</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_tbody_end</td><td class='file'>/includes/functions-html.php, line 654</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>table_tbody_start</td><td class='file'>/includes/functions-html.php, line 646</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>trim_long_string</td><td class='file'>/includes/functions-formatting.php, line 212</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>url_exists</td><td class='file'>/includes/functions.php, line 176</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>version_check_stuff</td><td class='file'>/includes/functions-http.php, line 287</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>yourls_event</td><td class='file'>/includes/functions-plugins.php, line 114</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>yourls_hook</td><td class='file'>/includes/functions-plugins.php, line 111</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>yourls_link</td><td class='file'>/includes/functions.php, line 1649</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>yourls_salt</td><td class='file'>/includes/functions.php, line 1472</td></tr>
<tr class='filter'><td class='hook filter'>FILTER</td><td class='name'>yourls_statlink</td><td class='file'>/includes/functions.php, line 1660</td></tr>
</tbody>
</table>

<p><small>Generated: Wed, 12 Mar 2014 at 03:00:07</small></p>

<p>This list is generated every night against the current <a href="https://github.com/YOURLS/YOURLS">development version</a> (<em>master</em> branch) of YOURLS.</p>

</div>

<script>
$(document).ready(function() { 
	$("#count_hooks").text( $('#hooktable tbody tr').length );
	$("#count_actions").text( $('#hooktable tbody td.action').length );
	$("#count_filters").text( $('#hooktable tbody td.filter').length );
	$("#stats").toggle();
	$("#hooktable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
});

$('td.file').each(function(i,e){
    var html = $(e).html().split(", line ");
    var link = ' <a href="https://github.com/YOURLS/YOURLS/blob/master'+html[0]+'#L'+html[1]+'">#</a>';
    $(e).append(link);
});
</script>

</body>
</html>
