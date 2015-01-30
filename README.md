futureminded
============

# Get started with development

### Install dependencies

    $ make npm

### Run stylus compiler and watch filetree

    $ make start

### Make build of CSS and Javascript

    $ npm install requirejs -g
    $ make build

## Deploying changes

#### Automagically (production only)
  * Push to master branch for staging, OR
  * [Create a pull request against production branch](https://github.com/6wunderkinder/www.wunderlist.com/compare/production...master?expand=1)

 Once the code is merged, the automatic deployment would pick up the changes & deploy everywhere in 10 minutes time.
