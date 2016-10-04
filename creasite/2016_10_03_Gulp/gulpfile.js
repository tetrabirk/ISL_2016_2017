var gulp = require('gulp'),
	csscomb = require('gulp-csscomb'),
	cssbeautify = require('gulp-cssbeautify'),
	autoprefixer = require('gulp-autoprefixer'),
	csso = require('gulp-csso'),
	rename = require('gulp-rename');

	
var srcCss = './__src/';
var distCss = './__dist/';
 

/*
 * T�che styles
 * Commande : "gulp styles"
 * Description : indente avec 1 tab | ordonne les d�claration | ajoute les pr�fixes css si n�cessaire 
 */
 
gulp.task('styles', function() {
  return gulp.src(srcDest + 'css/style.css')
    .pipe(cssbeautify({indent: '	'}))
	.pipe(csscomb())
	.pipe(autoprefixer())
	.pipe(gulp.dest(srcDest + 'css'));
});

/*
 * T�che mini
 * Commande : "gulp mini"
 * Description : minifie les fichiers css et les suffixe .min
 */
gulp.task('mini', function () {
  return gulp.src(srcDest + 'css/*.css')
    .pipe(csso())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(distCss + 'css'));
});

/*
 * T�che build
 * Commande : "gulp build"
 * Description : execute les t�ches dans l'ordre sp�cifi�
 * 1er param�tre :  nom de la t�che
 * 2�me param�tre :   t�ches � executer  
 */
gulp.task('build', ['styles', 'mini']);

/*
 * T�che watch
 * Commande : "gulp watch"
 * Description : V�rifie si un fichier est modifi� et si c'est le cas, ex�cute les t�ches plac�es dans le tableau
 * 1er param�tre :  le ou les fichier(s) � v�rifier
 * 2�me param�tre : les t�ches � executer en cas de changement
 */
gulp.task('watch', function () {
  gulp.watch(srcCss + 'css/*.css',['build']);
});


/*
 * T�che Default
 * Commande : "gulp"
 * Description : t�che execut�e lors de la command gulp
  */
gulp.task('default', function() {
    gulp.start('watch');
});
