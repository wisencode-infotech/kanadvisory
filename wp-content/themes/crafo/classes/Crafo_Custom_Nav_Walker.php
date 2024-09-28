<?php

class Crafo_Custom_Nav_Walker extends Walker_Nav_Menu {
    
    // Start level (submenu)
    function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
        } else {
            $output .= '<ul>';
        }
    }

    // Start element (menu item)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));

        // Handle parent items (with submenu)
        if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
            $output .= '<li class="nav-item dropdown dropdown-with-icon-style02">';
            $url = strtolower(esc_html($item->title)) != 'services' ? esc_url($item->url) : '#';
            $output .= '<a href="' . $url . '" class="nav-link">' . esc_html($item->title) . '</a>';
            $output .= '<i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>';
        } else {
            // Handle child items (within dropdown)
            if ($depth === 1) {
                $output .= '<li><a href="' . esc_url($item->url) . '">';
                // Example: Add custom icons based on the menu item title
                $icon_url = $this->get_menu_item_icon($item->title); // This is a custom method
                if ($icon_url) {
                    $output .= '<img src="' . esc_url($icon_url) . '" alt="" data-no-retina="">';
                }
                $output .= esc_html($item->title) . '</a></li>';
            } else {
                $output .= '<li class="nav-item"><a href="' . esc_url($item->url) . '" class="nav-link">' . esc_html($item->title) . '</a></li>';
            }
        }
    }

    // Custom method to return icon URLs based on menu item title (you can modify this as per your needs)
    function get_menu_item_icon($title) {
        $icons = array(
            'Corporate finance' => get_template_directory_uri() . '/images/demo-accounting-company-icon02.svg',
            'Financial services' => get_template_directory_uri() . '/images/demo-accounting-company-icon03.svg',
            'Online consulting' => get_template_directory_uri() . '/images/demo-accounting-company-icon-04.svg',
            'Investment consulting' => get_template_directory_uri() . '/images/demo-accounting-company-icon-05.svg',
            'Banking and financing' => get_template_directory_uri() . '/images/demo-accounting-company-icon-06.svg',
        );
        return isset($icons[$title]) ? $icons[$title] : '';
    }
}
