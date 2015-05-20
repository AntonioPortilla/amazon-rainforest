var path = require('path');
var stylusDir = 'dev/css';
var javascriptDir = 'public/javascript';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
        options: {
            stripBanners: true
        },
        dist: {
            src: ['dev/css/carousel.css', 'dev/css/style.css'],
            dest: 'prod/css/concatenado.css'
        }
    },
    cssmin: {
      compress: {
        files: {
          "public/css/styles.min.css": [
          'dev/css/style.css', 
          'dev/css/carousel.css',
          'dev/css/social-media.css'
          ]
        }
      }
    },        
    uglify: {
      my_target: {
        files: {
          'public/js/scripts.min.js': [
          'dev/js/script.js',
          'dev/js/ie10-viewport-bug-workaround.js', 
          'dev/js/holder.js'
          ]
        }
      }
    },
    jshint: {
      all: ['Gruntfile.js', 'dev/js/script.js']
    },
    stylus: {
        compile: {
            options: {
                paths: [stylusDir],
                'include css': true
            },
            files: {
                'public/css/styles.min.css': stylusDir + '/estilos.styl' 
            }
        }
    },

    watch: {
        stylesheets: {
            files: [stylusDir + '/**/*.styl', stylusDir + '/**/*.css'],
            tasks: ['stylus'],
            options: {
                interrupt: true
            }
        }
    }



  });

	// Load the plugin that provides the "uglify" task.
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-htmlmin'); 
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-stylus');  
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');   
	// Default task(s).
	grunt.registerTask('compile', ['stylus']);
	grunt.registerTask('jalp', ['compile', 'watch']); 
  grunt.registerTask('default', ['compile']);
	grunt.registerTask('public', ['cssmin','uglify']);

};