var gulp = require('gulp'),
  bower = require('gulp-bower'),
  less = require('gulp-less'),
  server = require('gulp-webserver')
  st = require('st'),
  del = require('del');


logError = function(error) {
  console.log(error)
}

gulp.task('bower', function() {
  return bower().pipe(gulp.dest('bower_components'));
});

gulp.task('less', function() {
  return gulp.src('src/less/app.less')
             .pipe(less({
                paths: [
                  __dirname + '/bower_components/bootstrap/less',
                ]
             }))
             .on('error', logError)
             .pipe(gulp.dest('dist/css'));
});

gulp.task('fonts', function() {
  return gulp.src(__dirname + '/bower_components/bootstrap/fonts/*')
	     .pipe(gulp.dest('dist/fonts'));
});

gulp.task('js', function() {
  return gulp.src([
    __dirname + '/bower_components/bootstrap/dist/js/bootstrap.min.js',
    __dirname + '/bower_components/jquery/dist/jquery.min.js'
  ]).pipe(gulp.dest('dist/js'));
});

gulp.task('html', function() {
  return gulp.src('src/index.html')
             .pipe(gulp.dest('dist'));
});

gulp.task('build', ['html', 'fonts', 'js', 'less']);

gulp.task('watch', ['build'], function() {
  gulp.watch('src/less/**/*.less', ['less']);
  gulp.watch('src/*.html', ['html']);
});

gulp.task('clean', function() {
  return del(['dist/*'])
});

gulp.task('serve', ['clean','build'], function() {
  gulp.src('dist').pipe(server({
    host: '0.0.0.0',
  }));
});

gulp.task('default', ['clean', 'build', 'watch'])
