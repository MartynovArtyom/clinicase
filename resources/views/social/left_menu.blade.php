<p class="color-text-gray mb-0 mt-2 mb-1">MENU</p>

<ul class="list-group py-0">
    <a href="{{ url('/') }}" class="list-group-item py-2 px-2 color-text-gray {{ isset($page) && $page == 'social' ? 'left-menu-active': '' }}">
        <i class="fa fa-home color-text-gray size-ico-left-menu"></i>
        Accueil
    </a>
    <a href="{{ url('/post/') }}" class="list-group-item py-2 px-2 color-text-gray {{ isset($page) && $page == 'post' ? 'left-menu-active': '' }}">
        <i class="fa fa-plus color-text-gray size-ico-left-menu"></i>
        Cas ajoutés
    </a>
    <a href="{{ url('/contact-list/') }}" class="list-group-item py-2 px-2 color-text-gray {{ isset($page) && $page == 'chat' ? 'left-menu-active': '' }}">
        <i class="fa fa-exchange color-text-gray size-ico-left-menu"></i>
        Echanger
    </a>
    <a href="{{ url('/favorites-posts/') }}" class="list-group-item py-2 px-2 color-text-gray {{ isset($page) && $page == 'favorites_posts' ? 'left-menu-active': '' }}">
        <i class="fa fa-star color-text-gray size-ico-left-menu"></i>
        Mes favoris
    </a>
</ul>
