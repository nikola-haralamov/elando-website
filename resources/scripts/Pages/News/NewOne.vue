<script setup>
import Layout from '../../Layouts/Default';
import Breadcrumbs from "../../Partials/Breadcrumbs";
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    breadcrumbs: {
        type: Object,
    },
});

</script>

<template>
    <Layout>
        <Head>
            <title>NEW INVESTOR IN ELANDO AD</title>
            <meta head-key="description" name="description" content="NEW INVESTOR IN ELANDO AD" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="row">
                <div class="wrapper flex-start big !my-0">
                    <div class="row flex-start m-8" style="width: 1200px;">
                        <Breadcrumbs :breadcrumbs="breadcrumbs" />
                    </div>
                </div>
            </section>

            <section class="row">
                <section class="wrapper">
                    <img src="/static/success-story-one/image.png" alt="" v-if="false" />
                </section>
            </section>

            <section class="row">
                <section class="wrapper small flex-start">
                    <h1>
                        NEW INVESTOR IN ELANDO AD
                    </h1>
                    <p class="calendar">
                        <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                        1 week
                    </p>
                    <div class="content">
                        <div>
                            <p>
                                An investor in eLando AD is New Vision 3 Fund, which is co-financed by the
                                European Structural and Investment Funds under the Operational Programme
                                for Innovation and Competitiveness 2014-2020 managed by the Fund of
                                Funds in Bulgaria
                            </p>
                        </div>
                    </div>
                    <div class="images">
                        <img src="/static/new-one/ERDF-Logo1-2-768x431.png" alt="ERDF" style="max-width: 32%" />
                        <img src="/static/new-one/logo_news_en-1.jpg" alt="funds" style="max-width: 32%" />
                        <img src="/static/new-one/logo_op_brand_en-1-768x236.png" alt="logo_op_brand_en" style="max-width: 32%" />
                    </div>
                </section>
            </section>
        </section>
    </Layout>
</template>

<style scoped lang="scss">
@import "../../../assets/styles/variables.scss";


.row .wrapper h1 {
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 48px;
}

.row .wrapper p {
    font-size: 14px;
    font-weight: 400;
    line-height: 21px;
    letter-spacing: 0;
    text-align: left;
}

.calendar {
    gap: 0.5rem;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    display: flex;
}

.content {
    div {
        margin-top: 3rem;
        h2 {
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 24px !important;
            line-height: 36px !important;
        }
        p {
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 16px !important;
            line-height: 130% !important;
        }
    }
}

.images {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: flex-start;
    gap: 1rem;
}
</style>
