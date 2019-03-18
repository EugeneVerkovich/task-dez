'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', async function() {

});
gulp.task('sass', async function () {
  return gulp.src('./theme/styles/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./theme/'));
});
gulp.task("scripts", function() {
    gulp.src(['./theme/scripts/main.js'])
        .pipe( include() )
        .pipe( gulp.dest("./theme/") )
});
gulp.task('watch', function () {
    gulp.watch('./styles/*.scss', ['sass'] );
});
