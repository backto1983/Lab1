<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Movies Table</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <main class="container">
            <form action="saveMovies.php" method="post">
                <fieldset>
                    <label for="movieTitle" class="col-sm-2">Movie Title</label>
                    <input name="movieTitle" id="movieTitle" />
                </fieldset>
                <fieldset>
                    <label for="genre" class="col-sm-2">Genre</label>
                    <input name="genre" id="genre" />
                </fieldset>
                <fieldset>
                    <label for="mainActorActress" class="col-sm-2">Main Actor/Actress</label>
                    <input name="mainActorActress" id="mainActorActress" />
                </fieldset>
                <button>Submit</button>
            </form>
        </main>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"></script>
</html>