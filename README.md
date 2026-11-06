# Backend-opdrachten: MVC in PHP

Backend-opdrachten van MBO Utrecht (Software Developer niveau 4). Een webapplicatie in pure PHP, gebouwd op een eigen MVC-framework zonder externe libraries.

## Wat zit erin

- Een eigen router (`Core.php`) die een URL koppelt aan een controller en methode
- Een `Database`-klasse met PDO en prepared statements
- CRUD (overzicht, toevoegen, wijzigen, verwijderen) voor vier onderdelen: horloges, smartphones, sneakers en zangeressen
- Een SQL-createscript om de database op te bouwen: [`app/db/createscript.sql`](app/db/createscript.sql)

## Structuur

```
app/
  controllers/   één controller per onderdeel
  Models/        databasequeries per onderdeel
  views/         de pagina's, met gedeelde header en footer
  libraries/     Core (router), Database (PDO), BaseController
  config/        databasegegevens en URLROOT
public/          index.php, css en afbeeldingen
```

## Starten

1. Importeer `app/db/createscript.sql` in MySQL.
2. Vul je eigen databasegegevens en `URLROOT` in `app/config/config.php` in.
3. Laat een virtual host (bijvoorbeeld in XAMPP of Laragon) naar de map `public` wijzen.

Stack: PHP 8, MySQL, PDO, HTML, CSS.
