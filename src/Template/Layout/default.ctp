<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?= $title_for_layout ?></title>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->meta('icon') ?>

    <!-- CSS  -->
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext') ?>
    <?= $this->Html->css('materialize.min.css', ['media'=>'screen,projection']) ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->fetch('css') ?>
    
</head>
<body id="<?= $page; ?>">
    
    <header id="masthead">
        <div id="logo1"></div>
        <div id="logo2"></div>
        <div id="logo3"></div>
        <div id="logo4"></div>
        <div id="logo5"></div>
        <div id="logo6"></div>
        <div id="logo7"></div>
        <div id="logo8"></div>
        <div id="logo9"></div>
        <div id="logo10"></div>
        <nav role="navigation">
            <div class="nav-wrapper">
                <div id="nav-menu-laptop" class="hide-on-med-and-down z-depth-3">
                    <a id="logo-container" href="#" class="brand-logo hide-on-med-and-down"><h1>Alexis Avenel</h1></a>
                    <ul id="nav-laptop">
                        <li><?php echo $this->Html->link('Accueil', '/'); ?></li>
                        <li><?php echo $this->Html->link('Expériences', '/Experiences'); ?></li>
                        <li><?php echo $this->Html->link('Formations', '/Formations'); ?></li>
                        <li><?php echo $this->Html->link('Compétences', '/Competences'); ?></li>
                        <li><?php echo $this->Html->link('Portfolio', '/Portfolio'); ?></li>
                        <li><?php echo $this->Html->link('Contact', '/Contact'); ?></li>
                    </ul>                    
                </div>
                <div id="nav-menu-mobile">
                    <ul id="nav-mobile" class="side-nav">
                        <li><?php echo $this->Html->link('Accueil', '/'); ?></li>
                        <li><?php echo $this->Html->link('Expériences', '/Experiences'); ?></li>
                        <li><?php echo $this->Html->link('Formations', '/Formations'); ?></li>
                        <li><?php echo $this->Html->link('Compétences', '/Competences'); ?></li>
                        <li><?php echo $this->Html->link('Portfolio', '/Portfolio'); ?></li>
                        <li><?php echo $this->Html->link('Contact', '/Contact'); ?></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
        <div id="masthead-logo">
            <a href="#"><?= $this->Html->image("responsive-design-image.png", ["id" => "header-responsive", "title" => "Responsive Design", "alt" => "Logo Responsive Design"]); ?></a>
            <a href="#"><?= $this->Html->image("arrow.png", ["id" => "header-arrow", "title" => "Go down", "alt" => "Logo Arrow"]); ?></a>
        </div>
    </header>

    <main>
        <div id="container">
            <div class="row">
                <div class="col s12" id="page-content-container">
                    <?= $this->Flash->render() ?>
                    <?= $this->Flash->render('auth'); ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer light-blue">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Company Bio</h5>
              <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Settings</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
              </ul>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Connect</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                <li><a class="white-text" href="#!">Link 2</a></li>
                <li><a class="white-text" href="#!">Link 3</a></li>
                <li><a class="white-text" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by <a class="light-blue-text text-lighten-3" href="http://materializecss.com">Materialize</a>
          </div>
        </div>
    </footer>
    <!-- JS  -->
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('//code.jquery.com/jquery-1.11.3.min.js'); ?>
    <?= $this->Html->script('materialize.min'); ?>
    <?= $this->Html->script('init'); ?>
</body>
</html>
