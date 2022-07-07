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
		'green-1': "url('/img/frontend/greenbackground.png')",
		'blue-1': "url('/img/frontend/bluebackground.png')",
		'hslider-1': "url('/img/frontend/headers/Hero_Slider_Trade.png')",
		'hslider-2': "url('/img/frontend/headers/Hero_Slider_Connect.png')",
		'hslider-3': "url('/img/frontend/headers/Hero_Slider_Individual.png')",
		'hslider-4': "url('/img/frontend/headers/Hero_Slider_Consult.png')",
		'hdigit': "url('/img/frontend/headers/header_individual.png')",
		'htrade': "url('/img/frontend/headers/header_trade.png')",
		'hconnect': "url('/img/frontend/headers/header_connect.png')",
		'hconsult': "url('/img/frontend/headers/header_consult.png')",
		'htrade-1': "url('/img/frontend/headers/trade_1.png')",
		'htrade-2': "url('/img/frontend/headers/trade_2.png')",
		'htrade-3': "url('/img/frontend/headers/trade_3.png')",
		'htrade-4': "url('/img/frontend/headers/trade_4.png')",
		'htrade-5': "url('/img/frontend/headers/trade_5.png')",
		'htrade-subhome': "url('/img/frontend/headers/subheader_home.png')",
		'htrade-sub1': "url('/img/frontend/headers/subheader_1.png')",
		'htrade-sub2': "url('/img/frontend/headers/subheader_2.png')",
		'htrade-sub3': "url('/img/frontend/headers/subheader_3.png')",
		'htrade-sub4': "url('/img/frontend/headers/subheader_4.png')",
		'htrade-sub5': "url('/img/frontend/headers/subheader_5.png')",        },
        colors: {
      	  'blue-800': '#094992',
      },
    },
  },
    plugins: [
       require('flowbite/plugin')
       //require('tw-elements/dist/plugin')
    ]
};
