#!/usr/bin/env php
<?php
require __DIR__.'/vendor/autoload.php';

# Initialize API
Crew\Unsplash\HttpClient::init([
	'applicationId' => file_get_contents(getenv('HOME').'/i3lock-delta/api_key'),
	'utmSource' => 'i3lock-Delta'
]);

# Get custom search queries
$queries_file_name = getenv('HOME') . '/.config/lock_preferences';
$queries = file($queries_file_name);

# Create the random photo limitations
$filters = [
	'featured' => false,
	'query' => $queries[rand(0,count($queries) - 1)],
	'orientation' => 'landscape'
];

# Get the random photo
$img = Crew\Unsplash\Photo::random($filters);

# Download the photo
$url = $img->download();
$output = file_get_contents($url);

# Write image to a file
$image_filename =getenv('HOME') . '/.rand_bg';
$image_file = fopen($image_filename, 'w');
fwrite($image_file, $output);
fclose($image_file);

# Write author's name to a file
$name_file = fopen('/tmp/name_photographer', 'w');
fwrite($name_file, $img->{'user'}['name']);
fclose($name_file);
