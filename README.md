# SIMREDE (Sistema de Simulados em Rede)

## Instalação Testada no Ubuntu 14.04 i386

Execute os seguintes comandos no terminal

## 1 - Instalação de Dependências

* sudo apt-get install git
* sudo add-apt-repository ppa:ondrej/php
* sudo apt-get update
* sudo apt-get install python-software-properties
* sudo apt-get update

## 2 - Instalar Dependências PHP < 5.6

* sudo apt-get -y install php5.6 php5-mysqlnd  php5.6-ext-dom php5.6-xml php5.6-mcrypt php5.6-mbstring php5.6-curl php5.6-cli php5.6-mysql php5.6-gd php5.6-intl php5.6-xsl php5.6-zip

* cd /var/www/html/
* git clone https://github.com/7miguelsilva7/sglab.git

## 3 - Instalar composer

* php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
* php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
* php composer-setup.php
* php -r "unlink('composer-setup.php');"

## 4 - acesse o phpmyadmin http://localhost/phpmyadmin e crie uma base de dados "simrede"
## 5 - ainda no phpmyadmin importe o banco que se encontra na pasta database do projeto

## 6 - Acesse o diretório /opt/lampp/htdocs/simrede e atualize-o:

* composer update

## 7 - Para rodar a aplicação execute o script chamado inicia-PHP-xampp
