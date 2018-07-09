module.exports = function(grunt) { 
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');

  	grunt.registerTask('default', ['sass']);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
            dist: {
                options: {                       // Target options
                    style: 'expanded'
                },
                files: {                         // Dictionary of files
                    'dist/src/css/style.css': 'dist/src/scss/style.scss',       // 'destination': 'source'
                }
            },
        },
        uglify: {
	        dist: {
		    	files: {
		        	'main.min.js': 'dist/src/js/main.js',
		      	}
		    }
		},
		watch: { // Compile everything into one task with Watch Plugin
	      	css: {
	        	files: '**/*.scss',
	        	tasks: ['sass']
	      	},
	      	scripts: {
			    files: '**/*.js',
			    tasks: ['uglify']
			}
	    }
	});

}

