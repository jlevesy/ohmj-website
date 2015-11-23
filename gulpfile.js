var gulp = require('gulp'),
  bower = require('gulp-bower'),
  less = require('gulp-less');


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

gulp.task('html', function() {
  return gulp.src('src/index.html').pipe(gulp.dest('dist'));
});

gulp.task('build', ['html', 'less']);
