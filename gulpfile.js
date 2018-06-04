const gulp          = require('gulp');
const sass          = require('gulp-sass');
const gutil         = require('gulp-util');
const watch         = require('gulp-watch');
const imagemin      = require('gulp-imagemin');
const minify        = require('gulp-minify');
const plumber       = require('gulp-plumber');
const autoprefixer  = require('gulp-autoprefixer');

/* INTRO MESSAGE */
gulp.task('intro', function() {
    gutil.log(gutil.colors.blue('Designo7 website v2.0'));
    gutil.log(gutil.colors.green('Gulp task started succesfully'));
});

/* WATCH */
gulp.task( 'watch', function ()
{
    /* Logs a line in the terminal */
    gutil.log(gutil.colors.red('Watching...'));
    
    /* Watches the sass files and runs the 'sass' function afterwards */
    gulp.watch( 'gulp-resources/sass/*.scss', ['sass']);
    gulp.watch( 'gulp-resources/sass/components/*.scss', ['sass']);
    
    /* Watches the image files and runs the 'images' function afterwards */
    gulp.watch( 'gulp-resources/img/*.*', ['images']);
    
    /* Watches the javascript files and runs the 'js' function afterwards */
    gulp.watch( 'gulp-resources/js/*.js', ['js']);
});

/* SASS */
gulp.task('sass', function () {
    return gulp.src('gulp-resources/sass/*.scss')
    
        /* Prevent pipe breaking caused by errors */
        .pipe(plumber())
    
        /* Compile the sass, able to compress the file */
        .pipe(sass(/*{outputStyle: 'compressed'}*/).on('error', sass.logError))
    
        /* Stop the plumbing */
        .pipe(plumber.stop())
    
        /* Write the css to the 'css' folder */
        .pipe(gulp.dest('css/'))
});

/* CSS-PREFIX */
gulp.task('css-prefix', function () {
    return gulp.src('css/*.css')
        .pipe(plumber())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(plumber.stop())
        .pipe(gulp.dest('css/'))
});

/* IMAGE COMPRESS */
gulp.task('images', ['imagesDefault', 'imagesMembers', 'imagesCases'], function(){
    gutil.log(gutil.colors.red('Compressing images'));
});

gulp.task('imagesDefault', () =>
    gulp.src('gulp-resources/img/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/'))
);

gulp.task('imagesMembers', () =>
    gulp.src('gulp-resources/img/members/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/members/'))
);

gulp.task('imagesCases', () =>
    gulp.src('gulp-resources/img/cases/*')
        .pipe(plumber())
        .pipe(imagemin())
        .pipe(plumber.stop())
        .pipe(gulp.dest('img/cases/'))
);
/* Als er afbeeldingen in mappen komen, moeten we ervoor zorgen dat deze ook worden verkleind! */

/* COMPRESS JS */
gulp.task('js', function() {
    gutil.log(gutil.colors.red('Compressing js'));
    gulp.src('gulp-resources/js/*.js')
    .pipe(plumber())
    .pipe(minify())
    .pipe(gulp.dest('js/'))
});

/* DEFAULT: GULP */
gulp.task('default', ['intro', 'sass','css-prefix', 'js', 'images', 'watch']);