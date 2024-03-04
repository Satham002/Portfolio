module.exports = function (grunt) {
    var currentdate = new Date();
    var datetime = "Last Sync: " + currentdate.getDate() + "/"
        + (currentdate.getMonth() + 1) + "/"
        + currentdate.getFullYear() + " @ "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes() + ":"
        + currentdate.getSeconds();

    grunt.initConfig({
        concat: {
            options: {
                separator: '\n',
                banner: '/*processed date and time on' + datetime + '*/\n',
            },
            css: {
                dist: {
                    src: ['../assets/css/**/*.css'],
                    dest: '../assets/src/style.css',
                },
            }

        },
        watch: {
            css: {
                files: ['../assets/css/**/*.css'],
                tasks: ['concat:css', 'cssmin'],
                options: {
                    spawn: false,
                },
            },
        },
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    '../../htdocs/assets/css/style.css': ['../assets/css/**/*.css']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['concat', 'cssmin', 'watch']);

};
