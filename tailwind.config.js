/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
      colors: {
        black: '#000',
        white: '#fff',
        primary: '#e9c3b7',
        beige: '#F5F0E1',
        transparent: 'transparent',
        current: 'currentColor'
      }, // Extend Tailwind's default colors
  },
  plugins: [],
};

export default config;
