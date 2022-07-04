var gulp = require('gulp');
var livereload = require('gulp-livereload')
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
// var imagemin = require('gulp-imagemin');
// var pngquant = require('imagemin-pngquant');




// gulp.task('imagemin', function () {
//     return gulp.src('./images/*')
//         .pipe(imagemin({
//             progressive: true,
//             svgoPlugins: [{removeViewBox: false}],
//             use: [pngquant()]
//         }))
//         .pipe(gulp.dest('./images'));
// });



gulp.task('sass', function () {
  gulp.src('./scss/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'));
});


// gulp.task('uglify', function() {
//   gulp.src('./js/*.js')
//     .pipe(uglify('main.js'))
//     .pipe(gulp.dest('./js'))
// });

gulp.task('watch', function(){
    livereload.listen();

    gulp.watch('./scss/*.scss', gulp.parallel(['sass']));
    // gulp.watch('./js/*.js', gulp.parallel(['uglify']));
    gulp.watch(['./css/style.css', './**/*.twig'], function (files){
        livereload.changed(files);
    });
});