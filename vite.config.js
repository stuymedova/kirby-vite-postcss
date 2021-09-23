import liveReload from 'vite-plugin-live-reload'
import { resolve } from 'path'

// Docs: https://vitejs.dev/config/

export default ({ mode }) => ({
  root: 'src',
  base: mode === 'development' ? '/' : '/dist/',
  server: {
    port: 3000,
    strictPort: true,
    cors: true
  },
  build: {
    target: 'es2015',
    outDir: resolve(process.cwd(), 'public/dist'),
    rollupOptions: {
      input: resolve(process.cwd(), 'src/index.js')
    },
    manifest: true,
    emptyOutDir: true
  },
  plugins: [
    liveReload(
      '../storage/content/**/*',
      '../public/app/(templates|snippets|controllers|models)/**/*.php'
    )
  ]
})
