// WP-Gulp
// Updated: 1800901
// Author: Smit

var themename = 'velociraptor',
    base = 'wp-content/themes/' + themename,
    // cssname = 'new';
    source = base + '/assets/sass',
    dest = base + '/assets/css',
    criticalpath = base + '/assets/critical';
    // pageUrl = "",
    // criticalName = "";


var gulp = require("gulp"),
    gutil = require("gulp-util"),
    plumber = require('gulp-plumber'),
    sass = require("gulp-sass"),
    sourcemaps = require("gulp-sourcemaps"),
    autoprefixer = require("gulp-autoprefixer"),
    rename = require("gulp-rename"),
    critical = require('critical');
    uglify = require("gulp-uglify"),
    browserSync = require("browser-sync").create();


gulp.task("scss", function () {
    return gulp
        .src(source + "/*.scss")
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: "compact" }))
        // .pipe(rename(cssname))
        .pipe(autoprefixer({ browsers: ["last 5 versions"] }))
        .pipe(sourcemaps.write("/."))
        .pipe(gulp.dest(dest));
});


gulp.task('critical', function (cb) {
    critical.generate({
        base: './',
        src: pageUrl,
        // css: [
        // // css files 
        // ],
        width: 1300,
        height: 900,
        dest: criticalpath + "/critical-" + criticalName + ".css",
        minify: true,
        extract: false,
        ignore: ['font-face']
    });
});


gulp.task("default", ["scss"], function() {
    gulp.watch(source + '/**/*.scss', ['scss']);
});
