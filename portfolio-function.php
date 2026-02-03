<?php

// === Réseaux sociaux dynamiques ===
function render_social_links() {
    $socials = [
        'linkedin' => 'https://www.linkedin.com/in/filytoure',
        'github' => 'https://github.com/filyy03'
    ];

    echo '<div class="social-links d-block">'; // d-block pour tous les écrans
    foreach ($socials as $key => $link) {
        if (filter_var($link, FILTER_VALIDATE_URL)) {
            // ici on choisit la classe Boxicons
            $iconClass = $key === 'linkedin' ? 'bxl-linkedin' : ($key === 'github' ? 'bxl-github' : '');
            echo '<a href="' . htmlspecialchars($link) . '" target="_blank">
                    <i class="bx ' . $iconClass . '"></i>
                  </a>';
        }
    }
    echo '</div>';
}

function render_nav_menu() {
    $menu = [
        ['title' => 'Accueil', 'href' => '#section-home'],
        ['title' => 'Projets', 'href' => '#section-portfolio'],
        ['title' => 'CV', 'href' => '#section-resume'],
        ['title' => 'À propos', 'href' => '#section-about'],
        ['title' => 'Contact', 'href' => '#section-contact']
    ];

    // ul avec la classe Bootstrap
    echo '<ul class="navbar-nav">';
    foreach ($menu as $item) {
        echo '<li class="nav-item"><a class="nav-link" href="' . $item['href'] . '">' . $item['title'] . '</a></li>';
    }
    echo '</ul>';
}

?>
