<p>In this article I am going to give you my go-to Gulp setup for compiling SASS. I am currently using Gulp on pretty much every project I work on now, it can be a highly useful tool for front-end devs and I would strongly recommend it!</p>

<p>Be aware that this is not an in-depth <i>getting started</i> guide but merely a quick <em>copy and paste</em> type article!</p>

<p>Please note: this article assumes that you have have a basic understanding of Gulp and already have Node.js and Gulp CLI installed on your machine. If not, have no fear, here is a good article that will get you started - <a href="https://markgoodyear.com/2014/01/getting-started-with-gulp/" target="_blank">https://markgoodyear.com/2014/01/getting-started-with-gulp/</a>. Also I am using npm for my package manager.</p>

<h2>package.json</h2>

<p>This file is the npm configuration file. It includes some details about your project and what packages/dependencies you are using. My default package.json file looks something like this:</p>

<pre class="language-json line-numbers">
<code>{
  "name": "project",
  "version": "1.0.0",
  "description": "",
  "main": "index.js",
  "dependencies": {},
  "devDependencies": {
    "gulp": "^3.9.1",
    "gulp-autoprefixer": "^3.1.1",
    "gulp-rename": "^1.2.2",
    "gulp-sass": "^3.0.0",
    "gulp-sourcemaps": "^2.4.0"
  },
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "author": "",
  "license": "ISC"
}</code>
</pre>

<h2>gulpfile.js</h2>

<p>The gulpfile.js file is where you will define when and what tasks you want Gulp to perform. Here is my very basic gulp file for compiling SASS:</p>

<pre class="language-javascript line-numbers">
<code>'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(rename('style.css'))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
});

gulp.task('default', function () {
  	gulp.watch('sass/**/*.scss', ['sass']);
});</code>
</pre>

<p>So at the top we are requiring the packages/dependencies that were defined in our package.json file. Then there is our SASS task, which performs the following tasks:</p>

<ul>
	<li>Creates a sourcemap</li>
	<li>Compiles and logs any errors</li>
	<li>Renames the output file to style.css</li>
	<li>Adds any autoprefixes to the final CSS file</li>
</ul>

<p>Then at the bottom we have a watcher, which basically watches the sass files and runs the SASS function when any .scss file gets changed.</p>