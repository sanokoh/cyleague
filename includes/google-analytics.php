<?php

// Google Analyticsの追加
function add_google_analytics()
{ ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXX-X"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-XXXXXX-X');
    </script>
<?php }
add_action('wp_head', 'add_google_analytics');
