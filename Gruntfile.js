module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    },
    concat: {
        options: {
            stripBanners: true
        },
        dist: {
            src: ['css/stylePress.css', 'css/style.css'],
            dest: 'destino/css/stylePress.css'
        }
    },
    cssmin: {
      compress: {
        files: {
          "destino/css/stylePress.min.css": "destino/css/stylePress.css"
        }
      }
    },        
    htmlmin: {                                     // Task
        dist: {                                      // Target
          options: {                                 // Target options
            removeComments: true,
            collapseWhitespace: true
          },
          files: {                                   // Dictionary of files
            'destino/index.html': 'index.html',     // 'destination': 'source'
            //'dist/contact.html': 'src/contact.html'
          }
        },
        dev: {                                       // Another target
          files: {
            'dist/index.html': 'src/index.html',
            'dist/contact.html': 'src/contact.html'
          }
        }
      },

      /*bgShell: {
        runNode: {
            cmd: 'node app.js',
            bg: true
        }
    },*/
    //
    stylus: {
        compile: {
            options: {
                paths: [stylusDir],
                'include css': true
            },
            files: {
                'public/css/app.min.css': stylusDir + '/index.styl' 
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

};