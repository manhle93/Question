<template>
    <div class="full-width">
        <div id="welcome" class="full-width" v-if="this.start == false ">
            <div
                style="width: 100%; height: 40%; background-image: url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575951672/hoithi/panel_qw5jn2.jpg'); background-size: 50% 100%; background-repeat: no-repeat;background-position: center; "></div>
            <div style="width: 100%; height: 60%;background-color: #1d68a7;padding-top: 30px;">
                <div id="start" style="margin-left: 45%; border-radius: 5px; width: 150px;height:70px;cursor: pointer;">
                    <button
                        style="width:150px;height:70px;font-size: 23px;font-weight: bold;font-family:'Times New Roman'"
                        @click="startGame" type="button" class="btn btn-danger">BẮT ĐẦU
                    </button>

                    <!--                    <div style="color: yellow; font-size: 30px;text-align: center;margin-top: 18px;" @click="startGame">Bắt Đầu</div>-->
                </div>
            </div>
        </div>
        <div class="full-width" v-if="this.start == true && this.play == false">
            <div style="background-color:#ECF0F1;width: 100%;font-weight: bold; height: 100%; text-align: center;font-size: 50px;padding-top: 20px;" >
                <!-- <img src="anh/logovuong.gif" style="width: 150px; height: 140px; padding-bottom: 25px"> -->
                <!-- <h4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 30px; color: yellow;" >HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI</h4>
                <h4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 30px; color: yellow;" >TOÀN QUỐC NGÀNH XÂY DỰNG</h4> -->
                <h4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: black;" >PHẦN THI KIẾN THỨC PHÁP LUẬT</h4>
                <h4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: black;" >VÀ KỸ THUẬT AN TOÀN VỆ SINH LAO ĐỘNG</h4>
                <div style="border-bottom: black solid 2px; width: 35%; display: inline-block;"></div>
                <H4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 70px; color: BLACK; margin-top: 70px" >GÓI CÂU HỎI</h4>
                <div style="border-radius: 20px; margin-top: 25px; width: 50%;margin-left: 25%;background-color:#ECF0F1  " class="row">
                    <div class="col-md-12 grid-container"
                         style="align: center;border-radius: 20px; background-color:#ECF0F1 ">
                        <div class="grid-item package-quest" v-for="(item,index) in package" style="cursor: pointer"
                             @click="selectPakage(item.id)">{{item.name}}
                        </div>
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
        data: function () {

            return {
                start: false,
                play: false,
                isLoading: false,
                package: undefined,
                turn_id: undefined,
            };
        },
        watch: {},

        mounted: function () {

        },
        methods: {
            startGame() {
                axios.get('/getpackge')
                    .then(res => {
                        console.log(res.data.result);
                        this.package = res.data.result[1];
                        this.turn_id = res.data.result[0].id;
                        this.start = true;
                    });
            },
            selectPakage(id) {
                window.location.href = "/request/" + id +'/'+ this.turn_id
            }
        }
    };
</script>
<style>
    .full-width {
        height: 100%;
        width: 100%;
    }

    .grid-container {
        display: grid;
        grid-column-gap: 20px;
        grid-row-gap: 20px;
        grid-template-columns: auto auto auto auto auto;
        /* background-color:#D7DBDD; */
        padding: 20px;

    }

    .package-quest {
        width: 110px;
        height: 60px;
        border-radius: 10px;
        line-height: 60px;
        background-color: #015BC1;
        color: white;
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        font-family: 'time new roman'
    }

</style>
