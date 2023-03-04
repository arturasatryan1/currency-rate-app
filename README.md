#### Run project

- Clone the project from the Git repository or download the source code from the website.
- Open a terminal and navigate to the project directory.
- Run the command ./vendor/bin/sail up to start the Docker containers.
- If you are running the project for the first time, run the command ./vendor/bin/sail artisan migrate to run the database migrations.
- Access the project by visiting http://localhost in your web browser.
- If you need to stop the containers, run the command ./vendor/bin/sail down.

###Note: Make sure you have Docker and Docker Compose installed on your machine before running Laravel Sail.
