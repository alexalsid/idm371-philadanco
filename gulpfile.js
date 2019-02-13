//packages
const gulp = require('gulp');
const sass = require('gulp-sass');
//const sourcemaps = require('gulp-sourcemaps');
//const uglify = require('gulp-uglify');
//const browserSync = require('browser-sync');
//const pump = require('pump');

gulp.task("default", function () {
    gulp.start("sass")
    .pipe.gulp.start("move");
    
});


gulp.task('sass', function () {
    gulp.src('alpha/src/scss/home.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/d2.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/donate.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/education.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/meet-philadanco.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/events.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    gulp.src('alpha/src/scss/about.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));

    return gulp.src('alpha/src/scss/main.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('alpha/build/css'));
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

    return gulp.src('alpha/src/scss/main.scss')
        .pipe(sass()) // Converts Sass to CSS with gulp-sass
        .pipe(gulp.dest('wordpress/wp-content/themes/philadanco/dist/css'));

 

} );











// minify js

// compile sass move to build

// move processed files in build to theme dist folder





// minify js

// compile sass move to build

// move processed files in build to theme dist folder