---
title: "Migrations"
category: "Optional Components"
order: 23
---

* [Definition](#definition)
- [Principles](#principles)
* [Rules](#rules)
* [Folder Structure](#folder-structure)
* [Code Samples](#code-samples)

<a name="definition"></a>

### Definition

Migrations (are the short name for Database Migrations).

Migrations are the version control of your database. They are very useful for generating and documenting the database tables.

<a name="principles"></a>

## Principles

- Migrations SHOULD be created inside the Containers folders.

- Migrations will be autoloaded in the framework

<a name="rules"></a>

### Rules

- No need to publish the DB Migrations. Just run the `artisan migrate` command and Laravel will read the Migrations from the Containers.

<a name="folder-structure"></a>

### Folder Structure

```
 - app
    - Containers
        - User
            - Data
                - Migrations
                    - 2200_01_01_000001_create_users_table.php
                    - ...
```

<a name="code-samples"></a>

### Code Samples

**User CreateUsersTable `Migrations`:**


```php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}

```


For more information about the Database Migrations read [this](https://laravel.com/docs/master/migrations).
