<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    breadcrumbs: {
        type: Object,
    },
});

</script>

<template>
    <nav class="breadcrumbs" v-if="breadcrumbs.length">
        <ol>
            <template v-for="breadcrumb in breadcrumbs">
                <li v-if="breadcrumb.exist">
                    <Link
                        :href="route(`${breadcrumb.route}`)"
                    >
                        {{ breadcrumb.label }}
                    </Link>
                </li>
            </template>
        </ol>
    </nav>
</template>

<style scoped lang="scss">
@import "../../assets/styles/variables.scss";

nav.breadcrumbs {
    display: flex;
    width: 100%;
    ul, ol {
        list-style-type: none;
        padding-left: 0;
        margin-top: 0;
        margin-bottom: 0;
        color: rgba(255, 255, 255);
        li {
            display:inline;
            text-align: -webkit-match-parent;
            a {
                font-style: normal;
                font-weight: 300;
                font-size: 16px;
                line-height: 24px;
            }
        }
        li::after {
            display: inline-block;
            content: '>';
            margin: 0 .6em;
            color: rgba(255, 255, 255);
        }
        li:last-of-type::after {
            display: none;
        }
        li:last-of-type a {
            font-style: normal;
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
        }
    }
}
</style>
