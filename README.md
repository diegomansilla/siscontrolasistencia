
<h1 align="center"><b>Sistema de Control de Asistencia con Framework Laravel V10, Bases de datos MySQL y Frontend con AdminLTE y Bootstrap</b></h1>
<p>Este sistema tiene como fin el capturar la asistencia tomada por un secretario/a con el fin de catalogar la periodicidad de asistencia de sus fieles. Puede adaptarse a cualquier necesidad que el cliente requiera ya que trabaja de manera modular.</p>
<p>A continuación dejo los módulos creados, submenus de cada uno, función y futuras mejoras</p>
<p>
    <li>
        Usuarios: Módulo exclusivo de usuarios donde podemos cargar nuevos usuarios o listarlos
        <ul>
            <li>
                Nuevo Usuario
            </li>
            <li>
                Listado de Usuarios
            </li>
        </ul>
    </li>
</p>
<p>
    <li>
        Miembros: Módulo exclusivo de miembros donde podemos cargar nuevos miembros o listarlos
        <ul>
            <li>
                Nuevo Miembro
            </li>
            <li>
                Listado de Miembros
            </li>
        </ul>
    </li>
</p>

<p>
    <li>
        Ministerios: Módulo exclusivo de ministerios donde podemos cargar nuevos ministerios o listarlos
        <ul>
            <li>
                Nuevo Ministerio
            </li>
            <li>
                Listado de Ministerios
            </li>
        </ul>
    </li>
</p>

<p>
    <li>
        Asistencias: Módulo exclusivo de asistencias donde podemos cargar nuevas asistencias de los usuarios o listarlas
        <ul>
            <li>
                Nueva Asistencia
            </li>
            <li>
                Listado de Asistencias
            </li>
        </ul>
    </li>
</p>
<p>
    <li>
        Reportes
        <ul>
            <li>
                Asistencia: Módulo exclusivo de asistencias donde podemos generar reportes en formato <b>PDF</b> para compartir
            </li>
            <li>
                Miembros: Módulo exclusivo de miembros donde podemos generar reportes en formato <b>PDF</b> para compartir
            </li>
        </ul>
    </li>   
</p>
 
<p>
    Por el momento cuenta con dos tipos de usuarios:
    <li>
        Administrador: Acceso total al sistema
    </li>
    <li>
        Secretario/a: Acceso a la asistencias y reportes
    </li>
</p>
<p><b>En un documento aparte se mostrarán las capturas de cada módulo (todavía en desarrollo)</b></p>
<p>Su dashboard principal cuenta con vistas de cantidades de registros cargados por módulo</p>
<p>Se está trabajando en un script para cargar los usuarios principales en sistema para poder ejecutar sin problemas</p>
--------------------------------------------------------------------------------------------------------------------------------------------------------------
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
