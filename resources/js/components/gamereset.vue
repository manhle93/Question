<template>
    <div class="full-width">
        <div class="full-width">
            <div style="background-color:#1d68a7;width: 100%;font-weight: bold; height: 35%; text-align: center;font-size: 50px;padding-top: 20px;" >
                <img src="https://congdoantphochiminh.org.vn/wp-content/uploads/2018/11/logo_canvas-960x750.png" style="width: 150px; height: 120px; padding-bottom: 25px">
                <H4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: white;" >GÓI CÂU HỎI</h4>
            </div>
            <div style="width: 100%; height: 70%; background-color:#F1C40F;padding-top: 30px;">
                <div style="border-radius: 20px; margin-top: 10px; width: 50%;margin-left: 25%;" class="row" >
                    <div class="col-md-12 grid-container" style="align: center; background-color: white;border-radius: 20px; border: 5px solid #F10F0F">
                        <div class="grid-item package-quest" v-for="(item,index) in package" @click="selectPakage(item.id)">{{index+1}}</div>
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
            axios.get('/getpackge')
                .then(res=>{
                    this.package= res.data.result
                    this.start = true;
                });
        },
        methods: {

            selectPakage(id){
                window.location.href = "/request/"+id
            }
        }
    };
</script>
<style>
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
        padding: 20px;

    }
    .package-quest{
        width: 110px;
        height: 60px;
        border: 1px solid red;
        border-radius: 5px;
        background-color: #1901bbc2;
        color: white;
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        font-family: 'time new roman'
    }

</style>
