var gulp = require('gulp'),
	csscomb = require('gulp-csscomb'),
	cssbeautify = require('gulp-cssbeautify'),
	autoprefixer = require('gulp-autoprefixer'),
	csso = require('gulp-csso'),
	rename = require('gulp-rename');

	
var srcCss = './__src/';
var distCss = './__dist/';
 

/*
 * Tâche styles
 * Commande : "gulp styles"
 * Description : indente avec 1 tab | ordonne les déclaration | ajoute les préfixes css si nécessaire 
 */
 
gulp.task('styles', function() {
  return gulp.src(srcDest + 'css/style.css')
    .pipe(cssbeautify({indent: '	'}))
	.pipe(csscomb())
	.pipe(autoprefixer())
	.pipe(gulp.dest(srcDest + 'css'));
});

/*
 * Tâche mini
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
 * Tâche build
 * Commande : "gulp build"
 * Description : execute les tâches dans l'ordre spécifié
 * 1er paramètre :  nom de la tâche
 * 2ème paramètre :   tâches à executer  
 */
gulp.task('build', ['styles', 'mini']);

/*
 * Tâche watch
 * Commande : "gulp watch"
 * Description : Vérifie si un fichier est modifié et si c'est le cas, exécute les tâches placées dans le tableau
 * 1er paramètre :  le ou les fichier(s) à vérifier
 * 2ème paramètre : les tâches à executer en cas de changement
 */
gulp.task('watch', function () {
  gulp.watch(srcCss + 'css/*.css',['build']);
});


/*
 * Tâche Default
 * Commande : "gulp"
 * Description : tâche executée lors de la command gulp
  */
gulp.task('default', function() {
    gulp.start('watch');
});
