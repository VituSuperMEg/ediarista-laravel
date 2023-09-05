## Projeto sistema adminstrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da treinaweb

### Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/VituSuperMEg/ediarista-laravel.git
```

##### Instalar as depencências

```
 composer install
```
Ou em ambinete de desenvolvimento :

```
composer update
```

##### Criar o arquivo de configurações de ambiente ( .env )

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura do banco de dados

```
 php artisan migrate
```

#### Iniciar o servidor em desenvolvimento

```
php artisan serve
```
