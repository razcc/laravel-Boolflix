<template>
    <div id="login">
        <header class="header">
            <!-- Logo -->
            <h1 class="logo">Netflix</h1>

            <div class="cont_login">
                <!-- Select lingua     -->
                <select name="lingua" id="lingua">
                    <option value="italiano">
                        Italiano
                    </option>

                    <option value="english">
                        English
                    </option>
                </select>

                <!-- Login -->
                <a class="login_btn" href="/login">Accedi</a>
            </div>
        </header>

        <section>
            <h2>Film, serie TV e tanto altro. Senza limiti.</h2>
            <div>
                <span>Guarda ciò che vuoi ovunque. Disdici quando vuoi.</span>
            </div>
            <div>
                <span>Vuoi guardare Netflix? Registrati per abbonarti.</span>
            </div>

            <!-- INPUT MAIL -->
            <div>
                <a class="reg_btn" href="/register">
                    Registrati
                </a>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "LoginRegistration"
}
</script>

<style lang="scss" scoped>
#login {
    height: 100vh;
    padding: 0 40px;
    position: relative;
    background: rgb(0 0 0 / 70%);
    color: white;

    // Backgrounf immage
    &::before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background-image: url(../assets//Netflix1.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;

    }

    // Header
    .header {
        height: 15%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px;

        .logo {
            color: red;
            letter-spacing: 2px;
            font-size: 2.5rem;
        }

        .cont_login {
            display: flex;
            gap: 50px;

            // Login BTN
            .login_btn {
                background-color: red;
                padding: 7px 10px;
                border: none;
                transition: all .4s;
                border-radius: 5px;
                color: white;
                text-decoration: none;
                font-weight: bold;

                &:hover {
                    font-size: 1.2rem;
                    background-color: rgba(168, 40, 40, 0.932);
                }
            }

            // Lingua
            #lingua {
                background-color: rgba(0, 0, 0, 0.952);
                color: white;
                border: 1px solid gray;
                padding: 5px 12px;
                text-align: center;
                border-radius: 5px;

            }
        }
    }

    section {
        height: 85%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;

        h2 {
            font-size: 3.5rem;
        }

        span {
            font-size: 1.7rem;
        }

        input {
            width: 400px;
            height: 40px;
            background-color: rgba(0, 0, 0, 0.747);
            color: white;
            border-radius: 5px;
            padding: 0px 20px;
        }

        .reg_btn {
            background-color: red;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: all .7s;

            &:hover {
                font-size: 1.2rem;
                background-color: rgb(167, 10, 10)
            }

        }
    }
}
</style>