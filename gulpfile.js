var gulp = require('gulp')
var sass = require('gulp-sass')
var header = require('gulp-header')
var cleanCSS = require('gulp-clean-css')
var rename = require("gulp-rename")
var uglify = require('gulp-uglify')
var copy = require('copy')
var del = require('del')
var zipper = require('gulp-zip')
var pkg = require('./package.json')

// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function(done) {
    // Bootstrap
    gulp.src([
        './node_modules/bootstrap/dist/**/*',
        '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
        '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
    .pipe(gulp.dest('./vendor/bootstrap'))

    // Font Awesome
    gulp.src([
        './node_modules/font-awesome/**/*',
        '!./node_modules/font-awesome/{less,less/*}',
        '!./node_modules/font-awesome/{scss,scss/*}',
        '!./node_modules/font-awesome/.*',
        '!./node_modules/font-awesome/*.{txt,json,md}'
    ])
    .pipe(gulp.dest('./vendor/font-awesome'))

    // jQuery
    gulp.src([
        './node_modules/jquery/dist/*',
        '!./node_modules/jquery/dist/core.js'
    ])
    .pipe(gulp.dest('./vendor/jquery'))

    // Slick Carousel
    gulp.src([
        './node_modules/slick-carousel/slick/**/*'
    ])
    .pipe(gulp.dest('./vendor/slick-carousel'))

    done()
})

// Compile SCSS
gulp.task('css:compile', function() {
    return gulp.src('./scss/**/*.scss')
        .pipe(sass.sync({
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(gulp.dest('./'))
})

// Minify CSS
gulp.task('css:minify', gulp.series(['css:compile'], function() {
    return gulp.src([
            './*.css'
        ])
        .pipe(cleanCSS())
        .pipe(gulp.dest('./'))
}))

// CSS
gulp.task('css', gulp.series(['css:compile', 'css:minify']))

// Minify JavaScript
gulp.task('js:minify', function() {
    return gulp.src([
            './js/*.js'
        ])
        .pipe(uglify())
        .pipe(gulp.dest('./'))
})

// JS
gulp.task('js', gulp.series(['js:minify']))

// Compile task, basically the default do-it-all
gulp.task('compile', gulp.parallel(['css', 'js', 'vendor']))

// Dev task
gulp.task('dev', gulp.series(['css', 'js'], function() {
    gulp.watch('./scss/*.scss', gulp.parallel('css'))
    gulp.watch('./js/*.js', gulp.parallel('js'))
}))

// Single out files that are non-development files
gulp.task('export', gulp.series(['compile'], function(done) {
    del(['./export/*', '!./export/.gitignore'])
    copy([
        './archive.php',
        './footer.php',
        './functions.php',
        './header.php',
        './index.php',
        './comments.php',
        './404.php',
        './*.js',
        './*.css',
        './fonts/**',
        './functions/**',
        './images/**',
        './parts/**',
        './vendor/**',
        '!./gulpfile.js'
    ], './export', function(err, file) {})

    done()
}))
