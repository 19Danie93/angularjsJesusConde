module.exports = function(grunt) {
    //Project configuration
    grunt.initConfig({
        jshint:{
            all:['js/controllers/AlumnosController.js']
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    //Default task
    grunt.registerTask('default', ['jshint']);
}