/*global module:false*/

module.exports = function(grunt) {
	var sass_files = [
		'components/sass/**/*.scss'
	];

	var js_files = [
		'components/js/lib/**/*.js'
	];

	// Project configuration.
	grunt.initConfig({
		compass: {
			prod: {
				config: 'config.rb',
				debugInfo: false
			}
		},
		uglify: {
			compress: {
				files: [
					{
						expand: true, // enable dynamic expansion
						cwd: 'components/js/lib/', // src matches are relative to this path
						src: ['**/*.js'], // pattern to match
						dest: 'js/min/'
					}
				]
			}
		},
		watch: {
			files: js_files.concat( sass_files ),
			tasks: [
				'compass:prod',
				'uglify'
			]
		}
	});

	// Default task.
	grunt.loadNpmTasks( 'grunt-contrib-compass' );
	grunt.loadNpmTasks( 'grunt-contrib-uglify' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.registerTask( 'default', ['uglify', 'compass:prod'] );
};
