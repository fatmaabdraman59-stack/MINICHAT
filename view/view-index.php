    <title>Mini-Chat</title>
</head>
<body>
    <header>
        <h1>Bienvenue dans le chat</h1>
    </header>
    <section>
        <p class="hello"><?= isset($_COOKIE['pseudo']) ? 'Bonjour ' . $_COOKIE["pseudo"] . ' !': ''; ?></p>
        <h2>Tchatez et enjoy !</h2>
        <form action="message-post.php" method="post">
            <fieldset>
                <label for="pseudo">Votre pseudo</label>
                <input type="text" name="pseudo" id="pseudo" value="<?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo']:'""' ?>" aria-describedby="infoUser" autofocus>
                <p id="infoUser"></p>
            </fieldset>
            <fieldset>
                <label for="message">Votre message</label>
                <input type="text" name="message" id="message" placeholder="Votre message" aria-describedby="infoMsg">
                <p id="infoMsg"></p>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
        <hr>