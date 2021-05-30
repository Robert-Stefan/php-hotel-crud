<?php 
    require_once __DIR__ . '/partials/scripts/get-single-room.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php 
require_once __DIR__ . '/partials/template/head.php' ?>

<body>
    
    <main class="container">
        <?php if(!empty($stanza)) { ?>
        <h1 class="my-4">Stanza n. <?php echo $stanza['room_number']; ?></h1>

        <ul>
            <li>Piano: <?php echo $stanza['floor'] ?> </li>
            <li>Letto/i: <?php echo $stanza['beds'] ?> </li>
        </ul>

        <?php } else { ?>
            <h2>Non è stato trovato nulla. Riprova.</h2>
        <?php } ?>

        <a href="./">Torna alla homepage</a>        
    </main>

</body>
</html>