module.exports = function(grunt) { 
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
  	grunt.registerTask('default', ['watch']);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
            dist: {
                options: {
                    compass: 'true'
                },
                files: [{
                    expand: true,
                    cwd: '_theme/themes/portfolio/dist/src/scss',
                    src: [
                        '*.scss'
                    ],
                    dest: '_theme/themes/portfolio/dist/src/css',
                    ext: '.css'
                }]
            },
        },
		watch: { // Compile everything into one task with Watch Plugin
	      	css: {
	        	files: '**/*.scss',
	        	tasks: ['sass']
	      	},
	    }
	});

}

