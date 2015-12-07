<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name hide-for-medium-only">
            <h1><a href="/bontekoe9/">De Bonte Koe</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    
    <section class="top-bar-section">
        <ul class="left">
            <?php if (isset($navigation)): ?>
                <?php foreach ($navigation as $key => $value): ?>
                    <?php if (is_array($value)): ?>
                        <li class="has-dropdown">
                            <a href="#"><?php echo $key ?></a>
                            <ul class="dropdown">
                                <?php foreach ($value as $kkey => $vvalue): ?>
                                    <li <?php echo $pagina = ($page == $kkey) ? 'class="active"' : '' ; ?>><a href="<?php echo $vvalue ?>"><?php echo $kkey ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li <?php echo $pagina = ($page == $key) ? 'class="active"' : '' ; ?>><a href="<?php echo $value ?>"><?php echo $key ?></a></li>
                    <?php endif; ?>
                <?php endforeach ?>
            <?php else: ?>
                <li><a href="/bontekoe9/restaurant">Restaurant</a></li>
                <li><a href="/bontekoe9/uitgaan">Uitgaan</a></li>
                <li><a href="/bontekoe9/bioscoop">Bioscoop</a></li>
            <?php endif ?>
        </ul>
        <ul class="right">
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
            <li><a href="/bontekoe9/gebruiker">Hallo, <?php echo $_SESSION['voornaam'] ?></a></li>
            <?php if (!$_SESSION['level'] == 0): ?>
                <li <?php echo $paginar = (@$page == 'Dashboard') ? 'class="active"' : ''; ?>><a href="/bontekoe9/medewerker/dashboard">Dashboard</a></li>
            <?php endif ?>
            <li><a href="/bontekoe9/uitloggen">Uitloggen</a></li>            
        <?php else: ?>
            <li><a href="/bontekoe9/inloggen">Inloggen</a></li>
        <?php endif ?>
        </ul>
    </section>
</nav>
