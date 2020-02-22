<?php

$permalink = "https://github.com";
$id = 2;
$title = "Travel Plateform";
$city = "Rome";
$zipcode = "02129330995";
$name = "Samreaksa";
$like = "Symfony";
$src = "https://media-exp1.licdn.com/dms/image/C5103AQHqrlhYNRyHIA/profile-displayphoto-shrink_200_200/0?e=1587600000&v=beta&t=XFtrAEHOfkAj_ByqslaleQVMQ_gFDKXoptCVeaX1l5M";

$dtz = new DateTimeZone("Europe/Rome");
$date_r = new DateTime(date("Y-m-d"), $dtz);
$now = $date_r->format("Y-m-d H:i:s");

$country1 = "Vietnam";
$country2 = "Cambodia";

$test = <<<html
	sprintf(__(My name is %s and I like %s), $name, $like);
html;

echo sprintf(_( 'My name is %s and I like %s <br>' ), $name, $like);
echo sprintf('<a href="%" id="%d">%s, %s</a>', $permalink, $id, $title, $now

//		esc_url( $permalink ),
//		esc_attr( $id ),
//		esc_html( $title ),
//		esc_html($now)
);

$item = sprintf('<a href="%s"><img src="%s" alt="%s" /></a>', $permalink, $src, $title);
echo '<ul>';
$item = sprintf('<li>%s</li>', $item);
echo '</ul>';
echo $item;

echo sprintf(_( 'I am from %1$s and I am living at %2$s <br>' ), $country1, $country2);
