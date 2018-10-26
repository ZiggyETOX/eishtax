

/*global -$ */
'use strict';
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');

// Error notifications
var reportError = function(error) {
  $.notify({
    title: 'Gulp Task Error',
    message: 'Check the console.'
  }).write(error);
  console.log(error.toString());
  this.emit('end');
}

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/style.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("css"))
        .pipe(sass({ outputStyle: 'compressed' }))
        // .pipe(minifyCss())
        .pipe(browserSync.stream());
});
// Sass processing
// gulp.task('sass', function() {
//   return gulp.src('scss/**/*.scss')
//       .pipe($.sourcemaps.init())
//       // Convert sass into css
//       .pipe($.sass({
//         outputStyle: 'nested', // libsass doesn't support expanded yet
//         precision: 10
//       }))
//       // Show errors
//       .on('error', reportError)
//       // Autoprefix properties
//       .pipe($.autoprefixer({
//         browsers: ['last 2 versions']
//       }))
//       // Write sourcemaps
//       // .pipe($.sourcemaps.write())
//       // Save css
//       .pipe(gulp.dest('css'))
//       .pipe(browserSync.reload({
//         stream: true
//       }));
// });

// process JS files and return the stream.
gulp.task('js', function () {
  return gulp.src('scripts/**/*.js')
      .pipe(gulp.dest('scripts'));
});

// Optimize Images
gulp.task('images', function() {
  return gulp.src('images/**/*')
      .pipe($.imagemin({
        progressive: true,
        interlaced: true,
        svgoPlugins: [{
          cleanupIDs: false
        }]
      }))
      .pipe(gulp.dest('images'));
});

// JS hint
gulp.task('jshint', function() {
  return gulp.src('scripts/*.js')
      .pipe(reload({
        stream: true,
        once: true
      }))
      .pipe($.jshint())
      .pipe($.jshint.reporter('jshint-stylish'))
      .pipe($.notify({
        title: "JS Hint",
        message: "JS Hint says all is good.",
        onLast: true
      }));
});

// Beautify JS
gulp.task('beautify', function() {
  gulp.src('scripts/*.js')
      .pipe($.beautify({indentSize: 2}))
      .pipe(gulp.dest('scripts'))
      .pipe($.notify({
        title: "JS Beautified",
        message: "JS files in the theme have been beautified.",
        onLast: true
      }));
});

// Compress JS
gulp.task('compress', function() {
  return gulp.src('scripts/*.js')
      .pipe($.sourcemaps.init())
      .pipe($.uglify())
      .pipe($.sourcemaps.write())
      .pipe(gulp.dest('scripts'))
      .pipe($.notify({
        title: "JS Minified",
        message: "JS files in the theme have been minified.",
        onLast: true
      }));
});


// BrowserSync
gulp.task('browser-sync', function() {
  //watch files
  var files = [
    'scss/*.scss',
    'images/**/*',
    'templates/**/*.twig'
  ];
  //initialize browsersync
  browserSync.init(files, {
    proxy: "http://mysite.dev" // BrowserSync proxy, change to match your local environment
  });
});


// Default task to be run with `gulp`
gulp.task('watch', ['sass', 'browser-sync'], function() {
  gulp.watch("scss/**/*.scss", ['sass']);
  gulp.watch("scripts/**/*.js", ['js']);
});



// var gulp = require('gulp');
// var browserSync = require('browser-sync').create();
// var sass = require('gulp-sass');
// var concat = require("gulp-concat");
// var minifyCss = require("gulp-minify-css");
// var uglify = require("gulp-uglify");

// // Compile sass into CSS & auto-inject into browsers
// gulp.task('sass', function() {
//     return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/style.scss'])
//         .pipe(sass().on('error', sass.logError))
//         .pipe(gulp.dest("css"))
//         .pipe(sass({ outputStyle: 'compressed' }))
//         // .pipe(minifyCss())
//         .pipe(browserSync.stream());
// });

// // Move the javascript files into our js folder
// gulp.task('js', function() {
//     return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
//         .pipe(gulp.dest("js"))
//         .pipe(browserSync.stream());
// });

// // // Static Server + watching scss/html files
// // gulp.task('serve', ['sass'], function() {

// //     browserSync.init({
// //         proxy: "http://yourdomain.com",
// //     });

// //     gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/*.scss'], ['sass']);
// //     //    gulp.watch("src/*.html").on('change', browserSync.reload);
// // });

// // Static Server + watching scss/html files
// gulp.task('watch', function() {
//     browserSync.init({
//         files: [
//             'css/**/*.css',
//             'templates/**/*.twig',
//             // 'images/optimized/**/*.{png,jpg,gif,svg}',
//             // 'js/build/**/*.js',
//             '*.theme'
//         ],
//         proxy: "http://eishtax.local"//"http://www.rogerwilco.dd:8083"
//     });
//     gulp.watch(paths.sassSrc, ['sass']);
//     //gulp.watch(paths.jsSrc, ['js']).on('change', bs.reload);
// });

// gulp.task('default', ['js', 'sass', 'watch']);