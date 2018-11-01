<ul class="sidebar navbar-nav">

    <?php if(isset($_SESSION['AdminLogin'])) : ?>
    <li class="nav-item">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>

    <li class="nav-item">
        <a class="nav-link" href="user">
            <i class="fas fa-fw fa-users"></i>
            <span>Gebruikers</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="nuturing">
            <i class="fas fa-fw fa-heart"></i>
            <span>voor Verzorgers</span></a>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="nuturing">
            <i class="fas fa-fw fa-heart"></i>
            <span>voor Ouders</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="children">
            <i class="fas fa-fw fa-child"></i>
            <span>voor Kinderen</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="documents">
            <i class="fas fa-fw fa-folder"></i>
            <span>Documenten</span></a>
    </li>
    <?php elseif (isset($_SESSION['KindLogin'])) : ?>
    <li class="nav-item">
        <a class="nav-link" href="documents">
            <i class="fas fa-fw fa-folder"></i>
            <span>Mijn Documenten</span></a>
    </li>
    <?php elseif(isset($_SESSION['VerzorgendeLogin'])) : ?>
    <li class="nav-item">
        <a class="nav-link" href="documents">
            <i class="fas fa-fw fa-folder"></i>
            <span>Mijn Documenten</span></a>
    </li>
    <?php endif; ?>
</ul>