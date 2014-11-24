module.exports = function(grunt) {
    //Project configuration
    grunt.initConfig({
        jshint:{
            all:['js/controllers/AlumnosController.js']
        },
        concat: {
            dist: {
                src:['js/controllers/AlumnosController.js','js/script1.js','js/script2.js'],
                dest: 'unidos.js'
            }
        },
        uglify: {
            dist: {
                src: 'unidos.js',
                dest: 'build/unidos.min.js'
            }
        },
        shell: {
            multiple: {
                command: [
                    'del unidos.js',
                    'mkdir deploy',
                    'move build\\unidos.min.js deploy\\unidos.min.js'
                ].join('&&')
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-shell');

    //Default task
    grunt.registerTask('default', ['jshint','concat','uglify','shell']);
}