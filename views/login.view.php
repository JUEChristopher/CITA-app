<title>Login</title>




<div class="login">
    <div class="content">
        <h1 id="title">Connexion</h1>
        <?php if(isset($error)): ?>
            <div class="alert error">
                <?= $error ?>
                <?php var_dump($result); ?>
            </div>
        <?php endif; ?>
        <form class="form" action="" method="POST">
            <div class="field">
                <label>Email</label>
                <input name="email" type="email" required>
            </div>
            <div class="field">
                <label>Mot de passe</label>
                <input name="password" type="password" required>
            </div>
            <div class="submit">
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>
</div>