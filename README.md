Symfony Random API Reader
========================

The "Symfony Random API Reader" is an application created as a challenge for a new job.

Requirements
------------

  * PHP 8.1.0 or higher;
  * and the [usual Symfony application requirements].

Installation and Usage
----------------------

Clone the project to your machine with the following command:
```bash
git clone https://github.com/pcarvalho1981/simfony_api_reader.git
```

Assuming that you already have PHP and Symfony already installed in your machine, just go into your project folder and run the server:

```bash
php -S localhost:3000 -t public
```

From this moment on, you should be able to access the project on the following URL:

http://localhost:3000/

Quick Notes
-----------

This is a very simple project, so it doesn't require no database. Therefore, migrations won't be needed to test the application.
The instalation process described in this README file is untested. I believe that it's correct, but there might be an ocasional error and/or missing steps.
The selected API does not require authentication, so no authentication process is available in the code. No account is needed to access the API information.
The exceptions need further development.
