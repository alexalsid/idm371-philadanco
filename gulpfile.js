//packages
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const stripDebug = require('gulp-strip-debug-arbitrary');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync');
const reload = browserSync.reload;
const pump = require('pump');


gulp.task('default', ['styles-refresh', 'html', 'watch']);

// compile sass but in alpha and wordpress locations

gulp.task('styles-refresh', () => {
    return gulp.src('./alpha/src/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./alpha/build/css/'))
        .pipe(gulp.dest('./wordpress/wp-content/themes/philadanco/dist/css/'))
        .pipe(browserSync.stream());

});

//html 

gulp.task('html', () => {
    return gulp.src('./src/*.html')
        .pipe(gulp.dest('./build/'));
});

//minify js

gulp.task('compress', function (cb) {
    pump([
        gulp.src('./alpha/src/js/*.js'),
        uglify(),
        gulp.dest('./alpha/build/js/')
    ],
        cb
    );
});

// watch

gulp.task('watch', ['styles-refresh', 'html', 'compress'], () => {

    browserSync.init({

        server: {
            baseDir: 'dist'
        }
    })

    gulp.watch('src/stylus/screen.styl', ['styles-refresh']);



});







// minify js

// compile sass move to build

// move processed files in build to theme dist folder





// minify js

// compile sass move to build

// move processed files in build to theme dist folder