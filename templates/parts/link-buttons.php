<?php
if (!isset($links) || !is_array($links)) {
    return;
}
?>
<div class="buttons">
    <?php foreach ($links as $link): ?>
        <a href="<?php echo esc_url($link['url']); ?>" class="link-button <?php echo esc_attr($link['class']); ?>">
            <?php echo esc_html($link['text']); ?>
        </a>
    <?php endforeach; ?>
</div>
