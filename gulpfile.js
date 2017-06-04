'use strict';

const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const maps = require('gulp-sourcemaps');
const del = require('del');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload();


// Clean operation
gulp.task('clean', () =>{
  // Globbing patterns account for .min and .map
  del(['style.css*', 'js/app*.js*', 'app*.js*']);
})


// Compile Sass task
gulp.task('compileSass', () => {
  return gulp.src('src/scss/application.scss')
  .pipe(maps.init())
  .pipe(sass())
  .pipe(concat('scssstyles.css'))
  .pipe(maps.write('.')) // Relative to output directory below
  .pipe(gulp.dest('src/css'));
});


// Concatinate SCSS
gulp.task('concatScss', ['compileSass'], () => {
  return gulp.src([
    // WP css file header
    'src/css/themeheader.css',
    // Bootstrap template (cluster) css files
    'src/css/src/bootstrap.min.css',
    'src/css/src/owl.carousel.css',
    'src/css/src/magnific-popup.css',
    'src/css/src/font-awesome.css',
    // Compiled SASS
    'src/css/scssstyles.css'
  ])
  .pipe(maps.init())
  .pipe(concat('style.css'))
  .pipe(maps.write('.'))
  .pipe(gulp.dest('.'))
});


// Concatinate JS
gulp.task('concatJs', () => {
  return gulp.src([
    // Bootstrap template (cluster) js files
    'src/js/src/jquery.min.js',
    'src/js/src/bootstrap.min.js',
    'src/js/src/jquery.parallax.js',
    'src/js/src/smoothscroll.js',
    'src/js/src/masonry.pkgd.min.js',
    'src/js/src/jquery.fitvids.js',
    'src/js/src/owl.carousel.min.js',
    'src/js/src/jquery.counterup.min.js',
    'src/js/src/waypoints.min.js',
    'src/js/src/jquery.isotope.min.js',
    'src/js/src/jquery.magnific-popup.min.js',
    'src/js/src/scripts.js',
    // My js
    'src/js/myscripts.js',
  ])
  .pipe(maps.init())
  .pipe(concat('app.js'))
  .pipe(maps.write('.'))
  .pipe(gulp.dest('js'))
});


// // Minify scripts
// gulp.task('minifyScripts', ['concatScripts'], () => {
//   return gulp.src('js/app.js')
//   .pipe(uglify())
//   .pipe(rename('app.min.js'))
//   .pipe(gulp.dest('js'));
// });

// just reload
gulp.task('reload', () => {
  browserSync.reload();
})

// Concat scss and reload
gulp.task('sassReload', ['concatScss'], (done) => {
  browserSync.reload();
  done();
})


// Concat js and reload
gulp.task('jsReload', ['concatJs'], (done) => {
  browserSync.reload();
  done();
})


// Watch task
gulp.task('watchFiles', () => {
  gulp.watch(['src/scss/**/*.scss'], ['sassReload']);
  gulp.watch(['src/css/**/*.css'], ['sassReload']);
  gulp.watch(['src/js/**/*.js'], ['jsReload']);
  gulp.watch(['./*.php'], ['reload']);
})


// Start XAMPP proxy server
gulp.task('browser-sync', () => {
  browserSync.init({
    proxy: "localhost/tomkinseyfencingandlandscaping.co.uk",
    online: true,
    notify: false
 });
})


// Default task
gulp.task('default', ['clean'], () => {
  gulp.start('concatJs');
  gulp.start('concatScss');
  gulp.start('watchFiles', ['concatJs', 'concatScss']);
  gulp.start('browser-sync');
});
