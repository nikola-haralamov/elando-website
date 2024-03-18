<script setup>
import Layout from '../Layouts/Default';
import { Head } from '@inertiajs/vue3';

defineProps({ user: Object });

</script>

<template>
    <Layout>
        <Head>
            <title>Success Stories</title>
            <meta head-key="description" name="description" content="Success Stories" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="row">
                <div class="wrapper small">
                    <h1>Success Stories</h1>
                    <p class="gray">
                        eLando is a professional services company and we have provided technology expertise and
                        software solutions for years. Our services range from complete design and development of
                        custom software applications to maintenance of existing applications.
                    </p>
                </div>
            </section>

            <section class="row">
                <section class="case-studies">
                    <h2>Case Studies</h2>
                    <div class="items">
                        <div class="item border-top-yellow">
                            <img src="/static/success-stories/case-study-1.png"
                                 alt="Digital Transformation – Development of a Digital Insurance Platform" />
                            <h3>Digital Transformation – Development of a Digital Insurance Platform</h3>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups
                                operating in Central and Eastern Europe. The group is focused on delivering
                                a full range of insurance products in the areas of general, health and life insurance.
                            </p>
                        </div>
                        <div class="item border-top-yellow">
                            <img src="/static/success-stories/case-study-2.png"
                                 alt="Digital Transformation – Development of a Digital Insurance Platform" />
                            <h3>Digital Transformation – Development of a Digital Insurance Platform</h3>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups
                                operating in Central and Eastern Europe. The group is focused on delivering
                                a full range of insurance products in the areas of general, health and life insurance.
                            </p>
                        </div>
                        <div class="item border-top-yellow">
                            <img src="/static/success-stories/case-study-3.png"
                                 alt="Digital Transformation – Development of a Digital Insurance Platform" />
                            <h3>Digital Transformation – Development of a Digital Insurance Platform</h3>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups
                                operating in Central and Eastern Europe. The group is focused on delivering
                                a full range of insurance products in the areas of general, health and life insurance.
                            </p>
                        </div>
                    </div>
                </section>


                <section class="our-partners">
                    <h2>Our partners</h2>


                    <div class="items">
                        <div class="item">
                            <img src="/static/success-stories/partners/bianor.svg" alt="Bianor" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/at-t.svg" alt="AT & T" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/amexis.svg" alt="amexis" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/adastra.svg" alt="adastra" />
                        </div>



                        <div class="item">
                            <img src="/static/success-stories/partners/alianz.svg" alt="Alianz" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/harley.svg" alt="Harley" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/scalefocus.svg" alt="Scalefocus" />
                        </div>
                        <div class="item">
                            <img src="/static/success-stories/partners/volkswagen.svg" alt="Volkswagen" />
                        </div>

                    </div>

                </section>
            </section>

            <section class="footer">
                <div>
                </div>
            </section>
        </section>
    </Layout>
</template>

<style scoped lang="scss">
@import "../../assets/styles/variables.scss";
.case-studies {
    max-width: 1200px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-bottom: 3rem;
    h2 {
        font-style: normal;
        font-weight: 300;
        font-size: 50px;
        line-height: 75px;
    }

    .items {
        max-width: 1200px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: flex-start;
        justify-content: flex-start;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 3rem;
        .item {
            max-width: 543px;
            min-height: 350px;
            background: rgba(21, 21, 29, 0.81);
            display: flex;
            align-items: center;
            gap: 12px;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: flex-start;
            justify-content: flex-start;
            h3 {
                padding-left: 18px;
                padding-right: 18px;
                font-style: normal;
                font-weight: 700;
                font-size: 20px;
                line-height: 150%;
            }
            p  {
                padding-left: 18px;
                padding-right: 18px;
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height: 150%;
            }
        }
    }
}

.our-partners {
    max-width: 1200px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-bottom: -20rem;
    h2 {
        font-style: normal;
        font-weight: 300;
        font-size: 50px;
        line-height: 75px;
    }

    .items {
        background: linear-gradient(
                95.48deg, rgba(79, 79, 79, 0.8) 6.15%,
                rgba(56, 56, 63, 0.352) 49.51%,
                rgba(56, 56, 63, 0) 93.23%,
                rgba(56, 56, 63, 0) 93.23%
        );
        border: 1px solid rgba(59, 62, 62);
        //border: 1px solid rgba(255, 255, 255, 0.23);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 4px;
        max-width: 1200px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;
        gap: 6rem;
        padding: 2rem 4rem;
        .item {
            max-width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            gap: 4rem;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
        }
    }
}


.footer {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-content: center;
    flex-wrap: wrap;
    align-items: center;
    div {
        background-image: url("../../../public/static/shapes/shape-9.svg");
        background-repeat: no-repeat, no-repeat;
        background-position: center, bottom;
        width: 1172px;
        height: 353px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        flex-wrap: wrap;
        align-items: center;
        max-width: 1366px;
        h2 {
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 90px;
        }
        p {
            font-family: $font-small;
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 150%;
            text-align: center;
            color: #A1A6B1;
        }
    }
}

</style>
