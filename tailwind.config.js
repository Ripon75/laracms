const defaultTheme = require('tailwindcss/defaultTheme');
const themeColors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ...themeColors,
                primary: {
                    lightest: themeColors.blue[100],
                    lighter: themeColors.blue[200],
                    light: themeColors.blue[300],
                    DEFAULT: '#0077BB',
                    dark: themeColors.blue[500],
                    darker: themeColors.blue[600],
                    darkest: themeColors.blue[700],
                },
                primaryDanger: {
                    lightest: themeColors.red[100],
                    lighter: themeColors.red[200],
                    light: themeColors.red[300],
                    DEFAULT: themeColors.red[400],
                    dark: themeColors.red[500],
                    darker: themeColors.red[600],
                    darkest: themeColors.red[700],
                },
                primaryWarning: {
                    lightest: themeColors.amber[100],
                    lighter: themeColors.amber[200],
                    light: themeColors.amber[300],
                    DEFAULT: themeColors.amber[400],
                    dark: themeColors.amber[500],
                    darker: themeColors.amber[600],
                    darkest: themeColors.amber[700],
                },
                primaryPositive: {
                    lightest: themeColors.emerald[100],
                    lighter: themeColors.emerald[200],
                    light: themeColors.emerald[300],
                    DEFAULT: themeColors.emerald[400],
                    dark: themeColors.emerald[500],
                    darker: themeColors.emerald[600],
                    darkest: themeColors.emerald[700],
                }
            },
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
            container: {
                padding: {
                    DEFAULT: '3rem',
                    sm: '3rem',
                    lg: '4rem',
                    xl: '5rem',
                    '2xl': '5rem'
                }
                },
            height: {
                98: '480px',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/line-clamp'),],
};
