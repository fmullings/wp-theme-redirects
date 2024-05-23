<?php
//redirect page loading over any domain (relative) to fqdn from a relative url
function custom_page_redirect() {
    // Check if the current URL matches the old URL
    if (strpos($_SERVER['REQUEST_URI'], 'relative_from_url/goes_here') !== false) {
        // Perform the redirect to the new URL
        wp_redirect('https://target_url.com/landing_page', 301);
        exit();
    }
}
add_action('template_redirect', 'custom_page_redirect');


//redirect page loading over specifically live platform domain to fqdn prod domain specifically
function custom_page_redirect() {
  // Check if the browser requested URL matches the specified from url
  if (strpos( $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 'https://live-some-customer.pantheonsite.io/landing_page') !== false) {
      // Perform the redirect to the new URL
      wp_redirect('https://target_url.com/landing_page', 301);
      exit();
  }
}
add_action('template_redirect', 'custom_page_redirect');
