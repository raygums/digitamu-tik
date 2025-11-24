import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import tailwindcss from '@tailwindcss/vite'

// https://vite.dev/config/
export default defineConfig({
  plugins: [
    tailwindcss(),
    react()
  ],
  server: {
    proxy: {
      // Only proxy API requests (POST, PUT, DELETE) to Laravel backend
      // GET requests should be handled by React Router for client-side routing
    },
  },
})

