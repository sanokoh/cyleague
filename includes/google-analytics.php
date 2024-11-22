<?php

// Google Analyticsの追加
function add_google_analytics()
{ ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZDMLM1LCFD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZDMLM1LCFD');
</script>
<?php }
add_action('wp_head', 'add_google_analytics');
