<template>
    <div>
        <LoginRegistration />
        <FeaturesComp />
        <FaqComp />
        <FooterComp />
    </div>
</template>

<script>
import LoginRegistration from './components/LoginRegistration.vue'
import FeaturesComp from './components/FeaturesComp.vue'
import FaqComp from './components/FaqComp.vue'
import FooterComp from './components/FooterComp.vue'

    export default {
        name:"App",
        components: {
            LoginRegistration,
            FeaturesComp,
            FaqComp,
            FooterComp
        }
    }
</script>

<style lang="scss">
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

</style>