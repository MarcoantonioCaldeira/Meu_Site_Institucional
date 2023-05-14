<template>

     <div id="menu">
      <div id="area_idioma">

      </div>
      <a target="_blank" href="https://www.linkedin.com/in/marco-antonio-caldeira-97548616a/"><img class="img_linkedin"  src="../assets/img/linkedin.png" /></a>  
      <a target="_blank" href="https://github.com/MarcoantonioCaldeira"><img class="img_github"  src="../assets/img/github.png" /></a>
      <ul>
        <li><a v-for="link in links" :href="link.url" :key="link.id" @click="handleClick">{{ link.text }}</a></li>
      </ul>
    </div>

</template>

<script>



export default {
    name: 'Menu',
    data(){
        return{
          links: [
            { id: 1, text: 'Inicio', url: '#tamplate' },
            { id: 2, text: 'Serviços', url: '#Area_Solucoes' },
            { id: 3, text: 'Contato', url: '#Contato' },
          ],
        }
    },
    methods:{
      handleClick(e){

          e.preventDefault()
          const target = e.target.getAttribute('href')
          const location = document.querySelector(target).offsetTop

          window.scrollTo({
              left: 0,
              top: location - -70,
          })

      }
    }
}

</script>
<style src="./style.scss"  lang="scss"></style>