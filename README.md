# Laravel Assessment

## PHP Movies

### Setup
- Ensure you have Docker installed. Use WSL2 if you're on Windows.
- Simply run /vendor/bin/sail up -d to start the application
- Access it at `http://localhost`
- All `artisan` commands can be run with `./vendor/bin/sail artisan <command>`
- See [the Laravel docs](https://laravel.com/docs/10.x) to see how to create controllers, models, etc with artisan commands

### Requirements
This assessment is to see how your write clean, readable code and how you structure your application. Front end styling is not required, but you can add it if you'd like. We won't take it into account when reviewing the assessment.

The application should:

- Seed a database with at least 5 actors and at least 3 movies per actor
- Use Eloquent to define the relationship between actors and movies
- Have a view that displays the list of actors and their associated movies
- Also include one input that allows the list of actors to be filtered. This can either be done with just PHP or with JavaScript, whichever you prefer. We're just looking for the end result.
- Have a view with one input that allows the user to search people via the Star Wars API (https://swapi.dev/documentation#people) and then displays the data.
  - The API call should be done on the back end.

*We're really just looking for clean code and general best practices here. Nothing fancy is required.*