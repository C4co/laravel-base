const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Heebo', 'sans-serif'],
            },

            backgroundImage: {
                'login': "url('https://images.unsplash.com/photo-1445452642132-b08fef5f689d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670&q=80')",
                'register': "url('https://images.unsplash.com/photo-1580318598552-a1afea3d905b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670&q=80')",
                'forgot-password': "url('https://images.unsplash.com/photo-1522775417749-29284fb89f43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80')",
                'reset-password': "url('https://images.unsplash.com/photo-1550724026-f20ae6b4a592?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670&q=80')",
                'two-factor': "url('https://images.unsplash.com/photo-1584378469704-d455e6f313fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670&q=80')"
            }
        },

        screens: {
            '2xl': { max: '1535px' },
            // => @media (max-width: 1535px) { ... }

            'xl': { max: '1279px' },
            // => @media (max-width: 1279px) { ... }

            'lg': { max: '1023px' },
            // => @media (max-width: 1023px) { ... }

            'md': { max: '767px' },
            // => @media (max-width: 767px) { ... }

            'sm': { max: '639px' },
            // => @media (max-width: 639px) { ... }

            'xs': { max: '360px' },
            // => @media (max-width: 360px) { ... }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
