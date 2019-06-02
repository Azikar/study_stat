<template>
<div>
<div class="certificate_card"  v-if="certificates" v-for="certificate in certificates">
    
        <img src="/img/certificates/olive.png">
        <div class="certificate_info">
            <div class="certificate_title">
            
                {{certificate.title}}
            </div>
            <div class="row margin_l">
                <div class="certificate_meta">
                    <img class="author_img" src="/img/certificates/author.png">
                <div class="certificate_author">{{user.name}}</div>
                </div>
                <div class="certificate_meta">
                    <img class="author_img" src="/img/certificates/date.png">
                    <div class="certificate_author">{{new Date() | dateFormat('MMM.DD.YYYY')}} </div>
                </div>
            </div>

        </div>
        <div class="button_hold">
            <div class="download_btn">
                <div class="download">
                        Download
                </div>
                <div class="download_img">
                    <img class="author_img" src="/img/certificates/download.png">
                </div>
            </div>
        </div>
   
</div>
    <div class="row">
        <div @click="getAllCertificates" class="see_all_btn">
            See all Certificates
        </div>
    </div>
</div>
</template>

<script>
    import {HTTP} from '../http-common';
    export default {
        data() {
            return {
            certificates: null,
            user: null
            };
        },
        methods: {
            getAllCertificates: function (){
                
                name=window.location.pathname.split('/')[2];
                HTTP.get('/certificates/'+name+'/all')
                .then(response => {
                    this.certificates=response.data.certificate_info;
                    this.user=response.data.user_info
                    
                })
                .catch(e => {
                    this.errors.push(e)
                })
            }
        },
        mounted() {
            name=window.location.pathname.split('/')[2];
           HTTP.get('/certificates/'+name+'/3')
                .then(response => {
                    this.certificates=response.data.certificate_info;
                    this.user=response.data.user_info
                    
                })
                .catch(e => {
                    this.errors.push(e)
                })
        }
    }
</script>