<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserimento dati</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        
        <h1>
            <?php echo "Ciao, inserisci i dati"; ?>
        </h1>
        <form action="" method="get">
            <div>
                <label for="nome_in">Nome</label>
                <input type="text" name="nome_in" id="nome_in">
            </div>
            <div>
                <label for="cognome_in">Cognome</label>
                <input type="text" name="cognome_in" id="cognome_in">
            </div>
            <button type="submit">Invia</button>
        </form>
    </main>
</body>
</html> 
