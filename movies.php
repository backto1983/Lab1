<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Movies</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <h1>My Movies</h1>

        <?php
            $conn = new PDO('mysql:host=aws.computerstudi.es;dbname=gc200358165', 'gc200358165','lyXAs4jl8F');

            $sql = "SELECT * FROM movies";

            $cmd = $conn->prepare($sql);

            $cmd->execute();

            $movies = $cmd->fetchAll();

            $conn = null;

            echo '<table class="table table-striped table-hover">
                  <tr><th>Movie Title</th>
                      <th>Genre</th>
                      <th>Main Actor/Actress</th></tr>';

            foreach($movies as $movie)
            {
                echo '<tr><td>'.$movie['movieTitle'].'</td>
                          <td>'.$movie['genre'].'</td>
                          <td>'.$movie['mainActorActress'].'</td></tr>';
            }
            echo '</table>';
        ?>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</html>
