'use strict';

const gulp = require('gulp'),
    prefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    babel = require('gulp-babel'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant');

const path = {
    build: { 
        html: '../',
        css: '../',
        js: '../js/',
        img: '../img/',
        fonts: '../fonts/'
    },
    src: { 
        html: 'template/*.php', 
        css: 'css/main.scss',
        js: 'js/main.js',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    watch: { 
        html: '**/*.php',
        css: 'css/**/*.scss',
        js: 'js/**/*.js',
        img: 'img/**/*.*',
        fonts: 'fonts/**/*.*'
    },
    clean: 'build'
};

function htmlBuild(cb){
    return gulp.src(path.src.html) 
        .pipe(rigger()) 
        .pipe(gulp.dest(path.build.html)); 
        cb();
}

function cssBuild(cb){
    return gulp.src(path.src.css) 
        .pipe(sourcemaps.init()) 
        .pipe(sass()) 
        .pipe(prefixer({ 
            overrideBrowserslist: ['last 15 versions'], 
            cascade: false 
        })) 
        .pipe(cssmin()) 
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.css)); 
        cb();
}

function jsBuild(cb){
    return gulp.src(path.src.js) 
        .pipe(sourcemaps.init()) 
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.js)); 
        cb();
}

function img(cb) {
    return gulp.src(path.src.img)
            .pipe(imagemin({ 
                progressive: true,
                svgoPlugins: [{removeViewBox: false}],
                use: [pngquant()],
                interlaced: true
            }))
            .pipe(gulp.dest(path.build.img));
    cb();
}

function fonts(cb) {
    return gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts));
    cb();
}

function build(cb) {
    htmlBuild();
    cssBuild();
    jsBuild();
    img();
    fonts();
    cb();
}

//function clean() {
//    return del(path.clean, {force: true});
//}

// Watch files
function watchFiles() {
    gulp.watch(path.watch.css, cssBuild);
    gulp.watch(path.watch.js, jsBuild);
    gulp.watch(path.watch.html, htmlBuild);
    gulp.watch(path.watch.img, img);
    gulp.watch(path.watch.fonts, fonts);
}

// export tasks
//exports.clean = clean;
exports.build = build;
exports.watch = watchFiles;
exports.default = gulp.parallel(build, watchFiles);