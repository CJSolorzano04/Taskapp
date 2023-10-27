<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection ("title") ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css" integrity="sha256-WLKGWSIJYerRN8tbNGtXWVYnUM5wMJTXD8eG4NtGcDM=" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= site_url ('/css/auto-complete.css') ?>">
    <style>
    /*body {
        text-align: center;
        margin: 50px;
        background-color: #fff; 
        color: #333; 
    }

    .welcome-message {
        font-size: 24px;
        color: #333; 
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #333; 
        font-size: 20px;
    }

    input {
        padding: 8px;
        border: 1px solid #555;
        border-radius: 4px;
        background-color: #eee; 
        color: #333;
    }

    button {
        padding: 10px 20px;
        margin-top: 10px;
        border: 1px solid #ccc; 
        border-radius: 5px;
        background-color: #666; 
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;

    }

    h1 {
        text-align: center;
        color: #1a5276; 
        font-size: 36px; 
        font-weight: bold;
        margin-bottom: 60px;
    }

    .navbar-start {
        text-align: left;
        margin-top: 1px;

    }

    .navbar-item {
        display: inline-block;
        padding: 10px 15px;
        margin: 20px;
        text-decoration: none;
        color: #fff;
        border-radius: 10px;
        background-color: #3498db; 
        transition: background-color 0.3s ease;
    }

    .navbar-item:hover {
        background-color: #555; 
    }


    a {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        text-decoration: none;
        color: #333;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        font-size: 20px;
    }

    a.signup {
        background-color: #4caf50;
    }

    a.login {
        background-color: #3498db;
    }

    a:hover {
        background-color: #999;
    }*/
</style>

</head>

<body>

<section class="section">
    
    <nav class="navbar" role="navigation" aria-label="main navigation">

        <div class="navbar-menu">

            <div class="navbar-start">

                <a class="navbar-item" href="<?= site_url("/") ?>">Home</a>
                
            </div>

            <div class="navbar-end">

                <?php if (current_user()): ?>
                    
                    <div class="navbar-item">Hello <?= esc(current_user()->name) ?></div>
                    
                    <a class="navbar-item" href="<?= site_url("/profile/show") ?>">Profile</a>
                    
                    <?php if (current_user()->is_admin): ?>
                        
                        <a class="navbar-item" href="<?= site_url("/admin/users") ?>">Users</a>
                        
                    <?php endif; ?>
                    
                    <a class="navbar-item" href="<?= site_url("/tasks") ?>">Tasks</a>
                    
                    <a class="navbar-item" href="<?= site_url("/logout") ?>">Log out</a>
                    
                <?php else: ?>
                    
                    <a class="navbar-item" href="<?= site_url("/signup") ?>">Sign up</a>    
                    
                    <a class="navbar-item" href="<?= site_url("/login") ?>">Log in</a>
                    
                <?php endif; ?>

            </div>
        </div>
    </nav>

    <?php if (session()->has('warning')): ?>
        <div class="notification is-warning is-light">
            <button class="delete"></button>
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="notification is-info is-light">
            <button class="delete"></button>
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="notification is-danger is-light">
            <button class="delete"></button>
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
    
</section>

<script src="<?= site_url('/js/app.js') ?>"></script>
    
</body>

</html>