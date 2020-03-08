# SilverStripeCMS Lessons

This sample project follows the [SilverStripe.org lessons v4](https://www.silverstripe.org/learn/lessons/v4/)

Each lessons has it's own branch and will be merged with master once each lessons is complete.

## Installation

This is a SilverStripeCMS project. The installation is similar to a new SilverStripeCMS Project.

### Clone or Download this Project from GitHub

See [Cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a 
local copy of this project on your computer.

### Install the Dependencies

The project uses SilverStripeCMS 4.5.1, which has a requirement for **PHP 7.1** or higher. 
 Composer is highly recommended to install the dependencies.

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

Any SilverStripe Supported database can be used, in this example MySQL is given.

#### MySql

For MySql, create a database on your MySql server and add the settings to the
**.env** file:

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
SS_DATABASE_USERNAME="root"
SS_DATABASE_PASSWORD="MySQLpassword"
SS_DATABASE_NAME="silverstripe"
```

## Contributions

Feel free to leave comments for improvements. No contributions to the code is required. Feel free to fork or clone or 
copy for your own use.

## License

The project is open-source software licensed under the [BSD License](LICENSE.md).
