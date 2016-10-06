const gulp = require('gulp'), sass = require('gulp-sass'), browser = require('browser-sync').create();

gulp.task('sass', function(){
    return gulp.src('./src/sass/styles.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('watch', function(){
    gulp.watch('./src/sass/*.scss', ['sass']);
    gulp.watch('./public/*.html').on('change', browser.reload);
    gulp.watch('./public/css/*.css').on('change', browser.reload);
});

gulp.task('sync', function(){
    browser.init({
        server: './public'
    });
});

gulp.task('watch-sass', function(){
    gulp.watch('./src/sass/partials/*.scss', ['sass']);
});

gulp.task('default', ['sync', 'watch']);