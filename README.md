<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/atavada/sibatik">
    <img src="https://github.com/atavada/sibatik/blob/main/public/tenunmulya.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">SIBATIK | Tenun Mulya</h3>

  <p align="center">
    Sistem Informasi Batik Tenun Ikat Kediri
    <br />
    <a href="https://github.com/atavada/sibatik"><strong>Explore the docs »</strong></a>
    <br />
  </p>
</div>

<!-- ABOUT THE PROJECT -->

## About The Project
<p align="justify">
SIBATIK, Sistem Informasi Batik Tenun Ikat Kediri merupakan inovasi digital berupa website yang ditujukan untuk membantu pelaku UMKM lokal sebagai bentuk adaptasi dunia digital dalam hal promosi. SIBATIK dilengkapi dengan fitur-fitur interaktif, seperti katalog ragam kain dan barang hasil produksi Tenun Mulya dengan memperlihatkan corak dari batik  tenun ikat. Selain itu, terdapat juga fitur belanja online yang diintegrasikan dengan marketplace official mitra sehingga memungkinkan pengguna untuk membeli produk batik tenun ikat 
langsung dari Tenun Mulya. Dalam proses pengembangannya, website SIBATIK didesain dengan konsep yang user-friendly, sehingga pengguna dengan berbagai latar belakang dapat dengan mudah mengakses dan menggunakan semua fitur yang tersedia.
</p>

Feature:
-   Profile
-   Catalog
-   Detail Product
-   Rating
-   Contact
-   Google Auth
-   SIBATIK Chat AI

### Built With

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
[![Laravel][Laravel.com]][Laravel-url]
[![Bootstrap][Bootstrap.com]][Bootstrap-url]
[![TailwindCSS][TailwindCSS.com]][TailwindCSS-url]
[![JQuery][JQuery.com]][JQuery-url]
[![NPM][NPM.com]][NPM-url]
[![NodeJS][NodeJS.com]][NodeJS-url]
[![Vite][Vite.com]][Vite-url]
[![MySQL][MySQL.com]][MySQL-url]

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running SIBATIK follow these steps.

### Installation

1. Get a Google OAuth API Key at [https://console.cloud.google.com/apis/credentials/oauthclient]
2. Get a Google Gemini API Key at [https://aistudio.google.com/app/apikey] --optional
3. Clone SIBATIK repo
    ```sh
    git clone https://github.com/atavada/sibatik.git
    ```
4. Go to project directory
    ```sh
    cd sibatik
    ```
5. Install composer packages
    ```sh
    composer install
    ```
6. Install NPM packages
    ```sh
    npm install
    ```
7. Copy `.env.example`
    ```sh
    cp .env.example .env
    ```
8. Enter your API in `.env`
    ```js
    GEMINI_API_KEY = "ENTER YOUR API";
    GOOGLE_CLIENT_ID = "ENTER YOUR API";
    GOOGLE_CLIENT_SECRET = "ENTER YOUR API";
    GOOGLE_REDIRECT_URI = "http://127.0.0.1:8000/login/google/callback";
    ```
9. Run to generate key
    ```sh
    php artisan key:generate
    ```
10. Run database migration
    ```sh
    php artisan migrate
    ```
11. Setup done, you can run localy using this command
    ```sh
    php artisan serve
    ```


<!-- LICENSE -->

## License

This project is licensed under the GPL-3.0 License seethe [LICENSE](LICENSE) file for details.

<!-- MARKDOWN LINKS & IMAGES -->

[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[TailwindCSS.com]: https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white
[TailwindCSS-url]: https://tailwindcss.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
[MySQL.com]: https://img.shields.io/badge/mysql-1C1C1C?style=for-the-badge&logo=mysql&logoColor=white
[MySQL-url]: https://www.mysql.com
[NPM.com]: https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white
[NPM-url]: https://www.npmjs.com
[NodeJS.com]: https://img.shields.io/badge/node.js-6DA55F?style=for-the-badge&logo=node.js&logoColor=white
[NodeJS-url]: https://nodejs.org
[Vite.com]: https://img.shields.io/badge/vite-%23646CFF.svg?style=for-the-badge&logo=vite&logoColor=white
[Vite-url]: https://vitejs.dev
