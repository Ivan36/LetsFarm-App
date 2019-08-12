'use strict';
 
const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
 
sass.compiler = require('node-sass');
 
gulp.task('sass', function () {
  return gulp.src(['./Admin/sass/**/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
  }))
    .pipe(gulp.dest('./Admin/css'))
    .pipe(browserSync.stream());
});

gulp.task('serve', function() {

  browserSync.init({
      server: ["./","./Admin"]
  });

  gulp.watch("./Admin/sass/**/*.scss", gulp.series('sass'));
  gulp.watch("./Admin/**/*.js").on('change', browserSync.reload);
  gulp.watch("./Admin/*.html").on('change', browserSync.reload);
   gulp.watch("./Admin/*.php").on('change', browserSync.reload);
});
 
gulp.task('default', gulp.series('serve'));