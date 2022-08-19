<?php
//Enter Post ID or you can fetch current using function
$pid = 5;

$image_id = get_post_thumbnail_id($pid);
$image = array();
$image['assets']['title']   = get_post_field('post_title', $image_id);
$image['assets']['alt']     = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Al
$image['assets']['url']     = wp_get_attachment_url( $image_id ); // Image URL - Link of the image
$image['assets']['mime']    = get_post_field('post_mime_type', $image_id); // MIME Type
$image['assets']['caption'] = get_post_field('post_excerpt', $image_id);  // Caption
$image['assets']['content'] = get_post_field('post_content', $image_id);  // Description


echo "<pre>";
print_r($image);


?>