start: npm submodules
	node node_modules/stylus/bin/stylus -w -c styles/styles.styl --out css

build: npm submodules
	node node_modules/stylus/bin/stylus -c styles/styles.styl --out css
	node js/vendor/r.js -o name=main out=js/main.build.js baseUrl=js

npm:
	npm install --quiet --production

submodules:
	git submodule init
	git submodule update