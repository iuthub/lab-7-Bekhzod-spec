SELECT * FROM movies WHERE year=1995;
SELECT roles.role FROM roles JOIN movies ON roles.movie_id=movies.id WHERE movies.name="Lost in Translation";
SELECT actors.first_name, actors.last_name, roles.role FROM roles JOIN movies ON roles.movie_id=movies.id JOIN actors ON roles.actor_id=actors.id WHERE movies.name="Lost in Translation";
SELECT directors.first_name, directors.last_name, movies.name FROM movies JOIN movies_directors ON movies_directors.movie_id=movies.id JOIN directors ON directors.id=movies_directors.director_id WHERE movies.name="Fight Club";
SELECT directors.first_name, directors.last_name, movies.name FROM movies JOIN movies_directors ON movies_directors.movie_id=movies.id JOIN directors ON directors.id=movies_directors.director_id WHERE directors.first_name="Clint" AND directors.last_name="Eastwood";
SELECT directors.first_name, directors.last_name, directors_genres.genre FROM directors JOIN directors_genres ON directors.id=directors_genres.director_id WHERE directors_genres.genre="Horror";
SELECT actors.first_name, actors.last_name, movies.name, directors.first_name, directors.last_name FROM directors JOIN movies_directors ON directors.id=movies_directors.director_id JOIN movies ON movies.id=movies_directors.movie_id JOIN roles ON movies_directors.movie_id=roles.movie_id JOIN actors ON roles.actor_id=actors.id WHERE directors.first_name="Christopher";
