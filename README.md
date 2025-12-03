# wordpress-breadcrumbs-2025
Basit, özelleştirilebilir ve WordPress temalarına kolayca entegre edilebilen bir breadcrumb yapısı. Bu proje, kullanıcıların sitenin hiyerarşisinde nerede olduğunu görmesini sağlayarak SEO ve kullanıcı deneyimini iyileştirmeyi amaçlar.

Proje Açıklaması

WordPress içerisinde kategori, yazı, sayfa ve arama sonuçları için çalışabilen temel bir breadcrumb fonksiyonu oluşturulmuştur. Bu fonksiyon tema bağımsızdır ve herhangi bir eklenti gerektirmez.

Kullanılan Teknolojiler

PHP (WordPress fonksiyonları)

HTML

CSS (isteğe bağlı stil düzenlemeleri için)

Kurulum
1. Fonksiyonu Tema Dosyasına Eklemek

Aşağıdaki fonksiyonu functions.php dosyanıza ekleyin:




```
function custom_breadcrumbs() {
    $separator = ' > ';
    $home = 'Anasayfa';
    echo '<div class="breadcrumbs">';
    if (!is_front_page()) {
        echo '<a href="'.home_url().'">'.$home.'</a>'.$separator;
    }
    if (is_category() || is_single()) {
        the_category(' &bull; ');
        if (is_single()) {
            echo $separator; the_title();
        }
    } elseif (is_page()) {
        echo the_title();
    } elseif (is_search()) {
        echo 'Arama sonuçları: ' . get_search_query();
    }
    echo '</div>';
}
```







Kullanım

Breadcrumb’ın görünmesini istediğiniz yere aşağıdaki kodu ekleyin:

<?php memo_breadcrumbs(); ?>


Bu genellikle header.php içinde başlığın hemen altına konur.
