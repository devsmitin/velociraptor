// Copy package.json file & run command 'npm install'
// Updated: 190214
// Author: Smit


// set themename
const themename = 'gograd';

// for critical css
const pageUrl = "your pageUrl";
const criticalCssName = "critical css filename",


// paths
const   base = 'wp-content/themes/' + themename;
const   source = base + '/src/scss',
        dest = base + '/css/page-css',
        criticalCssPath = base + '/css/critical';


const gulp = require("gulp"),
    gutil = require("gulp-util"),
    plumber = require('gulp-plumber'),
    sass = require("gulp-sass"),
    sourcemaps = require("gulp-sourcemaps"),
    autoprefixer = require("gulp-autoprefixer"),
    rename = require("gulp-rename"),
    critical = require('critical');
    uglify = require("gulp-uglify"),
    browserSync = require("browser-sync").create();


gulp.task("css", function () {
    return gulp
        .src(source + "/*.scss")
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: "compact" }))
        .pipe(autoprefixer({ browsers: ["last 5 versions"] }))
        .pipe(sourcemaps.write("/."))
        .pipe(gulp.dest(dest));
});


gulp.task('critical', function () {
    critical.generate({
        base: './',
        src: pageUrl,
        width: 1300,
        height: 900,
        dest: criticalCssPath + "/critical-" + criticalCssName + ".css",
        minify: true,
        extract: false,
        ignore: ['@font-face']
    });
});

gulp.task("default", [], function () {
    gulp.watch(source + '/*.scss', ['css']);
});