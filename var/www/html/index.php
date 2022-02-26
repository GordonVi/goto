<?php 

$goto = gethostname(); # The computer's hostname, set with "--hostname=" in "docker run."

# all keywords must be lowercase

$link['apple'] = "https://www.apple.com/";
$link['google'] = "https://www.google.com/";
$link['lenovo'] = "https://www.lenovo.com/";
$link['author'] = "http://www.gordonvirasawmi.com/";
$link['github'] = "https://github.com/GordonVi/goto";

# -----------------

$url=$_SERVER['REQUEST_URI'];
$url=strtolower($url);
$url=substr($url, 1);
if  (strlen($url)>1) {
    if ($url[strlen($url) - 1] == "/") {
        $url=substr($url, 0, -1);
        }
    }

if (isset($link[strtolower($url)])) {
    header("Location: $link[$url]");
    exit;
}


?>

<html>

	<head>
		<link rel="stylesheet" href="dark_theme_ZachSaucier.css">
	</head>
	
	<body>
		<h1><?php echo $goto; ?> redirector</h1>
		<hr>
        <p>Enter <?php echo $goto; ?>/keyword in the address bar of your browser.</p>
		<p><b>Entry not found:</b> <?php echo $url; if (strlen($url)==0) {echo "[null]";} ?></p>
        <hr>
        <ul>
<?php
            foreach ($link as $key => $value) {
                // $arr[3] will be updated with each value from $arr...
                echo "            <li>$goto/<a href=\"$value\">$key</a></li>\n";
            }
            ?>
        </ul>
	</body>
</html>
