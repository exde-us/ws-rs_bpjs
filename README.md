# API-WS-BPJS_RS

A simple library to encode and decode JSON Web Tokens (JWT) in PHP, conforming to [RFC 7519](https://tools.ietf.org/html/rfc7519).

Dibuat khusus untuk BPJS API Caller terhadap API Webservice Rumah Sakit

Edit file config dahulu (file: database/config.php):
```php
<?php
// MY SECRET KEY
$KEY                        = 'KODE_UNIK';

// Generate expire token
$expiretime                 = strtotime('+15 minutes'); // silahkan ganti berapa lama expire tokennya

// Host BPJS
$HOST_BPJS                  = 'https://bpjs-kesehatan.go.id/'; // silahkan sesuaikan dengan host API Caller

// Database
$MYSQL_HOST		    = 'localhost';  // IP atau localhost
$MYSQL_PORT		    = '3306';       // MySQL Port
$MYSQL_USER		    = 'root';       // MySQL Username
$MYSQL_PASS		    = 'xzxzxzxz';   // MySQL Password
$MYSQL_DB		    = 'ws-rs_bpjs'; // MySQL Database

?>
```

# Firebase JWT
Menggunakan firebase jwt yang bisa dilihat melalui: [firebase/php-jwt](https://github.com/firebase/php-jwt).

# License
Silahkan lihat disini: [Apache License 2.0](https://github.com/exde-us/API-WS-BPJS_RS/blob/master/LICENSE)
