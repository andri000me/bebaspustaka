<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico') ?>"/>

        <title>Masuk</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/signin.css') ?>" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin" action="<?= base_url('Auth/login'); ?>" method="post">
            <img class="mb-4" src="<?= base_url('assets/unmul-logo.png') ?>" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Selamat datang kembali!</h1>
            <div class="text-center">
                <span class="text-danger"><?php echo $error; ?></span>
            </div>
            <label class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
        </form>
    </body>
</html>
