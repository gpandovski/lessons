<?php
// Composer.json example
// {
//     // ...
//     "autoload": {
//         "psr-4": {
//             "MyVendorName\\MyProject": "src/"
//         },
//         "files": [
//             "src/functions.php"
//         ]
//     },
//     "autoload-dev": {
//         "psr-4": {
//             "MyVendorName\\MyProject\\Tests": "tests/"
//         }
//     }
// }


// Difference between 'composer install' and 'composer update'

// COMPOSER UPDATE

//composer update will update our dependencies as they are specified in composer.json.
//For example, if our project uses this configuration:

//     "require": {
//         "laravelcollective/html": "2.0.*"
//     }

//     In detail composer update will:

// 1. Read composer.json
// 2. Remove installed packages that are no more required in composer.json
// 3. Check the availability of the latest versions of our required packages
// 4. Install the latest versions of our packages
// 5. Update composer.lock to store the installed packages version


// COMPOSER INSTALL

// composer install will install all of the dependencies as specified in the composer.lock file at the version specified (locked), without updating anything.

// In detail:

// Read composer.lock file
// Install the packages specified in the composer.lock file