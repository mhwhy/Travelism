<h1 align="center">Selamat datang di Travelism App</h1>

## Apa itu Travelism?

Web Travel yang dibuat oleh <a href="https://github.com/mhwhy/Travelism.git"> Oceanic Team </a>. **Travelism adalah Website untuk pemesanan ticket dengan mudah melalui website.**

## Fitur apa saja yang tersedia di Travelism?

-   Halaman Tour
-   Autentikasi Admin
-   User & CRUD
-   Rute & CRUD
-   Transportasi & CRUD
-   Category & CRUD
-   Pemesanan Ticket
-   Dan lain-lain

## Release Date

**Release date : 04 12 2022**

> Travel merupakan project open source yang dibuat oleh Oceanic Team(myteam) dan telah saya remake. Kalian dapat download / fork / clone. Cukup beri stars di project ini agar saya menjadi semangat. Terima kasih!

---

## Default Account for testing

**Admin Default Account**

-   username: admin
-   Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/mhwhy/Travelism.git
cd travelism
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=my_travel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini sudah terselesaikan, namun banyak fitur yang kalian dapat tambahkan, silahkan berkontribusi yaa!**

## License

-   Copyright © 2022 Oceanic Team.
-   **Ticket is open-sourced software licensed under the MIT license.**
