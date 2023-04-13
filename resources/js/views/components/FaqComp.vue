<template>

    <div class="container">
        <h1>Frequently Asked Questions</h1>

        <!-- 1 -->
        <details>
            <summary>Cos'è netflix?</summary>
            <div>
                Netflix è un servizio di streaming che offre una varietà di serie TV, film, documentari pluripremiati e
                tanto altro su una vasta gamma di dispositivi connessi a Internet.
                <br>
                Guarda quello che vuoi, quando vuoi. Il tutto a una quota mensile ridotta. C'è sempre qualcosa di nuovo
                da scoprire: aggiungiamo nuovi film e serie TV ogni settimana!
            </div>
        </details>

        <!-- 2 -->
        <details>
            <summary>Quanto costa Netflix?</summary>
            <div>
                Guarda Netflix su smartphone, tablet, Smart TV, laptop o dispositivi per lo streaming, il tutto per un
                importo mensile fisso. Piani da 5,49 € a 17,99 € al mese. Nessun costo aggiuntivo, nessun contratto.
            </div>
        </details>

        <!-- 3 -->
        <details>
            <summary>Cosa cambia se scegli il piano base con pubblicità?</summary>
            <div>
                Base con pubblicità è un ottimo modo per godersi film e serie TV a un prezzo inferiore. Puoi guardare in
                streaming i tuoi titoli preferiti su qualsiasi dispositivo e con interruzioni pubblicitarie limitate.
                Questo piano non consente i download e alcuni film e serie TV non sono disponibili a causa di
                limitazioni legate alle licenze. Sono previste anche alcune restrizioni relative alla posizione e al
                dispositivo. Scopri di più.
            </div>
        </details>

        <!-- 4 -->
        <details>
            <summary>Dove posso guardare Netflix?</summary>
            <div>
                Guarda Netflix dove vuoi, quando vuoi. Accedi al tuo account per guardare subito Netflix dal tuo
                computer su netflix.com oppure da qualsiasi dispositivo connesso a Internet che supporta l'app Netflix,
                come smart TV, smartphone, tablet, lettori multimediali per streaming e console per videogiochi.
                <br>
                Con l'app per iOS, Android e Windows 10 puoi anche scaricare i tuoi programmi preferiti. Usa la
                funzionalità di download per guardare i contenuti mentre sei in viaggio e senza connessione a Internet.
                Porta Netflix sempre con te.
            </div>
        </details>

        <!-- 5 -->
        <details>
            <summary>Come posso disdire?</summary>
            <div>
                Netflix è flessibile. Nessun contratto fastidioso e nessun impegno. Puoi facilmente disdire il tuo
                contratto online con due clic. Nessuna penale: attiva o disdici il tuo account in qualsiasi momento.
            </div>
        </details>

        <!-- 6 -->
        <details>
            <summary>Cosa posso guardare su Netflix?</summary>
            <div>
                Netflix ha un nutrito catalogo di lungometraggi, documentari, serie TV, anime, originali Netflix
                pluripremiati e tanto altro. Guarda tutto quello che vuoi, in qualsiasi momento.
            </div>
        </details>

        <!-- 7 -->
        <details>
            <summary>Netflix è adatto ai bambini?</summary>
            <div>
                L'area Netflix Bambini, già inclusa nell'abbonamento, offre ai genitori un maggiore controllo sui
                contenuti e ai più piccoli uno spazio dedicato dove guardare serie TV e film per tutta la famiglia.
                <br>
                I profili Bambini hanno un filtro famiglia con PIN che ti permette di limitare l'accesso ai contenuti in
                base alla fascia d'età e bloccare la visione di titoli specifici.
            </div>
        </details>
    </div>
</template>

<script>
export default {
    name: "FaqComp"
}
</script>

<style lang="scss" scoped>
.container {
    background-color: black;
    color: white;
    padding: 60px 0;
    border-bottom: 7px solid rgb(87, 85, 85);

    h1 {
        text-align: center;
        margin-bottom: 30px;
    }

    details {
        background-color: #303030;
        font-size: 1.5rem;
        width: 60%;
        margin: auto;
        margin-bottom: 10px;
        cursor: pointer;

        summary {
            padding: .5em 1.3rem;
            list-style: none;
            display: flex;
            justify-content: space-between;
            transition: height 1s ease;

            &::-webkit-details-marker {
                display: none;
            }
        }

        &[open] summary {
            border-bottom: 1px solid #aaa;
            margin-bottom: .5em;
        }

        &[open] div {
            padding: .5em 1em;
        }

        &[open] summary:after {
            content: "\00D7";
        }
    }
}
</style>