const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    content: [
        './storage/framework/views/*.php',
        './resources/content/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./node_modules/flowbite/**/*.js"
    ],
  theme: {
      container: {
          screens: {
              sm: '640px',
              md: '768px',
              lg: '984px',
              xl: '1280px',
              '2xl': '1350px',
          },
      },
    extend: {
        height: {
            '128': '32rem',
            '160': '40rem',
            '196': '48rem',
        },
        fontFamily: {
            'sans': ['Overpass', ...defaultTheme.fontFamily.sans],
        },
        backgroundImage: {
            'slide-1': "url('http://localhost/laravel/lubey-frontend/public/img/normal/Hero_Slider_Trade.png')",
            'slide-2': "url('http://localhost/laravel/lubey-frontend/public/img/normal/Hero_Slider_Connect.png')",
            'slide-3': "url('http://localhost/laravel/lubey-frontend/public/img/normal/Hero_Slider_Individual.png')",
            'slide-4': "url('http://localhost/laravel/lubey-frontend/public/img/normal/Hero_Slider_Consult.png')",
            'green-1': "url('http://localhost/laravel/lubey-frontend/public/img/frontend/greenbackground.png')",
            'blue-1': "url('http://localhost/laravel/lubey-frontend/public/img/frontend/bluebackground.png')",
        }
    },
  },
    plugins: [
       require('flowbite/plugin')
    ]
};
