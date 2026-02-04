<?php
/*
 * THE BKEPT ROUTER
 * Directs traffic to the correct HTML file based on the URL slug.
 */

// 1. Identify which page is being requested
$slug = basename(get_permalink());

// 2. Route to the matching GitHub file
if ($slug == 'pricing') {
    include 'pricing.html';
} elseif ($slug == 'partners') {
    include 'partners.html';
} elseif ($slug == 'the-library' || $slug == 'library') {
    include 'library.html';
} else {
    // Fallback for any undefined page
    echo '<div style="padding:100px; text-align:center; font-family:sans-serif;">Error: Page Protocol Not Found. Check GitHub Repository.</div>';
}
?>
