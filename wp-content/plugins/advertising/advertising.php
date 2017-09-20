<?php 
    /*
    Plugin Name: Advertising
    Plugin URI: http://www.orangecreative.net
    Description: Plugin for displaying advertsing
    Author: Daunenok
    Version: 1.0
    Author URI: http://www.orangecreative.net
    */

add_action("admin_menu", "admin_plugin");

function admin_plugin() {
	add_options_page("Advertising Setup", "Advertising Setup", 1, "Advertising Setup", "admin_plugin_display");
}

function admin_plugin_display() {
$table = "";
$folder = "";
if (isset($_POST["submit"])) {
	$table = $_POST["table"];
	$folder = $_POST["folder"];
	update_option("adv_table", $table);
	update_option("adv_folder", $folder);
	echo "<div class='updated'>Setup saved</div>";
}
?>
<div class="wrap">
	<h2>Advertising Setup</h2>
	<form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
		<label>Table <br>
			<input type="text" name="table" value="<?=$table?>">
		</label><br>
		<label>Images folder <br>
			<input type="text" name="folder" value="<?=$folder?>">
		</label><br><br>
		<input type="submit" name="submit" value="Save setup">
	</form>
</div>
<?php
}

function get_advert() {
	$url = plugins_url();
	$table = get_option("adv_table");
	$folder = get_option("adv_folder");
	$db = new wpdb("root", "", "wordpress", "localhost");
	$id = $db->get_var("SELECT id FROM $table ORDER BY RAND() LIMIT 1");
	$title = $db->get_var("SELECT title FROM $table WHERE id=$id");
	$description = $db->get_var("SELECT description FROM $table WHERE id=$id");
	$image = $db->get_var("SELECT image FROM $table WHERE id=$id");
	$html = "<div class='advert'>";
	$html .=  "<h3>$title</h3>";
	$html .= "<img src='$url/advertising/$folder/$image'>";
	$html .= "<p>$description</p>";
	$html .= "</div>";
	return $html;
}