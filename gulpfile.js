var gulp = require('gulp'),
  bower = require('gulp-bower'),
  less = require('gulp-less'),
  livereload = require('gulp-livereload'),
  http = require('http'),
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
             .pipe(gulp.dest('dist/css'))
             .pipe(livereload());
});

gulp.task('html', function() {
  return gulp.src('src/index.html')
             .pipe(gulp.dest('dist'))
             .pipe(livereload());
});

gulp.task('build', ['html', 'less']);

gulp.task('watch', ['build'], function() {
  livereload.listen({ basePath: 'dist'});
  gulp.watch('src/less/**/*.less', ['less']);
  gulp.watch('src/*.html', ['html']);
});

gulp.task('serve', ['watch'], function(done) {
  http.createServer(
    st({ path: __dirname + '/dist', index: 'index.html', cache: false })
  ).listen(8080, done);
});

gulp.task('clean', function() {
  return del(['dist/*'])
});

gulp.task('default', ['clean', 'build'])
