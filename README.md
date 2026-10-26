# Dzień Smakuje Lepiej

Landing page stworzony w oparciu o framework Laravel 8 i środowisko Docker.

---

## Technologie

- **PHP**: 8.0 (Apache)
- **Framework**: Laravel 8
- **Baza danych**: MySQL 8.0.23
- **Zarządzanie bazą**: phpMyAdmin 5.1.1
- **Testowanie poczty**: MailCatcher
- **Menedżery pakietów**: Composer 2, npm
- **Budowanie zasobów frontendowych**: Laravel Mix 6 / Node 14
- **Frontend**: Bootstrap 4.5, jQuery 3.5, Sass
- **Konteneryzacja**: Docker & Docker Compose

---

## Uruchomienie projektu

### 1. Wymagania wstępne

- [Docker](https://docs.docker.com/get-docker/) oraz [Docker Compose](https://docs.docker.com/compose/) (zalecana wersja Compose v2)

### 2. Konfiguracja środowiska

Skopiuj przykładowy plik konfiguracyjny:

```bash
cp .env.example .env
```

W razie potrzeby dostosuj zmienne w pliku `.env` (porty, dane dostępowe do bazy danych, nazwa aplikacji itp.).

### 3. Budowanie i start kontenerów

Zbuduj obrazy i uruchom serwisy w tle:

```bash
docker compose up -d --build
```

> [!NOTE]
> Przy pierwszym uruchomieniu kontenera skrypt `entrypoint.sh` automatycznie:
> - Instaluje zależności Composera (`composer install`)
> - Kompiluje zasoby frontendowe (`npm run build`)
> - Czeka na gotowość bazy danych MySQL
> - Generuje klucz aplikacji oraz klucz JWT
> - Wykonuje migracje bazy danych wraz z seedami (`php artisan migrate:fresh --seed`)
> - Tworzy dowiązanie symboliczne do katalogu plików (`public/storage`)

---

## Serwisy i porty

Domyślne mapowanie portów zdefiniowane w pliku `.env`:

| Serwis | Adres / Host | Port | Zmienna środowiskowa |
|---|---|---|---|
| **Aplikacja WWW** | [http://localhost:8130](http://localhost:8130) | `8130` | `DOCKER_HTTPD_PORT` |
| **phpMyAdmin** | [http://localhost:8132](http://localhost:8132) | `8132` | `DOCKER_PHPMYADMIN_PORT` |
| **MailCatcher (Interfejs Web)** | [http://localhost:8138](http://localhost:8138) | `8138` | `DOCKER_MAILCATCHER_WEB` |
| **MailCatcher (Serwer SMTP)** | `localhost` | `8137` | `DOCKER_MAILCATCHER_SMTP` |
| **Baza danych MySQL** | `localhost` | `8131` | `DOCKER_MYSQL_PORT` |

---

## Domyślne dane dostępowe

Zgodnie z plikiem `.env.example`:

- **Konto administratora**:
  - E-mail: `admin@example.com` (`APP_ADMIN_MAIL`)
  - Hasło: `APP_ADMIN_PASS` (domyślnie w `.env.example`: `asd123`)
- **Baza danych MySQL**:
  - Użytkownik: `rh_dsl` (`DB_USERNAME`)
  - Hasło: `rh_dsl` (`DB_PASSWORD`)
  - Nazwa bazy: `rh_dsl` (`DB_DATABASE`)
  - Hasło roota: `root_pass` (`DB_ROOTPASSWORD`)

---

## Przydatne polecenia

### Zarządzanie kontenerami

```bash
# Uruchomienie kontenerów w tle
docker compose up -d

# Zatrzymanie i usunięcie kontenerów
docker compose down

# Podgląd logów aplikacji w czasie rzeczywistym
docker compose logs -f httpd

# Wejście do powłoki bash kontenera aplikacji
docker compose exec httpd bash
```

### Polecenia Laravela i assetów

```bash
# Ręczne wykonanie migracji
docker compose exec httpd php artisan migrate

# Kompilacja zasobów w trybie developerskim
docker compose exec httpd npm run dev

# Automatyczne nasłuchiwanie i przebudowywanie zasobów
docker compose exec httpd npm run watch
```
