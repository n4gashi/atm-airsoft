module.exports = function(grunt)
{

    // AUTOLOAD TASKS
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({

        // Paths variables
        paths: {

            // Development where put SASS files, etc
            assets: {
                css: './public/assets/stylesheets/',
                js: './public/assets/javascripts/',
                vendor: './public/assets/vendor/'
            },

            // Production where Grunt output the files
            css: './public/css/',
            js: './public/js/'

        },
        // Task configuration
        concat: {
            js_header: {
                options: {
                    separator: ';'
                },
                src: [
                    '<%= paths.assets.vendor %>modernizr/modernizr.js',
                    '<%= paths.assets.js %>custom.js'
                ],
                dest: '<%= paths.js %>expanded/scripts_header.js'
            },
            js_footer: {
                src: [
                    '<%= paths.assets.vendor %>jquery/dist/jquery.js',
                    '<%= paths.assets.vendor %>jquery.cookie/jquery.cookie.js',
                    '<%= paths.assets.vendor %>jquery.placeholder/jquery.placeholder.js',
                    '<%= paths.assets.vendor %>fastclick/lib/fastclick.js',
                    '<%= paths.assets.vendor %>foundation/js/foundation.js',
                    '<%= paths.assets.vendor %>retina.js/dist/retina.min.js'
                ],
                dest: '<%= paths.js %>expanded/scripts_footer.js'
            },
            css: {
                src: ['<%= paths.css %>*.css', '!<%= paths.css %>app.css'],
                dest: '<%= paths.css %>app.css'
            }

        },
        sass: {

            css: {
                options: {
                    style: 'compressed',
                    compass: true
                },
                files: [{
                    expand: true,
                    cwd: '<%= paths.assets.css %>',
                    src: '**/*.scss',
                    dest: '<%= paths.css %>',
                    ext: '.css'
                }]
            }

        },
        uglify: {
            options: {
                mangle: false
            },
            js: {
                // Grunt will search for "**/*.js" when the "minify" task
                // runs and build the appropriate src-dest file mapp    ings then, so you
                // don't need to update the Gruntfile when files are added or removed.
                files: [{
                    expand: true,
                    cwd: '<%= paths.js %>/expanded',
                    src: '**/*.js',
                    dest: '<%= paths.js %>min',
                    ext: '.min.js'
                }]
            }
        },
        phpunit: {
            //...
        },
        watch: {
            js: {
                files: ['<%= paths.assets.js %>*.js'],
                tasks: ['uglify', 'concat'],
                options: { spawn: false }
            },
            css: {
                files: ['<%= paths.assets.css %>*.scss'],
                tasks: ['sass', 'concat:css'],
                options: { spawn: false }
            }
        }
    });

    // Task definition
    grunt.registerTask('default', ['sass', 'concat', 'uglify']);
}