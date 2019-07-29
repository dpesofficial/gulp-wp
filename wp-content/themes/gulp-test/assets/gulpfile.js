const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');

//compile sass into css
function style(){
    //Source sass file
    return gulp.src(['./scss/**/*.scss'])

    //intitialize soucemaps
     .pipe(sourcemaps.init())

    //pass sass to compiler
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))

    //add autoprefixer 
    .pipe(autoprefixer({}))

    //update sourcemaps file
    .pipe(sourcemaps.write('.'))

    //write to css file
    .pipe(gulp.dest('./css'))

    //stream changes
    .pipe(browserSync.stream());
}

function watch(){
    browserSync.init({
            proxy: 'http://localhost/gulp-test/'
    });
    gulp.watch('./scss/**/*.scss', style);
    gulp.watch('../*.php').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;

