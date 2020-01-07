//The "wrapper" function
module.exports = function(grunt) {
    // Do grunt-related things in here
       //Project and task configuration
  
      const sass = require('node-sass');
         grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
  
            /**
            *Grunt Sass
            *Compile Sass to CSS using node-sass
            *https://www.npmjs.com/package/grunt-sass
            */
            sass: {
                options: {
                    implementation: sass,
                    sourceMap: false
                },
  
                dist: {
                    files: {
                        'css/style.css': 'assets/scss/style.scss'
                        //right of the colon get compiled into the left
                    }
                }
            },
            /**
            *Grunt Contrib Warch
            *Monitor files and execute tasks
            *https://www.npmjs.com/package/grunt-contrib-watch?activeTab=readme
            */
  
            //this task will monitor sass files
            watch: {
                sass: {
                    files: [
                        'assets/scss/**/*.scss'
                        ],
                        tasks: [
  
                        'sass']
                  },
                  scripts: {
  
                      files: [
                          'assets/js/*.js'
                      ],
                      tasks : [
                          'uglify'
                      ]
                  }
          },
  
          /**
          * Grunt Contrib Uglify
          * Minify JavaScript files
          * https://www.npmjs.com/package/grunt-contrib-uglify
          */
          uglify: {
              my_target:{
                  files: {
                      'js/script.js' : ['node_modules/jquery/dist/jquery.js', 'assets/js/script.js']
                  }
              }
          }
  
            
  
  
        });
  
      //Loading Grunt plugins and tasks
      /**grunt.loadNpmTasks('grunt');
      *grunt.loadNpmTasks('grunt-sass');
      *grunt.loadNpmTasks('grunt-contrib-watch');
      */
      require('load-grunt-tasks')(grunt);
  
      //Custom tasks
      grunt.registerTask('default', ['watch']);
  
  };
  
  
  