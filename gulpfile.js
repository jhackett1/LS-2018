const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp.src('sass/*.sass')
    .pipe(sass({ style: 'expanded', sourceComments: 'map', errLogToConsole: true }))
    .pipe(autoprefixer('last 2 version', "> 1%", 'ie 8', 'ie 9'))
    .pipe(gulp.dest('css'))
    .on('error', sass.logError)
});

gulp.task('default', ['sass'], function () {
  gulp.watch("sass/*.sass", ['sass']);
})
