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
            <title>Success Story One</title>
            <meta head-key="description" name="description" content="Success Story One" />
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
                    <img src="/static/success-story-one/image.png" alt="" />
                </section>
            </section>

            <section class="row">
                <section class="wrapper small flex-start">
                    <h1>
                        Digital Transformation – Development of a Digital Insurance Platform
                    </h1>
                    <p class="calendar">
                        <img src="/static/icons/calendar.svg" width="24" height="24" alt="date" />
                        8 weeks
                    </p>
                    <p>
                        Euroins Insurance Group AD is one of the largest independent insurance groups
                        operating in Central and Eastern Europe. The group is focused on delivering a
                        full range of insurance products in the areas of general, health and life insurance.
                    </p>




                    <div class="content">
                        <div>
                            <h2>Client</h2>
                            <p>
                                Euroins Insurance Group AD is one of the largest independent insurance groups operating in
                                Central and Eastern Europe. The group is focused on delivering a full range of insurance
                                products in the areas of general, health and life insurance. With operations in 14 countries,
                                more than 4 million customers and over 3,000 employees, its operational complexity is
                                significant.
                            </p>
                        </div>

                        <div>
                            <img src="/static/success-story-one/image-2.png" alt="">
                        </div>

                        <div>
                            <h2>Challange</h2>
                            <p>
                                When COVID-19 pandemic hit Euroins found it very difficult to keep utilising its working
                                model mostly based on offline processes and interactions.
                                The technology innovation in the insurance industry model have been growing rapidly in
                                the recent years rapidly moving into a near full digitalisation of
                                most customer facing operations.
                                Their clients wanted and during the pandemic needed a digital access to
                                their services, as well as being able to manage existing policies with
                                Euroins with few clicks, without having to visit one of their offices.
                                Moreover, the digitalisation was inevitable, since greater number of their
                                customers wanted a more cost-efficient services, which is allowed by having
                                online self-service options which optimised the operational expenditure.
                                Having only in-office service was keeping Euroins behind from their competitors,
                                who were already starting their digitalisation and that consequently led them
                                to loosing loyal clients.
                            </p>
                        </div>

                        <div>
                            <h2>Provided solution</h2>
                            <p>
                                Euroins concluded that they must digitalise their processes in order to stay
                                competitive on the market. In order to do so, they contracted eLando AD
                                to provide them with a viable solution based on the excellent specialty
                                and vast experience in the InsureTech, eLando possess.
                            </p>
                            <br />
                            <p>
                                Gaining eLando as a trusted Tech Partnerr, Euroins secured themselves with a
                                team of 6+ technology experts including solution architect, software
                                engineers, quality assurance
                                specialist and a project manager, to tackle the lack of digital
                                technology in their working model as well providing self-service
                                options online to their clients. The team built a successful “Client
                                portal” platform from scratch which allowed Euroins to provide
                                eServices to their customers for 10 of their products – from home
                                and car insurance to tourist insurance policies.
                            </p>
                            <br />
                            <p>
                                We have created and built the technology solution using a robust enterprise-grade
                                technology stack consisting of .NET Core, React, Azure, PostgreSQL.
                            </p>
                            <br />
                            <p>
                                Furthermore, while creating the digital platform from scratch, our specialists
                                used modern technology and software development practices available such as
                                Microservices architecture and Agile methodology. Assuring resilience,
                                scalability, security and future-proof relevance of the system.
                            </p>
                        </div>

                        <div>
                            <h2>Results</h2>
                            <p>
                                After eLando became the trusted Tech Partner, Euroins managed to enhance their
                                processes digitally, which led to securing new international clients and put
                                the company in leading positions in the regional market, all due to the help
                                and technological skills of our specialists who developed a modern client portal system.
                            </p>
                            <p>
                                Additionally, the system was designed to handle large volume of traffic into the client’s
                                portal which increased the customer satisfaction rates. It also dramatically lowered
                                the cost of issuing policies comparing to the offline, paper and office-based
                                approach which was dominant for the client beforehand.
                            </p>
                        </div>
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

</style>
