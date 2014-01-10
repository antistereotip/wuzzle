# Wuzzle [![devDependency status](https://david-dm.org/ws1/wuzzle/dev-status.png?theme=shields.io)](https://david-dm.org/ws1/wuzzle#info=devDependencies)

> Responsive, minimal and customizable grid system

To get started, check out
[the documentation](https://github.com/ws1/wuzzle/wiki).

## Download

* [**ZIP package**](https://github.com/ws1/wuzzle/archive/master.zip)
* **Bower:** `bower install wuzzle`

Wuzzle is also available on
[cdnjs](http://cdnjs.com/libraries/wuzzle/).

## Compile

Wuzzle uses [Grunt](http://gruntjs.com) to compile Less code.

### Dependencies

You need [node.js](http://nodejs.org/download/) to use Grunt.

From the command line:

```bash
$ npm install -g grunt-cli
$ npm install # from root Wuzzle directory
```

When completed, you'll be able to run the various Grunt commands provided from
the command line.

### Available commands

#### Default: `grunt`

Compiles Less files and runs lint test.

#### Compile: `grunt dist`

Compiles Less files.

#### Test: `grunt test`

Lints compiled files.

#### Watch: `grunt watch`

Watches Less files and automatically building and linting them when they're
changed.

## License

MIT &copy; [ws1 team](https://github.com/ws1)