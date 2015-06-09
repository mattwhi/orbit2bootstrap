'use strict';
module.exports = function(grunt) {

    // load all grunt tasks matching the `grunt-*` pattern
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // watch for changes and trigger sass, jshint, uglify and livereload
        watch: {
            sass: {
                files: ['assets/stylesheets/**/*.{scss,sass}'],
                tasks: ['sass', 'autoprefixer', 'cssmin']
            },
            js: {
                files: '<%= jshint.all %>',
                tasks: ['jshint', 'uglify']
            },
            images: {
                files: ['assets/images/**/*.{png,jpg,gif}'],
                tasks: ['imagemin']
            }
        },

        // sass
        sass: {
            dist: {
                options: {
                    style: 'expanded',
                },
                files: {
                    'assets/stylesheets/build/style.css': 'assets/stylesheets/style.scss',
                    'assets/stylesheets/build/editor-style.css': 'assets/stylesheets/editor-style.scss'
                }
            }
        },

        // autoprefixer
        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'],
                map: true
            },
            files: {
                expand: true,
                flatten: true,
                src: 'assets/stylesheets/build/*.css',
                dest: 'assets/stylesheets/build'
            },
        },

        // css minify
        cssmin: {
            options: {
                keepSpecialComments: 1
            },
            minify: {
                expand: true,
                cwd: 'assets/stylesheets/build',
                src: ['*.css', '!*.min.css'],
                ext: '.css'
            }
        },

        // javascript linting with jshint
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                "force": true
            },
            all: [
                'Gruntfile.js',
                'assets/javascripts/source/**/*.js'
            ]
        },

        // uglify to concat, minify, and make source maps
        uglify: {
            plugins: {
                options: {
                    sourceMap: 'assets/javascripts/plugins.js.map',
                    sourceMappingURL: 'plugins.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                        'assets/javascripts/plugins.min.js': [
                        'assets/javascripts/source/plugins.js',
                        'assets/javascripts/vendor/navigation.js',
                        'assets/javascripts/vendor/skip-link-focus-fix.js',
                        // 'assets/js/vendor/yourplugin/yourplugin.js',
                    ]
                }
            },
            main: {
                options: {
                    sourceMap: 'assets/js/main.js.map',
                    sourceMappingURL: 'main.js.map',
                    sourceMapPrefix: 2
                },
                files: {
                    'assets/js/main.min.js': [
                        'assets/js/source/main.js'
                    ]
                }
            }
        },

        // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true,
                    interlaced: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'assets/images/'
                }]
            }
        },

        // browserSync
        browserSync: {
            dev: {
                bsFiles: {
                    src : ['style.css', 'assets/javascripts/*.js', 'assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}']
                },
                options: {
                    proxy: "localhost:90",
                    watchTask: true
                }
            }
        },

        // deploy via rsync
        deploy: {
            options: {
                src: "*/",
                args: ["--verbose"],
                exclude: ['.git*', 'node_modules', '.sass-cache', 'Gruntfile.js', 'package.json', '.DS_Store', 'README.md', 'config.rb', '.jshintrc'],
            },
            staging: {
                 options: {
                    dest: "staging"
                }
            },
            production: {
                options: {
                    dest: "dist"
                }
            }
        },

        //Clean distribution replace with ne files
        clean: {
            build: {
                files:[{
                    dot:true,
                    src: [
                        'dist/*',
                        '!dist/.git*'
                        ]
                    }]
                }
            },

            //copy files to distribution folder
            copy: {
                dist: {
                    files:[{
                        expand:true,
                        dot: true,
                        cwd: '',
                        dest: 'dist',
                        src: [
                            'assets/images{,*/}*.{png,jpg,gif}',
                            'assets/javascripts{,*/}*.min.js',
                            'assets/fonts/bootstrap{,*/}*.*',
                            'languages{,*/}*.*',
                            'template-parts{,*/}*.php',
                            'inc{,*/}*.php',
                            'layouts{,*/}*.php',
                            '{,*/}*.{php,html,html,css}'
                            ]
                        }]
                    }
                }

    });

    // rename tasks
    grunt.renameTask('rsync', 'deploy');

    // register task
    grunt.registerTask('default', ['sass', 'autoprefixer', 'cssmin', 'uglify', 'imagemin', 'browserSync', 'watch']);


    grunt.registerTask('orbit', ['clean', 'copy']);

};
