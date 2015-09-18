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
<body class="blue-grey lighten-4">

    <header>
        <nav class="top-nav blue-grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
                    <a class="page-title"><?= $title_for_layout ?></a>
                </div>
            </div>
        </nav>
        <ul id="nav-mobile" class="side-nav fixed blue-grey darken-4" style="width: 240px;">
            <li class="logo">
                <a id="logo-container" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'edit', $this->request->session()->read('Auth.User.id')]); ?>" class="brand-logo">
                    <div class="bold">
                    <?= (!empty($this->request->session()->read('Auth.User.firstname')) && !empty($this->request->session()->read('Auth.User.lastname'))) ? $this->request->session()->read('Auth.User.firstname').' '.$this->request->session()->read('Auth.User.lastname') : $this->request->session()->read('Auth.User.login') ?>
                    </div>
                    <?php if(!empty($this->request->session()->read('Auth.User.avatar')) && $this->request->session()->read('Auth.User.avatar') != 'null'): ?>
                        <img src="<?= BASE_URL.'img/'.$this->request->session()->read('Auth.User.avatar'); ?>" class="z-depth-3 filter circle responsive-img" id="front-page-logo">
                    <?php endif; ?>
                </a>
            </li>
            <li class="bold"><a href="<?php echo $this->Url->build('/'.ADMIN_PREFIX.'/home'); ?>" class="waves-effect waves-teal">Home</a></li>
            <li class="bold">
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="waves-effect waves-teal">Gestion des utilisateurs</a>
            </li>
            <li class="bold">
                <a href="<?php echo $this->Url->build(['controller' => 'Posts', 'action' => 'index']); ?>" class="waves-effect waves-teal">Gestion des articles</a>
            </li>
            <li class="bold website">
                <a href="<?= BASE_URL ?>" class="waves-effect waves-teal" target="_blank">Aller vers le site</a>
            </li>
            <li class="bold disconnect">
                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="waves-effect waves-teal">Déconnexion</a>
            </li>
        </ul>
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

    <footer>

    </footer>

    <!-- JS  -->
    <?= $this->fetch('script') ?>
    <?= $this->Html->script('//code.jquery.com/jquery-1.11.3.min.js'); ?>
    <?= $this->Html->script('materialize.min'); ?>
    <script type="text/javascript">
    (function($){
        $(function(){

            $('.button-collapse').sideNav({edge: 'left'});

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