<!-- NAVIGATION -->
<div id="nav" class="wrapper top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <a href="{{ URL::route('page.index') }}">{{ HTML::image('images/logo.png', 'ATM Logo') }}</a>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <li>{{ HTML::linkRoute('team.index', 'Équipe') }}</li>
            <li><a href="#" alt="">Évènements</a></li>
            <li><a href="#" alt="">Albums</a></li>
            <li><a href="#" alt="">Recrutement</a></li>
        </ul>
    </div>
</div>