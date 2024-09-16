'use strict';

var gulp = require('gulp'),
    pug = require('gulp-pug'),
    fs = require('fs');

gulp.task('pug', function() {
    gulp.src("source/templates/index.pug")
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest("./website/"));
    gulp.src("source/templates/inicio.pug")
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest("./website/"));
});
