'use strict';
module.exports = function(grunt) {
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-img');

	grunt.registerTask('default', ['stylus', 'copy', 'uglify', 'cssmin']);
	grunt.registerTask('reload', ['copy', 'uglify', 'cssmin']);
	grunt.registerTask('dev', ['watch']);

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		copy: {
			img: {
				files: [{
					expand: true,
					src: '**/*',
					dest: './app/img',
					cwd: './src/img'
				}]
			},

			js: {
				files: [{
					expand: true,
					src: '**/*',
					dest: './tmp/js',
					cwd: './src/js'
				}]
			},

			css: {
				files: [{
					expand: true,
					src: '**/*.css',
					dest: './tmp/css',
					cwd: './src/css'
				}]
			},

			fonts: {
				files: [{
					expand: true,
					src: '**/*',
					dest: './app/fonts',
					cwd: './src/fonts'
				}]
			}
		},

		uglify: {
			dist: {
				options: {
					mangle: true,
					preserveComments: 'some'
				},
                files: {
                './src/js/lib/jquery.flexslider.min.js':['./src/js/lib/jquery.flexslider.js'],
                        './src/js/lib/jquery.slidemenu.min.js':['./src/js/lib/jquery.slidemenu.js'],
                        './src/js/lib/code.photoswipe-3.0.5.min.js':['./src/js/lib/code.photoswipe-3.0.5.js'],
                        './src/js/main.min.js':['./src/js/main.js']}
/*				files: [
					{
						'./app/js/hitomebore.js': [
							'./tmp/js/lib/jquery-2.0.3.js',
							'./tmp/js/lib/jquery.flexslider.js',
							'./tmp/js/lib/jquery.slidemenu.js',
							'./tmp/js/lib/klass.min.js',
							'./tmp/js/lib/code.photoswipe-3.0.5.js',
							'./tmp/js/main.js'
						]
					}
				]*/
			}
		},

		cssmin: {
			minify: {
				expand: true,
				cwd: './tmp/css',
				src: '**/*.css',
				dest: './tmp/css',
				ext: '.min.css'
			},/*
			conbine: {
				files: {
					'./app/css/hitomebore.css': [
						'./tmp/css/flexslider.min.css',
						'./tmp/css/photoswipe.min.css',
						'./tmp/css/main.min.css'
					]
				}
			}*/
		},

		stylus: {
			compile: {
				src: './src/css/main.styl',
				dest: './src/css/main.css',
				options: {
					compress: true
				}
			}
		},

		watch: {
			stylus: {
				files: [
					'./src/css/**/*.styl'
				],
				tasks: ['stylus']
			},
			reload: {
				files: [
					'./src/**/*.html',
					'./src/css/**/*.css',
					'./src/js/**/*.js'
				],
				tasks: ['reload']
			},
			reloadImg: {
				files: [
					'./src/img/**/*'
				],
				tasks: ['copy:img']
			}
		}
	});
};
