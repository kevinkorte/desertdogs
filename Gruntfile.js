module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    //Sass set up
    sass: {
    	dist: {
    		options: {
    						style : 'expanded',
    			lineNumbers	: true,
    				sourcemap : true,
    		},
    		files: {
    			'style.css'	: 'dev/sass/main.scss'
    		}
    	}
    },
    //Watch
    watch: {
    	options: {
    	livereload: true,
    			spawn : false
    	},
    	css: {
    		files: ['dev/sass/*.scss'],
    		tasks: ['sass'],
    	}
    }
    
  });

  // Load the plugin.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};
