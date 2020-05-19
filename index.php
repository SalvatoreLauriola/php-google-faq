<!-- Descrizione
Riscrivere questa pagina del sito google https://policies.google.com/faq
Ci sono diverse domande con relative risposte. Gestire il “Database” (array) e la visualizzazione di queste domande e risposte con PHP.
Non preoccupatevi dei link presenti nel testo delle risposte -->
<?php
    $question = [
        "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?" => ['text' => " <p> La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. </p>

        <p> Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni. </p>
        
        <p> Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese. </p>
        
        <p> Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge. </p>
        
        <p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."],




        "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?" => ['text' => "<p> Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>

        <p> Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. </p>
        
        <p> Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online. </p>
        
        <p> Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."],




        "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?" => ["text" => " <p> I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."],




        "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?" => ["text" => "<p> In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."]

    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap">
</head>
<body>
    <header>
        <nav>
            <div class="google">
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo">
                <h3>Privacy e Termini</h3>
            </div>
            <ul class="menu">
                <li> <a href="#">Introduzione</a></li>
                <li> <a href="#">Norme sulla Privacy</a></li>
                <li> <a href="#">Termini di Servizio</a></li>
                <li> <a href="#">Tecnologie</a></li>
                <li> <a href="#">Domande Frequenti</a></li>
                <li> <a href="#">Account Google</a></li>
                
            </ul>
        </nav>
    </header>

    <main class="content">
        <div class="container">
            <div class="faq">

<!-- php part -->

<?php foreach ($question as $key => $data) {?>
    <h2> <?php echo $key ?> </h2>
        <?php foreach ($data as $txt) {?>
            <p> <?php echo $data['text'] ?> </p>
            <?php  }  ?>
    <?php } ?>

<!-- end php -->

            </div>
        </div>
</main>
<footer>
    <div class="container">
        <div class="style">
            <ul class="footer">
                <li> <a href="#">Google</a></li>
                <li> <a href="#">Tutto su Google</a></li>
                <li> <a href="#">Privacy</a></li>
                <li> <a href="#">Termini</a></li>
            </ul>
            <div class="style-icon">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="logocity">
                <select name="c" id="c">
                    <option value="it">Italia</option>
                    <option value="fr">Francia</option>
                    <option value="sp">Spagna</option>
                </select>
            </div>
        </div>
        
        
    </div>
</footer>


</body>
</html>
