<?php
$links = array(
	'home.php' => 'Home',
	'school.php' => 'Academia',
	'work.php' => 'Work', 
	'hobbies.php' => 'Hobbies', 
	'contact.php' => 'Contact',
	'results.php' => 'Results'
);

foreach ($links as $file => $title) {
    $active = ($page === $file) ? ' class="current"' : '';
    $href = ($file === 'home.php') ? 'index.php' : "index.php?page=" . str_replace('.php','',$file);
    echo "<li{$active}><a href=\"{$href}\">{$title}</a></li>";
}
?>

