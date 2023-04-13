<template>
    <div class="features">
        <!-- 1 -->
        <section>
            <div class="col_left">
                <h2>Goditi Netflix sulla tua TV.</h2>

                <p>
                    Guarda Netflix su smart TV, Playstation, Xbox, Chromecast, Apple TV, lettori Blu-ray e molti altri
                    dispositivi.
                </p>
            </div>

            <div class="col_right">
                <img src="../assets/img1.png" alt="TV">
            </div>
        </section>

        <!-- 2 -->
        <section>


            <div class="col_right">
                <img src="../assets/img2.png" alt="TV">
            </div>
            <div class="col_left">
                <h2>Guarda Netflix ovunque.</h2>

                <p>
                    Cellulare, tablet, laptop e TV: scegli tu cosa usare per guardare in streaming film e serie TV senza
                    limiti e senza spendere di più.
                </p>
            </div>
        </section>


        <!-- 3 -->
        <section>
            <div class="col_left">
                <h2>Crea profili per i bambini.</h2>

                <p>
                    I bambini scoprono nuove avventure in compagnia dei loro personaggi preferiti in uno spazio tutto
                    loro già incluso nel tuo abbonamento.
                </p>
            </div>

            <div class="col_right">
                <img src="../assets/img3.png" alt="TV">
            </div>
        </section>

        <!-- 4 -->
        <section class="last_section">


            <div class="col_right">
                <img src="../assets/img4.png" alt="TV">
            </div>
            <div class="col_left">
                <h2>Scarica le tue serie da guardare offline.</h2>

                <p>
                    Download disponibili in tutti i piani tranne Base con pubblicità.
                </p>
            </div>
        </section>



    </div>
</template>

<script>
export default {
    name: "FeaturesComp"
}
</script>

<style lang="scss" scoped>
.features {
    background-color: black;
    color: white;

    section {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        border-top: 7px solid rgb(87, 85, 85);
        padding: 10rem 9rem;

        h2 {
            font-size: 2.5rem;
        }

        p {
            font-size: 1.5rem;
            padding-top: 10px;
        }

        .col_right {

            display: flex;
            justify-content: center;

            img {
                width: 70%;
            }
        }

    }

    .last_section{
        border-bottom: 7px solid rgb(87, 85, 85);

    }
}
</style>