---
title: "Exceptions"
category: "Optional Components"
order: 15
---

* [Definition](#definition)
- [Principles](#principles)
* [Rules](#rules)
* [Folder Structure](#folder-structure)
* [Code Samples](#code-samples)


<a name="definition"></a>
### Definition

Exceptions are classes the handles errors, and helps developers debug their code in a more efficient way.

<a name="principles"></a>

## Principles

- Exceptions can be thrown from anywhere in the application.

- Exceptions SHOULD be created inside the Containers. However, general Exceptions SHOULD be created the Port layer.

<a name="rules"></a>

### Rules

- All Exceptions MUST extend `App\Ship\Parents\Exceptions\Exception`.

- Shared (general) Exceptions between all Containers SHOULD be created in the **Exceptions Port** folder (`app/Ship/Exceptions/*`).

- Every Exception SHOULD have two properties `httpStatusCode` and `message`, both properties will be displayed when an error occurs. You can override those values while throwing the error.

<a name="folder-structure"></a>

### Folder Structure

```
 - App
    - Containers
        - {container-name}
            - Exceptions
                - AccountFailedException.php
                - ...

    - Ship
        - Features
            - Exceptions
                  - IncorrectIdException.php
                - InternalErrorException.php
                - ...
```

<a name="code-samples"></a>

### Code Samples

**User `Exception`:**

```php
<?php

namespace App\Containers\User\Exceptions;

use App\Port\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response;

class AccountFailedException extends Exception
{
    public $httpStatusCode = Response::HTTP_CONFLICT;

    public $message = 'Failed creating new User.';
    
    public $code = 4711;
}
```

**General `Exception`:**

```php
<?php

namespace App\Port\Exception\Exceptions;

use App\Port\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class InternalErrorException extends Exception
{
    public $httpStatusCode = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;

    public $message = 'Something went wrong!';
}
```

**General `Exception` with CustomData:**

```php
<?php

namespace App\Port\Exception\Exceptions;

use App\Port\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class AwesomeExceptionWithCustomData extends Exception
{
    public $httpStatusCode = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;

    public $message = 'Something went wrong!';
    
    public $code = 1234;
    
    /*
     * Everything you add here will be automatically added to the ExceptionFormatter on the top level!
     * You can define any structure you want or maybe include translated messages
     */
    public function addCustomData() {
        return [
            'title' => 'nice',
            'description' => 'one fancy description here',
            'foo' => true,
            'meta' => [
                'bar' => 1234,
            ]
        ];
    }
}
```

**Exception usage from anywhere:**

```php
<?php

throw new AccountFailedException();
```

**Usage with Log for Debugging:**

```php
<?php

throw (new AccountFailedException())->debug($e); // debug() accepts string or \Exception instance
```

**Usage and overriding the default `message`:**

```php
<?php

throw new AccountFailedException('I am the message to be displayed for the user');

```

**Usage and overwriting pre-set CustomData**
```php
<?php

throw (new AwesomeExceptionWithCustomData())->overrideCustomData(['foo' => 'bar']);

```


