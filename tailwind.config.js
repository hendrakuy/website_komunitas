/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
theme: {
  extend: {
    fontFamily: {
      sans: ['Poppins', 'ui-sans-serif', 'system-ui']
    },
    keyframes: {
      fadeInUp: {
        '0%': { opacity: '0', transform: 'translateY(10px)' },
        '100%': { opacity: '1', transform: 'translateY(0)' },
      },
      fadeInDown: {
        '0%': { opacity: '0', transform: 'translateY(-10px)' },
        '100%': { opacity: '1', transform: 'translateY(0)' },
      },
    },
    animation: {
      'fade-in-up': 'fadeInUp 0.5s ease-out forwards',
      'fade-in-down': 'fadeInDown 0.5s ease-out forwards',
    },
  }
},
plugins: [
  require('@tailwindcss/typography'),
],
}


