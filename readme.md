# Coding test - Internship at UVI Play - Napoleon Sebastien - One million books

The goal is to display smoothly a list of 1.000.000 books on a website.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development only.

### Prerequisites

What things you need to install the software and how to install them

```
You will need Composer and Php already on your computer.
```

### Installing


```
Git clone the repository or download it.
```

```
Run composer install command
```

```
Run php bin/console doctrine:fixtures:load and move the data.json file created at the root to public/data/ 
```

```
Run php bin/console server:run
```

```
You can then go to the http://127.0.0.1:8000/books page and here is my project.
```

```
In case the css isn't build, or you wanted to change it, just modify the assets/css/app.scss and then run the command yarn encore dev 
```
## Built With

* [Symfony](https://symfony.com/doc/current/index.html#gsc.tab=0) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Authors

* **Napoleon Sebastien** - *My project* 

## Acknowledgments

* Page is loading under 10 seconds
* I inspired myself with the twitter style for loading the components, not as a unique list to load entirely, but with little part of the list, loaded when user scroll down.
* Have fun while visiting my project, I hope this will fit with your expectations.