import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/styles/web.scss',
                'resources/assets/styles/admin.scss',
                'resources/scripts/app.js',
            ],
            //ssr: 'resources/scripts/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        extensions: [
            '.js',
            '.ts',
            '.jsx',
            '.tsx',
            '.vue',
            '.svelte',
        ],
    },
});
