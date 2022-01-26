# GitHub hosted-runnerにインストールされているPHP

- Ubuntu20.04だとPHP7.4/8.0/8.1がインストールされている  
  https://github.com/actions/virtual-environments/blob/main/images/linux/Ubuntu2004-Readme.md#php
- phpコマンドだと8.1が動く
- /usr/bin以下に各バージョンのPHPがある
  ```bash
  $ ls -al /usr/bin
  --- 省略 ---
  lrwxrwxrwx  1 root        root               21 Jan 11 22:02 php -> /etc/alternatives/php
  lrwxrwxrwx  1 root        root               25 Jan 11 22:02 php-cgi -> /etc/alternatives/php-cgi
  -rwxr-xr-x  1 root        root          4679272 Dec 20 21:28 php-cgi7.4
  -rwxr-xr-x  1 root        root          4839232 Dec 20 21:22 php-cgi8.0
  -rwxr-xr-x  1 root        root          5400568 Dec 31 07:26 php-cgi8.1
  lrwxrwxrwx  1 root        root               28 Jan 11 22:02 php-config -> /etc/alternatives/php-config
  -rwxr-xr-x  1 root        root             4410 Dec 20 21:28 php-config7.4
  -rwxr-xr-x  1 root        root             4409 Dec 20 21:22 php-config8.0
  -rwxr-xr-x  1 root        root             4407 Dec 31 07:26 php-config8.1
  -rwxr-xr-x  1 root        root          4794296 Dec 20 21:28 php7.4
  -rwxr-xr-x  1 root        root          4970672 Dec 20 21:22 php8.0
  -rwxr-xr-x  1 root        root          5523816 Dec 31 07:26 php8.1
  lrwxrwxrwx  1 root        root               24 Jan 11 22:02 phpdbg -> /etc/alternatives/phpdbg
  -rwxr-xr-x  1 root        root          4921568 Dec 20 21:28 phpdbg7.4
  -rwxr-xr-x  1 root        root          5081528 Dec 20 21:22 phpdbg8.0
  -rwxr-xr-x  1 root        root          5589520 Dec 31 07:26 phpdbg8.1
  lrwxrwxrwx  1 root        root               24 Jan 11 22:02 phpize -> /etc/alternatives/phpize
  -rwxr-xr-x  1 root        root             4928 Dec 20 21:28 phpize7.4
  -rwxr-xr-x  1 root        root             4944 Dec 20 21:22 phpize8.0
  -rwxr-xr-x  1 root        root             4944 Dec 31 07:26 phpize8.1
  --- 省略 ---
  ```
- インストールされているPHPに組み込まれているモジュール
  ```text
  [PHP Modules]
  amqp
  apcu
  bcmath
  bz2
  calendar
  Core
  ctype
  curl
  date
  dba
  dom
  enchant
  exif
  FFI
  fileinfo
  filter
  ftp
  gd
  gettext
  gmp
  hash
  iconv
  igbinary
  imagick
  imap
  intl
  json
  ldap
  libxml
  mbstring
  memcache
  memcached
  mongodb
  msgpack
  mysqli
  mysqlnd
  odbc
  openssl
  pcntl
  pcre
  PDO
  pdo_dblib
  PDO_Firebird
  pdo_mysql
  PDO_ODBC
  pdo_pgsql
  pdo_sqlite
  pgsql
  Phar
  posix
  pspell
  readline
  redis
  Reflection
  session
  shmop
  SimpleXML
  snmp
  soap
  sockets
  sodium
  SPL
  sqlite3
  standard
  sysvmsg
  sysvsem
  sysvshm
  tidy
  tokenizer
  xdebug
  xml
  xmlreader
  xmlrpc
  xmlwriter
  xsl
  yaml
  Zend OPcache
  zip
  zlib
  zmq
  
  [Zend Modules]
  Xdebug
  Zend OPcache
  ```
