<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?= $title_for_layout ?></title>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->meta('icon') ?>

    <!-- CSS  -->
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('materialize.min.css', ['media'=>'screen,projection']) ?>
    <?= $this->Html->css('admin-style.css') ?>
    <?= $this->fetch('css') ?>
    
</head>
<body>
    <nav class="light-blue" role="navigation">
        <div class="nav-wrapper">
            <a id="logo-container" href="#" class="brand-logo hide-on-med-and-down">
                <?php if(!empty($this->request->session()->read('Auth.User.avatar')) && $this->request->session()->read('Auth.User.avatar') != 'null'): ?>
                <img src="<?= BASE_URL.'img/'.$this->request->session()->read('Auth.User.avatar'); ?>" class="z-depth-3" height="64" align="top">
                <?php endif; ?>
                Connecté en tant que <?= (!empty($this->request->session()->read('Auth.User.firstname')) && !empty($this->request->session()->read('Auth.User.lastname'))) ? $this->request->session()->read('Auth.User.firstname').' '.$this->request->session()->read('Auth.User.lastname') : $this->request->session()->read('Auth.User.login') ?>
            </a>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'home']); ?>"><i class="material-icons">home</i></a></li>        
                <li><a target="_blank" href="<?php echo $this->Url->build('/', true); ?>" title="Nouvelle fenêtre">Aller vers le site</a></li>
                <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="red lightent-4">Déconnexion</a></li>
            </ul>
        </div>
        <ul id="slide-out" class="side-nav">
            <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">Gestion des utilisateurs</a></li>
            <li><a href="<?php echo $this->Url->build(['controller' => 'Posts', 'action' => 'index']); ?>">Gestion des articles</a></li>
        </ul>
    </nav>
    <div id="container">
        <div class="row">        
            <header class="col s8 offset-s2">
                
            </header>
            <div class="col s12" id="page-content-container">
                <?= $this->Flash->render() ?>
                <?= $this->Flash->render('auth'); ?>
                <?= $this->fetch('content') ?>
            </div>
            <footer>
            </footer>
        </div>
    </div>

    <!-- JS  -->
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('//code.jquery.com/jquery-1.11.3.min.js'); ?>
    <?= $this->Html->script('materialize.min'); ?>
    <script type="text/javascript">
    (function($){
        $(function(){

            $('.button-collapse').sideNav({
                menuWidth: 300, // Default is 240
                edge: 'left', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            });

            $('select').material_select();

            $("#newAvatar").on('click', function(){
                if($("#blockNewAvatar").hasClass('hide'))
                    $("#blockNewAvatar").removeClass('hide').addClass('show');
                else
                    $("#blockNewAvatar").removeClass('show').addClass('hide');
            });

        }); // end of document ready
    })(jQuery); // end of jQuery name space
    </script>
</body>
</html>