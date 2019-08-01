<template>
    <div class="full-width">
        <div id="welcome" class="full-width" v-if="this.start == false ">
            <div style="width: 100%; height: 40%; background-image: url('/img/panel.JPG'); background-size: 50% 100%; background-repeat: no-repeat;background-position: center; "></div>
            <div style="width: 100%; height: 60%;background-color: #1d68a7;padding-top: 30px;">
                <div id="start" style="margin-left: 45%;background-color: red;border: 1px solid ghostwhite; border-radius: 5px; width: 150px;height:70px;cursor: pointer;">
                    <div style="color: yellow; font-size: 30px;text-align: center;margin-top: 18px;" @click="startGame">Bắt Đầu</div>
                </div>
            </div>
        </div>
        <div class="full-width" v-if="this.start == true && this.play == false">
            <div style="width: 100%; height: 30%; background-image: url('/img/panel2.JPG');background-size: 100% 100%; background-repeat: no-repeat;background-position: center;color: white;text-align: center;font-size: 50px;padding-top: 40px;" >
                Lựa chọn gói câu hỏi
            </div>
            <div style="width: 100%; height: 70%; background-color: #1d68a7;padding-top: 30px;">
                <div style="border: 3px solid blue; border-radius: 10px; margin-top: 10px; width: 50%;margin-left: 25%;" class="row" >
                    <div class="col-md-12 grid-container" style="background-color: white;border-radius: 10px;" v-for="(item,index) in package">
                        <div class="grid-item package-quest" @click="selectPakage(item.id)">{{index+1}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import 'bootstrap/dist/css/bootstrap.min.css'
    import 'bootstrap/dist/js/bootstrap.min'
    export default {
        data: function() {

            return {
                start: false,
                play: false,
                isLoading: false,
                package:undefined
            };
        },
        watch: {

        },

        mounted: function() {

        },
        methods: {
            startGame(){
                axios.get('/getpackge')
                    .then(res=>{
                        this.package= res.data.result
                        this.start = true;
                    });
            },
            selectPakage(id){
                window.location.href = "/request/"+id
            }
        }
    };
</script>
<style>
    #start:hover {
        background-color: #09AF00 !important;
    }
    #start:hover div{
        color: red !important;
    }
    .full-width{
        height: 100%;
        width: 100%;
    }
    .grid-container {
        display: grid;
        grid-column-gap: 20px;
        grid-row-gap:20px;
        grid-template-columns: auto auto auto auto auto;
        background-color: #2196F3;
        padding: 10px;
    }
    .package-quest{
        width: 100px;
        height: 50px;
        border: 1px solid red;
        border-radius: 5px;
        background-color: #1901bbc2;
        color: white;
        text-align: center;
        padding-top: 15px;
        font-size: 20px;
        font-weight: bold;
    }
    .package-quest:hover {
        background-color: #27864f;
        cursor: pointer;
    }
</style>
