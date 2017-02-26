'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css'));
});
 
gulp.task('default', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});