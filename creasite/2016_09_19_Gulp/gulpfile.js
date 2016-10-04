//Requis
var gulp = require ('gulp');

//chemins
var source ='./dev'; //dossier de travail
var destination = './prod'; //dossier de production

//Pluggins
var csscomb = require('gulp-csscomb');
var cssbeautify = require('gulp-cssbeautify');
//const autoprefixer = require('gulp-autoprefixer cette ligne est en commentaire parce que netbeans me fais chier :)

var csso = require('gulp-csso');
var rename = require("gulp-rename");
 
//task
gulp.task('css', function() {
  return gulp.src(source + '/css/*.css')
    .pipe(csscomb())
	.pipe(cssbeautify())
	.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(gulp.dest(destination + '/css/'));
});

gulp.task('mini', function() {
  return gulp.src(source + '/css/*.css')
    .pipe(csso())
	.pipe(rename({
		extname: ".min"
  }))
	
    .pipe(gulp.dest(destination + '/css/'));
});

