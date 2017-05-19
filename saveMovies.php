<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Movies</title>
    </head>
    <body>
        <h1>My Movies</h1>
        <?php
            $movieTitle = $_POST['movieTitle'];
            echo 'Movie Title: ' . $movieTitle . '<br />';
            $genre = $_POST['genre'];
            echo 'Genre: ' . $genre . '<br />';
            $mainActorActress = $_POST['mainActorActress'];
            echo 'Main Actor/Actress: ' . $mainActorActress;

            $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200358165', 'gc200358165','lyXAs4jl8F');

            $sql = 'INSERT INTO movies (movieTitle, genre, mainActorActress)    
                    VALUES (:movieTitle, :genre, :mainActorActress)';

            $cmd = $conn->prepare($sql);
            $cmd->bindParam(':movieTitle', $movieTitle, PDO::PARAM_STR, 50);
            $cmd->bindParam(':genre', $genre, PDO::PARAM_STR, 30);
            $cmd->bindParam(':mainActorActress', $mainActorActress, PDO::PARAM_STR, 70);

            $cmd->execute();

            $conn = null;

            header('location:movies.php');
        ?>
    </body>
</html>


