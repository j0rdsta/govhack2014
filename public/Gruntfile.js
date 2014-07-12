module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/app.css': 'scss/app.scss',
          'css/font-awesome.css': 'scss/font-awesome/font-awesome.scss'
        }
      }
    },

    concat: {
      // Concatenate our unminified JS files so that we can then uglify them
      before: {
        src: [
          'js/app.js'
        ],
        dest: 'build/js/app.concat.js',
      },
      // After uglify, concatenate the output with minified libraries
      after: {
        src: [
          'bower_components/jquery/dist/jquery.min.js',
          'bower_components/foundation/js/foundation.min.js',
          'bower_components/parsleyjs/dist/parsley.min.js',
          'build/js/app.min.js'
        ],
        dest: 'build/js/app.min.js'
      }
    },

    uglify: {
      options: {
        mangle: false
      },
      build: {
          src: 'build/js/app.concat.js',
          dest: 'build/js/app.min.js'
      }
    },

    watch: {
      livereload: {
          files: ['*.html', '*.php', 'build/**/*.*', 'css/*.css','img/**/*.{png,jpg,jpeg,gif,webp,svg}'],
          options: {
              livereload: true
          }
      },
      grunt: { files: ['Gruntfile.js'] },
      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      },
      scripts: {
          files: ['js/*.js'],
          tasks: ['concat:before','uglify','concat:after'],
          options: {
              spawn: false
          },
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build','concat:before','uglify','concat:after', 'watch']);
}