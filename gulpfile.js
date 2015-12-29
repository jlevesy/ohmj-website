var gulp = require('gulp'),
  less = require('gulp-less'),
  connect = require('gulp-connect'),
  st = require('st'),
  del = require('del');

logError = function(error) {
  console.log(error)
}

gulp.task('less', function() {
  return gulp.src('src/less/app.less')
             .pipe(less({
                paths: [
                  'bower_components/bootstrap/less',
                ]
             }))
             .on('error', logError)
             .pipe(gulp.dest('dist/static/css'))
             .pipe(gulp.dest('dist/joomla/css'))
             .pipe(connect.reload());
});

gulp.task('images', function () {
  return gulp.src('src/images/*')
             .pipe(gulp.dest('dist/static/images'))
             .pipe(gulp.dest('dist/joomla/images'))
});

gulp.task('fonts', function() {
  return gulp.src('bower_components/bootstrap/fonts/*')
    .pipe(gulp.dest('dist/static/fonts'))
    .pipe(gulp.dest('dist/joomla/fonts'));
});

gulp.task('js', function() {
  return gulp.src([
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
    'bower_components/jquery/dist/jquery.min.js',
    'src/js/**/*.js'
  ]).pipe(gulp.dest('dist/static/js'))
    .pipe(gulp.dest('dist/joomla/js'));
});

gulp.task('html', function() {
  return gulp.src('src/static/index.html')
             .pipe(gulp.dest('dist/static'))
             .pipe(connect.reload());
});

gulp.task('php', function() {
  return gulp.src('src/php/**/*.php')
             .pipe(gulp.dest('dist/joomla'))
});

gulp.task('assets', function() {
  return gulp.src('src/assets/*')
             .pipe(gulp.dest('dist/joomla'))
});

gulp.task('build', ['html', 'php', 'assets', 'images', 'fonts', 'js', 'less']);

gulp.task('watch', function() {
  gulp.watch('src/less/**/*.less', ['build']);
  gulp.watch('src/static/*.html', ['build']);
  gulp.watch('src/php/**/*.php', ['build']);
  gulp.watch('src/js/**/*.js', ['build']);
  gulp.watch('src/assets/**/*', ['build']);
});

gulp.task('clean', function() {
  return del(['dist/**/*']);
});

gulp.task('serve', function() {
  return connect.server({
    host: '0.0.0.0',
    port:  8000,
    root: 'dist/static',
    livereload: true
  });
});

gulp.task('prod-serve', ['clean','build'], function() {
  return connect.server({
    host: '0.0.0.0',
    root: 'dist/static',
    port: process.env.PORT || 8000
  });
});

gulp.task('default', ['clean', 'build', 'watch', 'serve'])
