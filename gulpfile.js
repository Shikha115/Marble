const gulp = require('gulp');
const sass = require('gulp-sass');
// const { scripts } = require('../marble/gulpfile'); 
const browserSync = require('browser-sync').create(); 


// compile scss to css
function style(){
    //path of scss file
    return gulp.src('src/scss/*.scss')

    // compilie
    .pipe(sass().on('error', sass.logError))

    // creating a folder which will have css file
    .pipe(gulp.dest('src/compiled_scss'))

    // refresh browser automatically and make changes
    .pipe(browserSync.stream());
}

// watch code changes and according to that make change in website
function watch(){
    browserSync.init({
        server:{
            baseDir:'./'
        }
    });
    gulp.watch('src/scss/*.scss',style);
    gulp.watch('./*.php').on('change', browserSync.reload);
    gulp.watch('src/js/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;