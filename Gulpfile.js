var gulp = require('gulp');
var sass = require('gulp-sass');
var ap = require('gulp-autoprefixer');

gulp.task('css', function() {
	gulp.src('app/assets/sass/main.scss')
		.pipe(sass())
		.pipe(ap('last 10 version'))
		.pipe(gulp.dest('public/css'))
});

gulp.task('watch', function(){
	gulp.watch('app/asets/sass/**/*.scss', ['css']);
});

gulp.task('default', ['watch']);