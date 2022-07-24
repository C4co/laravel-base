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
                'login': "url('https://res.cloudinary.com/c4co/image/upload/v1658690933/laravel-base/02_ugxdcx.jpg')",
                'register': "url('https://res.cloudinary.com/c4co/image/upload/v1658690933/laravel-base/03_ataqag.jpg')",
                'forgot-password': "url('https://res.cloudinary.com/c4co/image/upload/v1658690933/laravel-base/05_pmbuec.jpg')",
                'reset-password': "url('https://res.cloudinary.com/c4co/image/upload/v1658690933/laravel-base/04_wwfena.jpg')",
                'two-factor': "url('https://res.cloudinary.com/c4co/image/upload/v1658690933/laravel-base/01_ii8ctp.jpg')"
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
