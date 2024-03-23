<script setup>
import Layout from '../Layouts/Default';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Layout>
        <Head>
            <title>Contact</title>
            <meta head-key="description" name="description" content="Contact description" />
        </Head>

        <section class="list-grid section relative overflow-hidden">
            <div class="glow-blue blur-medium glow-motion -top-60 -left-60 w-[60rem] h-[60rem] -z-10 opacity-50" aria-hidden="true" style="animation-delay: 4s">
            </div>
            <div class="glow-blue blur-medium glow-motion top-96 -right-60 w-[50rem] h-[50rem] -z-10 opacity-50" aria-hidden="true">
            </div>

            <section class="row">
                <div class="wrapper left">
                    <section class="info">
                        <h1>Contacts</h1>
                        <p>Send us a message or reach out our contact details down below.</p>

                        <div class="addresses">
                            <div class="emails">
                                <div class="heading">
                                    <img src="/static/icons/calendar.svg"
                                         alt=""
                                         width="24"
                                         height="24"
                                    />
                                    <h2>Email adresses</h2>
                                </div>
                                <div class="content">
                                    <p>info@elando.com</p>
                                    <p>sales@elando.com</p>
                                </div>

                            </div>

                            <div class="locations">
                                <div class="heading">
                                    <img src="/static/icons/location.svg"
                                         alt=""
                                         width="24"
                                         height="24"
                                    />
                                    <h2>Locations</h2>
                                </div>
                                <div class="content">
                                    <p>
                                        <strong>Main office Sofia</strong> :
                                        6th, Alexander Zhendov Street, floor 8, office 802, Sofia 1113, Bulgaria
                                    </p>
                                    <p>
                                        <strong>Plovdiv</strong> :
                                        Hristo Botev Blvd. No. 92 B, section A, floor 4
                                    </p>
                                    <p>
                                        <strong>Shumen</strong> :
                                        39th, Saedinenie Street, floor 2, Shumen 9700, Bulgaria
                                    </p>
                                    <p>
                                        <strong>Stara Zagora</strong> :
                                        28th, Alexander Battenberg boulevard, fl. 4,
                                        office 26, Stara Zagora, 6003, Bulgaria
                                    </p>
                                    <p>
                                        <strong>Manchester</strong> :
                                        Bonded Warehouse 18 Lower Byrom Street, United Kingdom
                                    </p>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="form">
                        <form>
                            <div>
                                <label for="email" class="block font-bold mb-2">
                                    Email address
                                </label>
                                <input type="text"
                                       name="email"
                                       placeholder="Enter your email address..."
                                />
                            </div>
                            <div>
                                <label for="subject" class="block font-bold mb-2">
                                    Subject for contacting
                                </label>
                                <input type="text"
                                       name="subject"
                                       placeholder="Enter subject..."
                                />
                            </div>
                            <div>
                                <label for="name" class="block font-bold mb-2">
                                    First and last name
                                </label>
                                <input type="text"
                                       name="name"
                                       placeholder="Enter your names..."
                                />
                            </div>
                            <div>
                                <label for="phone" class="block font-bold mb-2">
                                    Phone number
                                </label>
                                <input type="text"
                                       name="phone"
                                       placeholder="Enter your phone number..."
                                />
                            </div>
                            <div>
                                <label for="question" class="block font-bold mb-2">
                                    Your question
                                </label>
                                <textarea type="text"
                                       name="question"
                                       placeholder="Describe detailed your question"
                                />
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="terms" />
                                <label for="terms" class="font-bold mb-2">
                                    By selecting this checkbox you agree with Privacy policy and Terms and Conditions
                                </label>
                            </div>
                            <div>
                                <button type="submit">Send message</button>
                            </div>
                        </form>
                    </section>
                </div>
            </section>
        </section>
    </Layout>
</template>

<style scoped lang="scss">
@import "../../assets/styles/variables.scss";

.wrapper {
    gap: 3rem;
}
.info {
    max-width: 550px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-content: flex-start;
    justify-content: flex-start;
    align-items: flex-start;
    h1 {
        font-family: $font;
        font-style: normal;
        font-weight: 600;
        font-size: 62px;
        line-height: 93px;
        color: #FFFFFF;
    }
    p {
        font-family: $font-small;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 21px;
        color: #A1A6B1;
        text-align: left;
    }

    .addresses {
        margin-top: 2rem;

        .emails, .locations {
            margin-top: 3rem;
            .heading {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                align-content: flex-start;
                justify-content: flex-start;
                align-items: flex-start;
                gap: 0.5rem;
                h2 {
                    font-style: normal;
                    font-weight: 500;
                    font-size: 20px;
                    line-height: 30px;
                }
            }

            .content {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                align-content: flex-start;
                justify-content: flex-start;
                align-items: flex-start;
                margin-top: 1rem;
                gap: 0.5rem;
                p {
                    font-style: normal;
                    font-weight: 300;
                    font-size: 14px;
                    line-height: 21px;
                    text-align: left;
                    b, strong {
                        font-style: normal;
                        font-weight: 700;
                        font-size: 14px;
                        line-height: 21px;
                    }
                }
            }

        }
    }
}

.form {
    max-width: 420px;

    div {
        margin-top: 1rem;
    }

    .checkbox {
        gap: 0.5rem;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: flex-start;
        justify-content: flex-start;
        align-items: flex-start;
        label {
            font-style: normal;
            font-weight: 300;
            font-size: 12px;
            line-height: 18px;
            display: flex;
            align-items: center;
        }
    }

    label {
        min-width: 418px;
        height: 24px;

        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
    }


    input[type="checkbox"] {
        align-items: center;
        padding: 0;
        width: 20px;
        height: 20px;
    }

    textarea, input {
        width: 418px;
        height: 40px;
        box-sizing: border-box;

        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 10px 10px 10px 12px;
        gap: 10px;
        border: 1px solid #FFFFFF;
        border-radius: 4px;
        background: transparent;
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #A1A6B1;
    }
    textarea {
        width: 418px;
        height: 80px;
    }

    textarea:focus, input:focus {
        outline: none;
    }

    button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 14px 27px;
        gap: 10px;
        width: 418px;
        height: 55px;
        background: #FFFFFF;
        border-radius: 4px;
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        color: #010101;
    }

}

</style>
