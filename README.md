# Silverstripe CMS Lessons

This sample project follows the [SilverStripe.org lessons v4](https://www.silverstripe.org/learn/lessons/v4/)

All lessons have their own branch and have been merged with master once each lesson is complete.

## Installation

This is a Silverstripe CMS project. The installation is similar to a new Silverstripe CMS Project.

### Clone or Download this Project from GitHub

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

### Install the Dependencies

The project uses Silverstripe CMS 4.8.0, which has a requirement for **PHP 7.1** or higher or **PHP 8.0**. Composer is
required to install the dependencies.

From the root of the project run composer install from the command line:

```shell script
composer install
```

### Create an .env file

Create an `.env` file from `.env.example`

#### Linux / Mac

```shell script
cp .env.example .env
```

#### Windows

```shell script
copy .env.example .env
```

### Update the Database Settings

Any Silverstripe CMS Supported database can be used, MySQL in this example.

#### MySQL

For MySQL, specify a database **.env** file and Silverstripe will automatically create the database:

```text
# For a complete list of core environment variables see
# https://docs.silverstripe.org/en/4/getting_started/environment_management/#core-environment-variables

# Development environment
SS_ENVIRONMENT_TYPE = "dev"

# Default admin username and password
SS_DEFAULT_ADMIN_USERNAME="admin"
SS_DEFAULT_ADMIN_PASSWORD="password"

# DB credentials, adjust to your local MySQL settings
SS_DATABASE_CLASS="MySQLPDODatabase"
SS_DATABASE_SERVER="localhost" 
SS_DATABASE_USERNAME="<MySQLuser>"
SS_DATABASE_PASSWORD="<MySQLpassword>"
SS_DATABASE_NAME="silverstripe_lessons"
```

## Build

Either build from the command line or website

### Command line

#### Linux / Mac

```shell script
vendor/bin/sake dev/build?flush=all
```

#### Windows:

```shell
vendor\bin\sake.bat dev/build?flush=all
```

### Configure web service

Silverstripe supports IIS and Apache, configure either as required to support PHP. Then optionally
append `/dev/build?flush=all` to build your site.

## Enjoy!

Once built open the website, to login to the CMS append `/admin` to your url, login with the username and password you
specified in the `.env` file.

## Contributions

Feel free to leave comments for improvements. No contributions to the code is required. Feel free to fork or clone or
copy for your own use.

## License

The project is open-source software licensed under the [BSD License](LICENSE.md).
