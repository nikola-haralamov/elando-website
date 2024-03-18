<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="header-wrapper">
        <div class="logo">
            <img src="/static/logo.svg" alt="" width="86" height="58" />
        </div>
        <nav>
            <div class="toggle-btn"></div>
            <ul>
                <li>
                    <Link href="/" :class="{ 'active': $page.url === '/' }">Home</Link>
                </li>
                <li>
                    <Link href="/about" :class="{ 'active': $page.url === '/about' }">About</Link>
                </li>
                <li>
                    <Link href="/services" :class="{ 'active': $page.url === '/services' }">Services</Link>
                </li>
                <li>
                    <Link href="/technology" :class="{ 'active': $page.url === '/technology' }">Technology</Link>
                </li>
                <li>
                    <Link href="/success-stories" :class="{ 'active': $page.url === '/success-stories' }">Success Stories</Link>
                </li>
                <li>
                    <Link href="/news" :class="{ 'active': $page.url === '/news' }">News</Link>
                </li>
                <li>
                    <Link href="/blog" :class="{ 'active': $page.url === '/blog' }">Blog</Link>
                </li>
                <li>
                    <Link href="/contacts" :class="{ 'active': $page.url === '/contacts' }">Contacts</Link>
                </li>
            </ul>
        </nav>
        <div class="languages">
            <img src="/static/languages.png" alt="languages" />
        </div>
    </div>
</template>


<style lang="scss">
header {
    position: relative;
    background: linear-gradient(90deg, rgb(1, 21, 24) 0%, rgb(1, 1, 1) 30%);

    .logo {
        justify-content: left;
    }
    .header-wrapper {
        padding: 3rem;
        max-height: 88px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        align-content: center;
        align-items: center;
    }

    nav {
        padding: 4rem;
        justify-content: center;
        ul {
            justify-content: space-between;
            display: flex;
            align-items: center;
        }

        li {
            a   {
                font-weight: 400;
                font-size: 1.2em;
                line-height: 24px;
            }
            a.active {
                font-weight: 700;
                padding-bottom: 0.25rem;
                border-bottom: 0.140rem solid rgba(255, 255, 255, 1);
            }
            margin-right: 1.25rem;

            &:last-child {
                margin-right: 0;
            }
        }
    }

    .languages {
        justify-content: right;
    }
}

@media only screen and (max-width: 1280px) {
    header {
        nav {
            padding: 1rem;
            ul  {
                li {
                    a {
                        font-size: 0.9em;
                        line-height: 18px;
                    }
                    margin-right: 0.8rem;
                }
            }
        }
    }
}

@media only screen and (max-width: 992px) {
    header {
        nav {
            padding: 3rem;
            ul  {
                li {
                    a {
                        font-size: 1.0em;
                        line-height: 20px;
                    }
                    margin-right: 1rem;
                }
            }
        }
    }
}
</style>
