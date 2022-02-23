<?php 

$goto = gethostname(); # The computer's hostname, set with "--hostname=" in "docker run."

$link['apple'] = "https://www.apple.com/";
$link['google'] = "https://www.google.com/";
$link['lenovo'] = "https://www.lenovo.com/";
$link['author'] = "http://www.gordonvirasawmi.com/";

# -----------------

$url=$_SERVER['REQUEST_URI']; 
$url=substr($url, 1);

if (isset($link[strtolower($url)])) {
    header("Location: $link[$url]");
    exit;
}


?>

<html>
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
