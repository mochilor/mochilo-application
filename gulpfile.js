// Include gulp
var gulp = require('gulp');

// Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var less = require('gulp-less');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

// Config
var config = {
    lessDir: './resources/less/',
    jsDir: './resources/js/',
    nodeModulesDir: './node_modules/' ,
    publicDir: './public/',
};

// Task 'js'
gulp.task('js', function() {
    //
});

// Task 'css'
gulp.task('css', function() {
    //
});

// Task 'fonts'
gulp.task('fonts', function() {
    //
});

// Task 'icons'
gulp.task('icons', function() {
    //
});

// Default task
gulp.task('default', ['js', 'css', 'fonts', 'icons']);

// Rerun a task when a file changes
gulp.task('watch', function() {
    gulp.watch([
        config.lessDir + '*.less',
    ], ['css']);
    gulp.watch(config.jsDir + '*.**', ['js']);
});