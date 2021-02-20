<?php
include_once(dirname(__FILE__).'/config.inc.php');

$link_target = 'main';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Web Interface Monitoring</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="robots" content="noindex, nofollow" />
	<link rel="stylesheet" type="text/css" href="stylesheets/interface/common.css" />
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
</head>
<body>
	<div id="navigation">
		<div id="search_box">
			<form action="<?php echo $cfg["cgi_base_url"];?>/status.cgi" method="get" target="<?php echo $link_target;?>">
				<fieldset>
					<input id="search" name="host" type="text" />
					<input type="hidden" name="navbarsearch" value="1" />
					<input src="images/interface/search.gif" alt="OK" title="Search" id="search_submit" type="image" />
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>