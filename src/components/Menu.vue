<template>

  <header :class="{ 'scrolled-nav': scrolledNav }">

    <nav>

      <a target="_blank" href="https://www.linkedin.com/in/marco-antonio-caldeira-97548616a/"><img class="img_linkedin"  src="../assets/img/linkedin.png" /></a>  
      <a target="_blank" href="https://github.com/MarcoantonioCaldeira"><img class="img_github"  src="../assets/img/github.png" /></a>
      <ul v-show="!mobile" class="navigation">
        <li><a v-for="link in links" :href="link.url" :key="link.id" @click="handleClick">{{ link.text }}</a></li>
      </ul>

      <div class="icon">
        <span  v-show="mobile" @click="toggleMobileNav" >
          <i class="fa-solid fa-bars" :class="{ 'icon-active': mobileNav}"></i>
        </span> 
        <!-- <button @click="toggleMobileNav" v-show="mobile">Clique aqui</button> -->
      </div>

      <transition name="mobile-nav">
        <ul v-show="mobileNav" class="dropdown-nav">
          <li><a v-for="link in links" :href="link.url" :key="link.id" @click="handleClick">{{ link.text }}</a></li>
        </ul>
      </transition>
    </nav>

</header>

</template>

<script>
import '@fortawesome/fontawesome-free/css/all.css'


export default {
    name: 'Menu',
    data(){
        return{
          scrolledNav: null,
          mobile: null,
          mobileNav: null,
          windowWidth: null,

          links: [
            { id: 1, text: 'Inicio', url: '#tamplate' },
            { id: 2, text: 'Serviços', url: '#Area_Solucoes' },
            { id: 3, text: 'Contato', url: '#Contato' },
          ],
        }
    },

    created(){
      window.addEventListener("resize", this.checkScreen);
      this.checkScreen();
    },

    mounted(){
      window.addEventListener("scroll", this.updateScroll);
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

      },

      toggleMobileNav() {
        this.mobileNav = !this.mobileNav;
      },

      updateScroll(){
        const scrollPosition = window.scrollY;
        if(scrollPosition > 50){
              this.scrolledNav = true;
              return;
        }
        this.scrolledNav = false;
      },

      checkScreen() { 
          this.windowWidth = window.innerWidth;
          if(this.windowWidth <= 750){
            this.mobile = true;
            return;
          }
          this.mobile = false;
          this.mobileNav = false;
          return;
      },

    }
}

</script>
<style lang="scss" src="./estilo_menu.scss">

</style>