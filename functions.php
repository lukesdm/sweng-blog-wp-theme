<?php
// Custom excerpt function - doesn't fetch more than 1st paragraph, or 300 characters.
// Remarks: Doesn't account for markup in first paragraph.
function my_excerpt($text, $raw_excerpt) {
    if (! $raw_excerpt) {
        $content = apply_filters('the_content', get_the_content());
        $charLimit = 300;
        $endOfParagraph = (strpos($content, '</p>'));

        $text = substr($content, 0, min($endOfParagraph ?? $charLimit, $charLimit));
        if (strlen($content) > strlen($text) + 5) // 5 trailing chars for standard text block
        {
            $text .=  '[...]</p>';
        }
        return $text;
    }
    else {
        return $raw_excerpt;
    }
}
add_filter('wp_trim_excerpt', 'my_excerpt', 10, 2);