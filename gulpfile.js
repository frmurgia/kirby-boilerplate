const gulp = require("gulp");
const browserSync = require("browser-sync");
const postcss = require("gulp-postcss");
const php = require('gulp-connect-php');
const concat = require('gulp-concat');


const paths = [
    "site/**/*.php",
    "site/**/*.css",
    "tailwind.config.json",
    "content/**/*.txt",
]

gulp.task('reload', function (cb) {
    browserSync.reload();
    return cb();
});



gulp.task('postcss', function () {
    return gulp.src("./public/assets/css/*.css")
        .pipe(concat('main.css')) // Concatena tutti i file CSS in uno chiamato 'main.css'
        .pipe(postcss())
        .pipe(gulp.dest("./public/assets/css"))
        .pipe(browserSync.stream());
});

gulp.task('connect', function (done) {
    php.server({
        base: './public/',
        keepalive: true,
        port: 8989,
        router: 'kirby/router.php',
    }, function () {
        browserSync({
            proxy: '127.0.0.1:8989',
            open: false,
            notify: false,
        });
    });

    gulp.watch(paths, { usePolling: true }, gulp.series('postcss', 'reload'));
    return done();
});

gulp.task('disconnect', function(done) {
    php.closeServer();
    return done();
});

gulp.task('clean', function () {
    // Assuming paths.dist is defined somewhere
    return del(paths.dist);
});

gulp.task('default', gulp.series('postcss', 'connect'));

gulp.task('build', gulp.series('clean', 'postcss'));
