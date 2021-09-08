<?php

if (!function_exists('parcours_theme_setup')) {
    function parcours_theme_setup()
    {
        // wp_enqueue_style()
        // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
        /*
            $handle
            (string) (Required) Name of the stylesheet. Should be unique.

            $src
            (string) (Optional) Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.

            Default value: ''

            $deps
            (string[]) (Optional) An array of registered stylesheet handles this stylesheet depends on.

            Default value: array()
        */

        // get_template_directory_uri() : Function: Retrieves template directory URI for current theme.
        // je veux absolument que mon reset.css soit inclus avant style.css
        // pour cela je dit à WP que style.css dépends de reset.css, avec le 3eme paramètre
        // WP est quand même sympa, il respecte l'ordre dans lequel on déclare les CSS => on aurait pu mettre le reset avant le style
        wp_enqueue_style('parcours-style', get_template_directory_uri()."/css/style.css", ["parcours-reset"]);
        wp_enqueue_style('parcours-reset', get_template_directory_uri()."/css/reset.css");

        // j'active l'option de gestion du titre de la page consulté
        add_theme_support('title-tag');
        // j'active l'option de gestion des menus dans le BackOffice
        add_theme_support('menus');
    }
    // comme en JS, on s'abonne à une addEventListener
    // et un y déclare un 'handler'
    add_action('after_setup_theme', 'parcours_theme_setup');
}

// Puisque je choisis le nom de ma function, et qu'un autre développeur
// peut utiliser le mêmem nommage, on teste la non-existance d'une function du même nom
// avant de la déclarer
if (!function_exists('apply_nav_menu_item_css')) {
    function apply_nav_menu_item_css($classes)
    {
        // je ne connais pas le contenu du paramètre, var_dump !
        // var_dump($classes);
        /*
        array (size=4)
        1 => string 'menu-item' (length=9)
        2 => string 'menu-item-type-post_type' (length=24)
        3 => string 'menu-item-object-page' (length=21)
        4 => string 'menu-item-36' (length=12)
        */
        $classes[] = 'left__nav-item';
        //! Si je ne renvoit rien, mon LI n'aura aucune classe CSS
        return $classes;
    }
    // on se doute déjà qu'il va falloir utiliser un Hook filter
    // https://developer.wordpress.org/reference/hooks/nav_menu_css_class/
    add_filter('nav_menu_css_class', 'apply_nav_menu_item_css');
}

