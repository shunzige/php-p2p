//引入gulp
var gulp = require('gulp');
//引入路径
var path = require('path');

//引入各种模块
var less = require('gulp-less');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var clean = require('gulp-clean-css');

//引入热刷新模块
var livereload=require("gulp-livereload");

//打包压缩css
gulp.task('lessTask',function () {
    gulp.src('./src/less/*.less')
        .pipe(less({
            paths:[path.join(__dirname,'less','includes')]
        }))
        .pipe(clean())
        .pipe(rename(function (path) {
            path.basename+='.min';
        }))
        .pipe(gulp.dest('./dist/css/minCss'))
        .pipe(livereload())
});

gulp.task('jsTask',function () {
    gulp.src('./src/js/*.js')
        .pipe(uglify())
        .pipe(rename(function (path) {
            path.basename+='.min';
        }))
        .pipe(gulp.dest('./dist/js/minJs'))
        .pipe(livereload())
});

//监听变化

gulp.task('default',function () {
    livereload.listen();
    gulp.watch('./src/less/*.css',['lessTask']);
    gulp.watch('./src/js/*js',['jsTask'])
});