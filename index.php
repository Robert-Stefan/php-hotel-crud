<?php 
require_once __DIR__ . '/partials/scripts/get-rooms.php' ?>
<!DOCTYPE html>
<html lang="en">

<?php 
require_once __DIR__ . '/partials/template/head.php' ?>

<body>
    
    <main class="container">
        <h1 class="my-4">Stanze Hotel</h1>

        <table class="table">
            <thead>
                <tr>
                <th>ID</th>
                <th>Numero Stanza</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php // Loop DB records
                if(!empty($stanze)) {
                    foreach($stanze as $stanza) { ?>
                        <tr>
                            <td><?php echo $stanza['id'] ?></td>
                            <td><?php echo $stanza['room_number'] ?></td>
                            <td>
                            <a class="text-success" 
                                href="./show.php?id=<?php echo $stanza['id']; ?>">
                                Visualizza dettagli  
                            </a>
                            </td>
                        </tr>
                   <?php } 
                }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>