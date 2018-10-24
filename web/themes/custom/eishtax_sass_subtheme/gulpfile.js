var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var concat = require("gulp-concat");
var minifyCss = require("gulp-minify-css");
var uglify = require("gulp-uglify");

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/style.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest("css"))
        .pipe(sass({ outputStyle: 'compressed' }))
        // .pipe(minifyCss())
        .pipe(browserSync.stream());
});

// Move the javascript files into our js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
        .pipe(gulp.dest("js"))
        .pipe(browserSync.stream());
});

// // Static Server + watching scss/html files
// gulp.task('serve', ['sass'], function() {

//     browserSync.init({
//         proxy: "http://yourdomain.com",
//     });

//     gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'scss/*.scss'], ['sass']);
//     //    gulp.watch("src/*.html").on('change', browserSync.reload);
// });

// Static Server + watching scss/html files
gulp.task('watch', function() {
    browserSync.init({
        files: [
            'css/**/*.css',
            'templates/**/*.twig',
            // 'images/optimized/**/*.{png,jpg,gif,svg}',
            // 'js/build/**/*.js',
            '*.theme'
        ],
        proxy: "http://eishtax.local"//"http://www.rogerwilco.dd:8083"
    });
    gulp.watch(paths.sassSrc, ['sass']);
    //gulp.watch(paths.jsSrc, ['js']).on('change', bs.reload);
});

gulp.task('default', ['js', 'sass', 'watch']);