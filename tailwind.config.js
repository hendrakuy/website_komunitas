/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",   // kalau pakai Vue
    "./resources/**/*.jsx",   // kalau pakai React
    "./resources/**/*.tsx",   // kalau pakai TypeScript React
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", "sans-serif"], // jadikan default font
      },
    },
  },
  plugins: [],
}
