const { series, src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');

sass.compiler = require('node-sass');

function scssDev() {
  return src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat())
    .pipe(dest('./css'));
}

function scssBuild() {
  return src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(concat('style.css'))
    .pipe(dest('./css'));
}

function scssWatch() {
  return watch('./scss/**/*.scss', series(scssDev));
}

function jsDev() {

}

function jsBuild() {
  
}

exports.build = series(scssBuild);
exports.default = series(scssWatch);