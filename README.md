= SSL with the php-amqplib

== Install

Install composer:

```
$ curl -s https://getcomposer.org/installer | php
```

Run composer: 

```
$ php composer.phar install
```

Run the the app: 

```
$ export CLOUDAMQP_URL=amqps://user:pass@host.cloudamqp.com/vhost
$ php index.php
```

