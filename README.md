# OHMJ Joomla template

This is a Joomla 3.0+ theme built for the new OHMJ (Orchestre d'Harmonie
Montpellier-Jacou) website.
This is a pretty simple theme, based on boostrap 3, displaying an header, a
content and a footer.

It is still in early stage of development.

It currently bundles

- joomla template
- carousel module, which displays latest featured articles.

## System requirements

- For static website: node.js in a decent version
- For joomla template: add docker and docker-compose

## How to see the static website

- `npm install`
- `gulp`
- Now connect to `http://localhost:8000` with your browser and that's pretty much it :)

## How to setup joomla

- Make sure you have gulp up and runing
- `docker-compose up`: It will starts a joomla instance and a mysql db with
  template and modules directory mounted
- Once ready connect to `http://localhost:8080` to setup you joomla instance
- Discover and install `ohmj` template and `ohmj-carousel` modules
- Activate `ohmj` as default site template
- Now setup your default page as blog-category instead of featured
- Position module `ohmj-carousel` to position `header` only on home page
- Position module `footer` to position `footer`

## Known issues

### Tooling

- Buggy dist refresh, when files are edited. still working on that

### Menus

- No nested menus supported
- Top level menus links are ignored
