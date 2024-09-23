'use strict';

var concat = require('gulp-concat'),
    gulp = require('gulp'),
    sourcemaps = require('gulp-sourcemaps'),
    fs = require('fs');

gulp.task('vendors', function() {
    gulp.src([
        "node_modules/jquery/dist/jquery.js",
        "node_modules/bootstrap/dist/js/bootstrap.js",
        "node_modules/aos/dist/aos.js",
        "node_modules/easy-autocomplete/dist/jquery.easy-autocomplete.js",
        "node_modules/moment/min/moment-with-locales.js"
    ])
        .pipe(concat("vendors.js"))
        .pipe(gulp.dest("./website/scripts/"));

    gulp.src([
        "node_modules/bootstrap/dist/css/bootstrap.min.css",
        "node_modules/bootstrap-datetimepicker/dist/css/bootstrap-datetimepicker.min.css",
        "node_modules/easy-autocomplete/dist/easy-autocomplete.css",
        "node_modules/aos/dist/aos.css",
        "node_modules/animate.css/animate.min.css",
        "node_modules/@fortawesome/fontawesome-free/css/all.min.css"
    ])
        .pipe(concat("vendors.min.css"))
        .pipe(gulp.dest("website/css/"));

    gulp.src("node_modules/@fortawesome/fontawesome-free/webfonts/*.*")
        .pipe(gulp.dest("website/webfonts"));
});
