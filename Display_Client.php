

<html>
    <head>
        <title>Page accueil</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>  
    <body>
    <?php
    require 'db.php';
    $sql = "SELECT * from client"; // Requette SQL
    $result = $conn->query($sql);
    $conn->close();
     ?>
      <div class="b1">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th> Nom</th>
                <th> Prenom </th>
                <th> Date Naissance</th>
                <th> Adresse</th>
                <th> Email</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["idClient"]; ?></td>
                <td><?php echo $row["NomClient"] ?></td>
                <td><?php echo $row["PrenomClient"]; ?></td>
                <td><?php echo $row["DateNaiss"]; ?></td>
                <td><?php echo $row["AdressClient"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                        
            </tr> 
            <?php } ?>

        </table>

    </div>
    </body>
</html>

