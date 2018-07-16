---
title: "Queues"
category: "Features"
order: 40
---

Queues work normally as they would in Laravel ([docs](https://laravel.com/docs/queues)).
The only difference here is that apiato, by default, detects which queue driver you are planning to use (based on the configs).
If it is of type `database`, it will create your `jobs` migration file when running the migrate command

`if(Config::get('queue.default') == 'database'){`

(refer to `app/Ship/Migrations/` folder for more details).

*More queue support and features are coming to apiato in the future releases.*

## Beanstalkd

In order to use Beanstalkd as your queue driver, you need to require this package first `"pda/pheanstalk": "^3.1"` in any composer.json file you prefer.
