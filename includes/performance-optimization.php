<?php

// DNSプリフェッチ
function add_dns_prefetch()
{
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">' . "\n";
    echo '<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">' . "\n";
}
add_action('wp_head', 'add_dns_prefetch');

// Lazy Load機能
add_filter('wp_lazy_loading_enabled', '__return_true');

