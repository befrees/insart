var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch'),
    browserSync = require('browser-sync'),
    path = require('path'),
    svgstore = require('gulp-svgstore'),
    svgmin = require('gulp-svgmin'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    concat = require('gulp-concat');
 
gulp.task('svg', function () {
    return gulp.src('client/images/icons/*.svg')
        .pipe(svgmin(function getOptions (file) {
            var prefix = path.basename(file.relative, path.extname(file.relative));
            return {
                plugins: [{
                    cleanupIDs: {
                        prefix: prefix + 'icon-',
                        minify: true
                    }
                }]
            }
        }))
        .pipe(svgstore())
        .pipe(gulp.dest('build/icons'));
});
 
gulp.task('scripts', function() {
  return gulp.src('client/js/*.js')
    .pipe(concat('main.js'))
    .pipe(gulp.dest('build/js'));
});

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR', 'iOS 8']
};

gulp.task('serve', ['sass'], function() {

    // browserSync.init({
    //     server: "./"
    // });

    gulp.watch("client/styles/**/*.scss", ['sass']);
    gulp.watch("./*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("client/styles/*.scss")
        .pipe(sass())
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest("build/css"))
        .pipe(browserSync.stream());
});

gulp.task('image', function () {
    gulp.src("client/images/*") //Выберем наши картинки
        .pipe(imagemin({ //Сожмем их
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest("build/images")) //И бросим в build
});

gulp.task('default', ['serve', 'svg', 'scripts', 'image']);
