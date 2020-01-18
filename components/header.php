<?php
$page = 'home';
if(isset($_GET['page'])) {
    $page = $_GET['page'];
}
?>
<section class="header">
    <a href="/?page=home&lang=<?php echo $lang ?>">
        <img class="logo" src="/images/logo.png" alt="Logo">
    </a>
    <nav class="nav">
        <a class="nav-item" href="/?page=home&lang=<?php echo $lang ?>"><?php echo t('home') ?></a>
        <a class="nav-item" href="/?page=about-me&lang=<?php echo $lang ?>"><?php echo t('about-me') ?></a>
        <a class="nav-item" href="/?page=my-projects&lang=<?php echo $lang ?>"><?php echo t('my-projects') ?></a>
        <section class="lang-selection">
            <a class="lang-select <?php if($lang == 'en') echo 'active' ?>" href="/?page=<?php echo $page ?>&lang=en">EN</a> |
            <a class="lang-select <?php if($lang == 'de') echo 'active' ?>" href="/?page=<?php echo $page ?>&lang=de">DE</a> |
            <a class="lang-select <?php if($lang == 'fr') echo 'active' ?>" href="/?page=<?php echo $page ?>&lang=fr">FR</a>
        </section>
    </nav>
</section>
