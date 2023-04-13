<template>
    <div id="footer">
        <section>
            <div class="domande">
                <span>Domande? Chiama 800-130-364</span>
            </div>

            <div class="list_cont">
                <div class="col_left">
                    <ul>
                        <li>
                            <a href="#">Domande frequenti</a>
                        </li>
                        <li>
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Opportunità di lavoro</a>
                        </li>
                        <li>
                            <a href="#">Come guardare Netflix</a>
                        </li>
                        <li>
                            <a href="#">Preferenze per i cookie</a>
                        </li>
                        <li>
                            <a href="#">Test di velocità</a>
                        </li>
                        <li>
                            <a href="#">Solo su Netflix</a>
                        </li>

                    </ul>
                </div>

                <div class="center">
                    <ul>
                        <li>
                            <a href="#">Condizioni carta regalo</a>
                        </li>
                        <li>
                            <a href="#">Media Center</a>
                        </li>
                        <li>
                            <a href="#">Riscatta carte regalo</a>
                        </li>
                        <li>
                            <a href="#">Condizioni di utilizzo</a>
                        </li>
                        <li>
                            <a href="#">Informazioni sull'azienda</a>
                        </li>
                        <li>
                            <a href="#">Garanzia legale</a>
                        </li>

                    </ul>
                </div>

                <div class="col_right">
                    <ul>
                        <li>
                            <a href="#">Centro assistenza</a>
                        </li>
                        <li>
                            <a href="#">Rapporti con gli investitori</a>
                        </li>
                        <li>
                            <a href="#">Acquista carte regalo</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Contattaci</a>
                        </li>
                        <li>
                            <a href="#">Note legali</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="lingua_cont">
                <!-- Select lingua     -->
                <select name="lingua" id="lingua">
                    <option value="italiano">
                        Italiano
                    </option>

                    <option value="english">
                        English
                    </option>
                </select>

                <div>
                    <span>
                        Netflix Italia
                    </span>
                </div>
            </div>

        </section>
    </div>
</template>

<script>
export default {
    name: "FooterComp"
}
</script>

<style lang="scss" scoped>
#footer {
    background-color: black;
    color: rgb(206, 201, 201);
    padding: 40px 0;

    section {
        width: 60%;
        margin: auto;

        .list_cont {
            margin: 30px 0;

            display: flex;
            gap: 200px;

            ul {
                list-style: none;

                li {
                    margin-bottom: 10px;
                }
            }

            a {
                color: rgb(206, 201, 201);
            }
        }

        .lingua_cont {

            // Lingua
            #lingua {
                background-color: rgba(0, 0, 0, 0.952);
                color: white;
                border: 1px solid gray;
                padding: 5px 12px;
                text-align: center;
                border-radius: 5px;
                margin-bottom: 20px;
            }
        }

    }
}
</style>