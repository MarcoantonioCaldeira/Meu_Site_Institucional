<template>

  <header :class="{ 'scrolled-nav': scrolledNav }">

    <nav>
    
      <div id="logo">
        <img src="../assets/img/logo.png" style="   position: absolute; width: 5%; margin-top: 27px; margin-left: -40px;"/>
      </div>
      <div class="icons">
        <a target="_blank" href="https://www.linkedin.com/in/marco-antonio-caldeira-97548616a/"><img class="img_linkedin"  src="../assets/img/linkedin.png" /></a>  
        <a target="_blank" href="https://github.com/MarcoantonioCaldeira"><img class="img_github"  src="../assets/img/github.png" /></a>
      </div>

      <!-- <li>
        <select  change="mudar_idioma"   v-model="idiomaSelecionado" style="position: absolute; left: 105%;">
          <option v-for="lang in idiomas" :key="lang" :value="lang">{{ $t(`language.${lang}`) }}</option>
        </select>
      </li> -->
      
      <ul v-show="!mobile" class="navigation">
        <li v-for="link in links" :key="link.id" @mouseover="hoveredItem = link.id" @mouseout="hoveredItem = null" :class="{ 'hovered': hoveredItem === link.id }">
          <a  :href="link.url" @click="handleClick">{{ link.text }}</a>
        </li>
      </ul>
      

      <div class="icon">
        <span  v-show="mobile" @click="toggleMobileNav" >
          <i class="fa-solid fa-bars" :class="{ 'icon-active': mobileNav}"></i>
        </span> 
      </div>

      <transition name="mobile-nav">
        <ul v-show="mobileNav" class="dropdown-nav">
        <li>
          <a v-for="link in links" :href="link.url" :key="link.id" @click="handleClick">
            <img v-if="link.id === 'linkedin'" class="img_linkedin" src="../assets/img/linkedin.png" style="height: 30px; width: auto; margin-left: -170px; margin-top: 470px;"/>
            <img v-if="link.id === 'github'" class="img_github" src="../assets/img/github.png" style="height: 30px; width: auto; margin-left: -120px; margin-top: 470px;"/>
            <span v-if="link.id !== 'linkedin' && link.id !== 'github'">{{ link.text }}</span>
          </a>
        </li>
      </ul>
      </transition>

    </nav>

</header>

</template>

<script>
import '@fortawesome/fontawesome-free/css/all.css'
import VueI18n from 'vue-i18n';

export default {
    name: 'Menu',
    data(){
        return{
          scrolledNav: null,
          mobile: null,
          mobileNav: null,
          windowWidth: null,
          hoveredItem: null,
          idiomas: ['pt', 'en'],
          idiomaSelecionado: 'en',

          links: [
            { id: 1, text: 'Inicio', url: '#tamplate' },
            { id: 2, text: 'Serviços', url: '#Area_Solucoes' },
            { id: 3, text: 'Contato', url: '#Contato' },
            {id: 'linkedin'},
            {id: 'github'}
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

      mudar_idioma(){
        this.$i18n.locale = this.idiomaSelecionado;
      },

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
<style lang="scss" src="./estilo_menu.scss" scoped>

</style>