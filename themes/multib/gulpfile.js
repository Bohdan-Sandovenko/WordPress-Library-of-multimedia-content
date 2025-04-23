const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))

const style = () => {
  return gulp.src('./scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
}

const watch = () => {
  gulp.watch('./scss/**/*.scss', { ignoreInitial: false }, style)
}

exports.watch = watch
exports.style = style
