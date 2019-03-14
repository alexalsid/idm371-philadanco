//packages
const gulp = require('gulp');
const sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
//const sourcemaps = require('gulp-sourcemaps');
//const uglify = require('gulp-uglify');

//const pump = require('pump');



gulp.task('sass', function () {
    gulp.src('alpha/src/scss/home.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/d2.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/donate.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/education.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/meet-philadanco.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/events.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    gulp.src('alpha/src/scss/about.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());

    return gulp.src('alpha/src/scss/main.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'))
        .pipe(browserSync.stream());
});


gulp.task("move", function () { 

    gulp.src('alpha/src/scss/home.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/d2.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/donate.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/education.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/meet-philadanco.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/events.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/about.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    gulp.src('alpha/src/scss/psda.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

    return gulp.src('alpha/src/scss/main.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

 

} );



gulp.task('watch', function () {
    gulp.watch('alpha/src/scss/**/*.scss', gulp.series('sass'));
  
});











// minify js

// compile sass move to build

// move processed files in build to theme dist folder





// minify js

// compile sass move to build

// move processed files in build to theme dist folder