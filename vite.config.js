import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { svelte } from "@sveltejs/vite-plugin-svelte";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/assets/styles/app.scss", "resources/web/app.ts"],
            refresh: true,
        }),
        svelte({}),

    ],
});
