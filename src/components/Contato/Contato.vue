<template>

    <form ref="form" @submit.prevent="enviaMesangem">

        <input type="text" id="input" class="input_nome"   name = "nome" placeholder="Seu nome">

        <input type="text" id="input" class="input_sobrenome" name = "sobrenome" placeholder="Sobrenome">

        <br><input type="text" id="input" class="input_telefone" name = "telefone"  placeholder="telefone">

        <input type="text" id="input" class="input_email"  name = "email" placeholder="E-mail">

        <textarea id="text_area" name="message" placeholder="Assunto">

        
        </textarea>
       
        <button  type="submit" class="btn_enviar">Enviar</button>
    </form>

</template>

<script>
import emailjs from '@emailjs/browser';



export default{
    name: 'Contato',
    data(){
        return{
            form_Data:{
                nome: "",
                sobrenome: "",
                email: "",
                telefone: null,
                message: "",
                msg: null
            },
        }
    },


    methods:{

        enviaMesangem(){


            // const tamplateParams = {
            //     from_name: nome,
            //     message: message,
            //     email: email
            // }

            emailjs.sendForm('service_qrv1zon', 'template_7z9vi38', this.$refs.form, 'ni7t20CXVt0i1byAi')

            .then((result) => {
                console.log('Email enviado com sucesso!', result.text);
            }, (error) => {
                console.log('Falha ao enviar email', error.text);
            });
        }
    }
}

</script>

<style src="./style_input.css">
</style>