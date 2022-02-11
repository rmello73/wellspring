Basic Breakdown:

data
    Contains sample csv data.

public
    Contains the app.php file using only the ServiceControllerServiceProvider and TwigServiceProvider. I tried to keep it as lean as possible, rather than using a full Silex install.

src
- Controllers
    DataUploadController.php and ProcessController.php.
- Models
    Contains the Run model for the required fields.
- Repositories
    Contains the Runs repository.
- Views
    Contains runs.html.twig to load the file, process it and display the results.

USAGE:

$ composer install
$ vendor/bin/phpunit
$ php -S 0.0.0.0:8100 -t public public/app.php

Open up a web browser and navigate to: http://localhost:8100