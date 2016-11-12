/**
 * Created by minhman.tran on 11/17/2015.
 */
var gulp = require('gulp');
var compass = require('gulp-compass');
var cssnano = require('gulp-cssnano');
var useref = require('gulp-useref');
var gulpif = require('gulp-if');
var uglify = require('gulp-uglify');

var imagemin = require('gulp-imagemin');

var svgmin = require('gulp-svgmin');

var fontmin = require('gulp-fontmin');

var rimraf = require('gulp-rimraf');

var include = require('gulp-html-tag-include');

var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('build', ['html-include', 'compass'], function(){
    //gulp.start(['fonts', 'images', 'svgmin', 'html']);
    gulp.start(['html']);
});

gulp.task('default', ['clean'], function(){
    gulp.start('build');
});

gulp.task('svgmin', function () {
    return gulp.src('app/svg/*.svg')
        .pipe(svgmin())
        .pipe(gulp.dest('wordpress/wp-content/themes/ability/assets/svg'));
});

gulp.task('compass', function() {
    gulp.src('app/sass/**/*.scss')
        .pipe(compass({
            config_file: './config.rb',
            css: 'app/css',
            sass: 'app/sass',
            comments: true,
            style: 'expanded'
        }))
        .pipe(browserSync.stream());
});

gulp.task('images', function(){
    gulp.src(['app/images/**/*'])
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{
                removeViewBox: false,
                cleanupIDs: false
            }]
        }))
        .pipe(gulp.dest('wordpress/wp-content/themes/ability/assets/images'));
});

gulp.task('html', function() {
    return gulp.src(['.tmp/*.html'])
        .pipe(useref({searchPath: ['app', '.']}))
        .pipe(gulpif('*.min.js', uglify()))
        .pipe(gulpif('*.min.css', cssnano({ zindex: false })))
        .pipe(gulp.dest('wordpress/wp-content/themes/ability/assets/'));
});

gulp.task('fonts', function() {
    return gulp.src([
        'app/fonts/*.ttf'
    ]).pipe(fontmin())
        .pipe(gulp.dest('.tmp/fonts'))
        .pipe(gulp.dest('wordpress/wp-content/themes/ability/assets/fonts'));
});

gulp.task('html-include', function() {
    return gulp.src('app/*.html')
        .pipe(include())
        .pipe(gulp.dest('.tmp/'));
});

// watch Sass files for changes, run the Sass preprocessor with the 'sass' task and reload
gulp.task('serve', ['html-include', 'fonts', 'compass'], function() {
    browserSync({
        port: 7000,
        server: {
            baseDir: ['.tmp', 'app'],
            routes: {
                '/bower': 'bower'
            }
        }
    });

    gulp.watch([
        'app/sass/**/*.scss'
    ], ['compass']);
    gulp.watch([
        'app/**/*.html'
    ], ['html-include']);

    gulp.watch([
        './**/*.html',
        'sass/**/*.scss',
        'js/*.js',
        'images/**/*',
        'svg/*.svg'
    ], {cwd: 'app'}, reload);
});

gulp.task('clean', function() {
    return gulp.src(['wordpress/wp-content/themes/ability/assets/*'], { read: true }) //much faster
        .pipe(rimraf({
            force: true
        }));
});