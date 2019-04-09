# Iguane CMS

Content Management System for publishing web content. Iguane is written in PHP, is responsive, uses object-oriented-programming techniques and stores data in a MySQL database. Designed with Bootstrap and FontAwesome.

### Developed by Gauthier Staehler

Iguane is a study project at UHA 4.0 Mulhouse developed over a six-week period.

### Installation :

```sh
- Clone the repository into your local folder

- Import the sql file into phpMyAdmin

- php -S localhost:8000
```

### Features

  - Available Elements : Navbar, Title, Footer, Text, Background Image, Image, Youtube Video, Custom HTML Code
  - Navbar, Title, Footer and Background Image are unique and can not be created more than once
  - When creating a page, the Title element of the new page is generated from its name
  - Navbar, Footer and Background Image are the same on every page
  - Three differents Layouts : Main, Aside Right, Bottom
  - Navbar, Title, Footer and Background Image do not need a Layout because they are always in the same location
  - Select a Layout, a Page and the content of your new Element
  - Delete an Element
  - Delete all Elements
  - Add a Page
  - Delete a Page (The elements of the page are also deleted)
  - Change Theme (Text Color)
  - Two different Themes : Black and White
  - Show or Remove the Grid, Grid is a border around Layouts for better visibility
