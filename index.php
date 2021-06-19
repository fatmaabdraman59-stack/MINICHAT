<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Chat</title>
</head>
<body>
    <header>
        <h1>Bienvenue dans le chat</h1>
    </header>
    <section>
        <h2>Tchatez et enjoy !</h2>
        <form action="#" method="post">
            <fieldset>
                <label for="pseudo">Votre pseudo</label>
                <input type="text" name="pseudo" id="pseudo">
                <p id="infoUser"></p>
            </fieldset>
            <fieldset>
                <label for="message">Votre message</label>
                <input type="text" name="message" id="message">
                <p id="infoMsg"></p>
            </fieldset>
            <input type="submit" value="Envoyer">
        </form>
        <hr>
        <div id="feed">
            <h2>Fil d'actu</h2>
            <div id="feed-content">
            </div>
        </div>
    </section>
    
</body>
</html>