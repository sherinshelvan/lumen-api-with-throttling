# Steps for setting up the project in local

# Clone the project from "https://github.com/sherinshelvan/lumen-api-with-throttling.git" into your system.
# Rename ".env.example" or Copy to ".env"
# Create a database for the project
# Enter the database credentials into ".env" file
# Open a command prompt in the projects folder
# Run "composer install" (Composer should be pre-installed in your system)
# Run "php artisan migrate" to create database tables
# Run "php artisan db:seed" to insert data into the tables
# Set the desired number of api request attempt "THROTTLE_ATTEMPT" in the ".env" file
# Make sure the root of the project is set to public folder.
# Make the api request to the url "{BASE_URL}/api/users"