<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="footer-wrapper">
        <section class="footer-1">
            <img src="/static/footer-logo.svg" alt="fl" />
            <p>
                eLando is a subsidiary of eLando AD - Joint Stock Company specialising in software
                engineering services and creating innovative digital products.
            </p>
            <ul>
                <li>
                    <Link href="#" :class="{ 'active': $page.url === '#' }">Terms and conditions</Link>
                </li>
                <li>
                    <Link href="#" :class="{ 'active': $page.url === '#' }">Privacy Policy</Link>
                </li>
            </ul>
        </section>
        <section class="footer-2">
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
                    <Link href="#" :class="{ 'active': $page.url === '#' }">Success Stories</Link>
                </li>
                <li>
                    <Link href="#" :class="{ 'active': $page.url === '#' }">News</Link>
                </li>
                <li>
                    <Link href="/contacts" :class="{ 'active': $page.url === '/contacts' }">Contacts</Link>
                </li>
            </ul>
        </section>
        <section class="footer-3">
            <div>
                <a href="https://www.linkedin.com/company/elando" target="_blank">
                    <img src="/static/linked-in.png" alt="LinkedIn" />
                </a>
            </div>
        </section>
        <section class="footer-4">
            <div class="contacts">
                <h4>Contact us</h4>
                <p>
                    Contact us to start your digital journey with us!
                </p>
                <a href="/contacts">Contact us</a>
            </div>
        </section>
    </div>
</template>

<style lang="scss">
@import "../../assets/styles/variables.scss";
footer {
    position: relative;
    background-color: rgb(21, 21, 29);
    border-top: rgb(59, 59, 59) 2px solid;

    .footer-wrapper {
        padding: 3rem;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: center;
        align-content: center;
        align-items: center;
        gap: 5rem;

        .footer-1 {
            max-width: 380px;
            p {
                padding: 30px 0 30px 0;
                font-family: $font-small;
                font-size: 0.875rem;
                line-height: 1.313rem;
                color: rgb(108,108, 114);
            }
            ul {
                li {
                    padding: 8px 0 8px 0;
                    a {
                        font-style: normal;
                        font-weight: 700;
                        font-size: 14px;
                        line-height: 21px;
                        text-align: left;
                    }
                }
            }
        }


        .footer-2 {
            max-width: 140px;
            ul {
                li {
                    padding: 8px 0 8px 0;
                    a {
                        font-style: normal;
                        font-weight: 700;
                        font-size: 18px;
                        line-height: 27px;
                        text-align: left;
                    }
                }
            }
        }

        .footer-3 {
            max-width: 120px;
        }

        .footer-4 {
            max-width: 620px;

            .contacts {
                padding-left: 28px;
                padding-top: 42px;
                min-width: 309px;
                min-height: 255px;
                border: 1px solid rgba(103, 103, 108);
                border-radius: 4px;

                background: linear-gradient(95.48deg, rgba(56, 56, 63, 0.8) 6.15%, rgba(56, 56, 63, 0.352) 49.51%, rgba(56, 56, 63, 0) 93.23%);
                filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
                h4 {
                    font-style: normal;
                    font-weight: 700;
                    font-size: 28px;
                    line-height: 42px;
                }
                p {
                    max-width: 250px;
                    font-family: $font-small;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 24px;
                    color: rgba(171, 171, 174);
                }

                a {
                    margin: 5% auto auto auto;
                    background-color: rgb(53, 53, 60);
                    border: 1px solid rgba(103, 103, 108);
                    border-radius: 4px;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
            }
        }

    }

}


@media only screen and (max-width: 1200px) {
    footer {
        background-color: rgba(1, 2, 2, 1);
        border-top: none;
    }
}
</style>
