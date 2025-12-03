function memo_breadcrumbs() {
    $separator = ' > ';
    $home = 'Anasayfa';

    echo '<div class="breadcrumbs">';

    if (!is_front_page()) {
        echo '<a href="' . home_url() . '">' . $home . '</a>' . $separator;
    }

    if (is_category() || is_single()) {
        the_category(' • ');
        if (is_single()) {
            echo $separator . get_the_title();
        }
    } elseif (is_page()) {
        echo get_the_title();
    } elseif (is_search()) {
        echo 'Arama sonuçları: ' . get_search_query();
    }

    echo '</div>';
}
