/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './resources/js/**/*.vue',
      ],
  theme: {
    extend: {
        container: {
            center: true,
            padding: {
                DEFAULT: '0.75rem',
            },
        },
    },
  },
  plugins: [],
}

