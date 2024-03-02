![visitor badge](https://visitor-badge.laobi.icu/badge?page_id=LUDOang.visitor-badge)

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/atavada/sibatik">
    <img src="https://github.com/atavada/sibatik/blob/main/public/tenunmulya.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">SIBATIK | Tenun Mulya</h3>

  <p align="center">
    Batik tenun kediri
    <br />
    <a href="https://github.com/atavada/sibatik"><strong>Explore the docs »</strong></a>
    <br />
  </p>
</div>

<!-- ABOUT THE PROJECT -->

## About The Project

Feature:

-   Profile
-   Catalog
-   Detail Product
-   Contact

### Built With

-   [![Laravel][Laravel.com]][Laravel-url]
-   [![Bootstrap][Bootstrap.com]][Bootstrap-url]
-   [![JQuery][JQuery.com]][JQuery-url]

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running follow these simple example steps.

### Installation

1. Get a Google OAuth API Key at [https://console.cloud.google.com/apis/credentials/oauthclient]
2. Get a Google Gemini API Key at [https://aistudio.google.com/app/apikey] --optional
3. Clone the repo
    ```sh
    git clone https://github.com/atavada/sibatik.git
    ```
4. Go to project folder
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
7. Copy .env.example:
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
11. Setup done you can run this command
    ```sh
    php artisan serve
    ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

## License

This project is licensed under the GPL-3.0 License seethe [LICENSE](LICENSE) file for details.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com
