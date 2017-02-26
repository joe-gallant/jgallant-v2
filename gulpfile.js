'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

 
gulp.task('scripts', function() {
	return gulp.src(['js/skrollr.min.js', 'js/prism.js', 'js/app.js'])  
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('js/'));
});

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css'));
});
 
gulp.task('default', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('js/*.js', ['scripts']);
});