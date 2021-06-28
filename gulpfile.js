var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');

gulp.task('sass', function() {
	return gulp.src('scss/**/*.scss')
		.pipe(sass())
		.pipe(cssnano())
		.pipe(rename( {
			suffix: '.min'
		}))
		.pipe(gulp.dest('dist/styles'))
		.pipe(browserSync.stream());
})

gulp.task('watch', function() {
	gulp.watch('scss/**/*.scss', gulp.series(['sass']));

})