module.exports = function(grunt) {
	grunt.initConfig({
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'css/style.css': 'src/sass/style.scss'
				}
			}
		},

		uglify: {
			dist: {
				files: {
					'js/script.min.js' : [ 'src/js/jquery.js', 'src/js/moderniz.js', 'src/js/plugins.js', 'src/js/main.js' ]
				}
			}
		},

		watch: {
			css: {
				files: 'src/sass/*.scss',
				tasks: [ 'sass' ]
			},
			js: {
				files: 'src/js/*.js',
				tasks: ['uglify']
			},
			php: {
				files: '*.php'
			},
			options: {
				livereload: true
			}
		}
	});

	// Load Tasks
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Registe Tasks
	grunt.registerTask('default', ['sass', 'uglify', 'watch']);
}