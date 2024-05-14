import { defineConfig } from "vite";

export default defineConfig({
  publicDir: "assets/img",
  build: {
    outDir: "build",
    rollupOptions: {
      input: ["assets/js/index.js", "assets/scss/index.scss"],
      output: {
        entryFileNames: "[name].js",
        assetFileNames: ({ name }) => {
          if (/\.(gif|jpe?g|png|svg)$/.test(name ?? "")) {
            return "images/[name][extname]";
          }
          if (/\.(otf|ttf|woff|woff2)$/.test(name ?? "")) {
            return "fonts/[name][extname]";
          }
          return "[name][extname]";
        },
      },
    },
  },
});
