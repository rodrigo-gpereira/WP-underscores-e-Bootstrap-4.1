// Incluir os módulos

const gulp = require('gulp'),
      browserSync = require('browser-sync'),
      sass = require('gulp-sass')

// Cópia de Dependencias

gulp.task('copy', () => {
    return gulp.src([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
        './node_modules/popper.js/dist/popper.min.js'])
        .pipe(gulp.dest('./js'))
})

// Configurar Browser Sync

gulp.task('browser-sync', function(){
    const files = [
        './style.css',
        './js/**/*.js',
        './**/*.php'
    ];

    //fazer o proxy para servidor PHP
    browserSync.init(files, {
        proxy: "http://localhost:8080/bs4base/"
    })
})

//Configurar o Sass

gulp.task('sass', function(){
    return gulp.src('sass/*.scss')
    .pipe(sass({
        'outputStyle' : 'compressed'
    }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream())
})

gulp.task('default', ['copy', 'sass', 'browser-sync'], function(){
    gulp.watch("sass/**/*.scss", ['sass'])
})