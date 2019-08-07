<template>
    <div style="height: 100%; width: 100%; overflow-y:hidden;background-color: #FCF3CF;">
        <div v-if="hidden== false" style="height: 100%; width: 100%; overflow-y:hidden;background-color: #FCF3CF;">
            <div style="width: 100%; height: 50%;padding-left:7%;padding-right:7%;padding-top:2%;">
                <div class="point" style="width: 100%; height: 15%;margin-bottom: 10%;">
                    <div style="width: 60%; height:100%;float:left;">
                        <div
                            style="background-color: #1d68a7;width: 20%;height: 130px;margin-left:5%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                            v-bind:class="{boder:teamAct==1}"
                            @click="activePoint(1)">
                            <div
                                style="width: 10px;height: 10px; background-color: yellow;border-radius:50%;margin:auto;"
                                v-if="teamAct==1"></div>
                            <p style="font-size: 22px; font-family:'time new roman'; font-weight: bold; ">ĐỘI I</p>
                            <p style="font-size:40px; font-family:'time new roman'; font-weight: bold;">
                                {{this.team1}}</p>
                        </div>
                        <div
                            style="background-color: green;width: 20%;height: 130px;margin-left:2%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                            v-bind:class="{boder:teamAct==2}"
                            @click="activePoint(2)">
                            <div
                                style="width: 10px;height: 10px; background-color: yellow;border-radius:50%;margin:auto;"
                                v-if="teamAct==2"></div>
                            <p style="font-size: 22px; font-family:'time new roman'; font-weight: bold; ">ĐỘI II</p>
                            <p style="font-size:40px; font-family:'time new roman'; font-weight: bold;">
                                {{this.team2}}</p>
                        </div>
                        <div
                            style="background-color: red;width: 20%;height: 130px;margin-left:2%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                            v-bind:class="{boder:teamAct==3}"
                            @click="activePoint(3)">
                            <div
                                style="width: 10px;height: 10px; background-color: yellow;border-radius:50%;margin:auto;"
                                v-if="teamAct==3"></div>
                            <p style="font-size: 22px; font-family:'time new roman'; font-weight: bold; ">ĐỘI III</p>
                            <p style="font-size:40px; font-family:'time new roman'; font-weight: bold;">
                                {{this.team3}}</p>
                        </div>
                        <div style="border: 5px solid red; width: 150px;
			height: 150px; text-align: center; padding-top: 4px
			color: #fff;
			-moz-border-radius: 200px;
			-webkit-border-radius: 200px;
			border-radius: 100px; float: left; margin-left:4%">
                            <p style="font-size: 18px; font-family:'time new roman'; font-weight: bold;">Time</p>
                            <div id="seconds">{{ totalTime }}</div>
                        </div>
                        <!--                    <h1 v-if="turn==0">-->
                        <!--                        <countdown :left-time="3000">-->
                        <!--                            <span-->
                        <!--                                slot="process"-->
                        <!--                                slot-scope="{ timeObj }"-->

                        <!--                            >-->
                        <!--                                {{ timeObj.ceil.s }}-->
                        <!--                            </span>-->
                        <!--                            <span slot="finish" v-if="restart!=undefined"-->
                        <!--                                  slot-scope="{ startCountdown }">-->
                        <!--                                {{this.restart}}-->
                        <!--                            </span>-->
                        <!--                            <span slot="finish" v-if="restart==undefined"-->
                        <!--                                  slot-scope="{ startCountdown }">-->
                        <!--                            </span>-->

                        <!--                        </countdown>-->
                        <!--                    </h1>-->
                        <!--                    <circular-count-down-timer-->
                        <!--                        v-if="this.reset==false"-->
                        <!--                        :size="120"-->
                        <!--                        :seconds-stroke-color="'#f00'"-->
                        <!--                        :stroke-width="5"-->
                        <!--                        :padding="4"-->
                        <!--                        :second-label="''"-->
                        <!--                        :show-second="true"-->
                        <!--                        :initial-value="this.time"-->
                        <!--                        :steps="this.time"-->
                        <!--                        :paused="time_start"-->
                        <!--                        style="text-align: center;"-->
                        <!--                    ></circular-count-down-timer>-->
                    </div>
                    <div style="border: 0px solid red; width: 460px;height: 150px; text-align: center; float: right">
                        <img
                            src="http://congdoandatto.org.vn/portals/0/AttachFiles/2019/5/13/2019_5_13_8_56_43_636933346034574074_logo%20c%C3%B4ng%20%C4%91o%C3%A0n%202018.gif"
                            style="width: 140px; height: 120px; text-align: center;">
                        <p style="font-size: 19px; font-family:'time new roman'; font-weight: bold; color: #1d68a7">CÔNG
                            ĐOÀN XÂY DỰNG VIỆT NAM</p>
                        <!-- <img src="http://www.congdoandlvn.org.vn/userfile/User/cuongnd_cd/images/2019/7/logott1.jpg" style="width: 450px; height: 150px; float: right"> -->
                    </div>
                    <!-- <div
                        style="width: 50%; height:165px;;float:left;border: 5px solid #ffc002;border-radius:30px;padding:2px 13px;">
                        <div style="width:25%;float:left;">
                            <img
                                src="data:image/jpeg;base64,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"
                            width="100%" height="115px">
                        </div>
                        <div style="width:75%;float:left; padding-left:20px;">
                            <h4 style="margin-top: 10px;">CÔNG ĐOÀN XÂY DỰNG VIỆT NAM</h4>
                            <p>-------------------------______----------------------</p>
                            <P style="font-size:13px;">Hội thi an toàn vệ sinh viên giỏi toàn quốc ngành xây dựng</P>
                        </div>
                    </div> -->
                </div>
                <div class="request"
                     style="width: 100%; height: 85%;padding: 1% 1%;border: 10px White double;border-radius: 40px;background-color: rgba(0, 123, 255, 0.75);">
                    <div style="width: 100%; height: 100%;border-radius:20px;background-color: #1F618D;">
                        <button type="button"
                                style="width: 100%;border-radius:20px;font-size:20px; font-family:'time new roman'; font-weight: bold;"
                                class="btn btn-warning">HỘI THI AN TOÀN VỆ SINH VIÊN TOÀN QUỐC NGÀNH XÂY DỰNG
                        </button>
                        <div v-for="(item,index) in question_data" v-if="index==turn"
                             style="color: white;font-size: 25px;margin-left: 15px;padding:2% 2%;">
                            <div style="color: yellow; font-family:'time new roman'; font-weight: bold;">Câu {{index
                                +1}}
                            </div>
                            <p style="font-family:'time new roman'">{{item.name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                style="width: 100%; height: 50%; margin-top: 10%;padding-left:10%;padding-bottom: 5%; border-top: 5px #b3d7ff solid;border-radius:30px;">
                <div style="width: 90%;float: left; background-color: #FCF3CF" class="grid-container"
                     v-for="(item,index) in question_data"
                     v-if="index==turn">
                    <button
                        style="width:450px;height:85px; border-radius: 40px; border: #1A5276 solid 4px; font-family:'time new roman'; font-weight: bold; font-size: 1.5vb;"
                        type="button" class="btn btn-primary"
                        v-for="(data,ind) in item.answer" @click="addAnswer(data,ind,index)"
                        v-bind:class="{'ind--0':ind === onclick}">
                        <p><span style="color: red; margin-left: 20px; float: left; font-weight: bold; font-size: 28px">{{data.phuong_an}}:</span><span>{{data.name}}</span>
                        </p>
                    </button>
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                         v-if="tinker == false && teamAct !=undefined ">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"
                                     style="width: 500px;height: 500px;font-size: 30px;text-align: center">
                                    <img src="https://thumbs.gfycat.com/YoungPinkFirecrest-size_restricted.gif"
                                         style="width: 350px;height: 300px;">
                                    </br>
                                    <p>
                                    <h2 style="font-family:'time new roman'; font-weight: bold;">KHÔNG CHÍNH
                                        XÁC</h2></p>
                                    <P>+ 0</P>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                         v-if="tinker == true && teamAct != undefined ">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body"
                                     style="width: 500px;height: 450px;font-size: 30px;text-align: center">
                                    <img
                                        src="https://cdn.dribbble.com/users/1238709/screenshots/4069900/success_celebration_800x600.gif"
                                        style="width: 350px;height: 300px;">
                                    </br>
                                    <p>
                                    <h2 style="font-family:'time new roman'; font-weight: bold;">ĐÁP ÁN CHÍNH
                                        XÁC</h2></p>
                                    <P>+ 10</P>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                <div class="grid-item" :disabled="disable"-->
                    <!--                     style="width: 450px; height: 85px;border: 3px yellow double;border-radius:20px;background-color: rgb(114, 6, 221);text-align: center;color: white"-->
                    <!--                     v-for="(data,ind) in item.answer" @click="addPoint(data)">-->
                    <!--                    <p style="margin-top: 5%;">{{data.name}}</p>-->
                    <!--                </div>-->
                </div>
                <div style="width: 10%;float: left;margin-top:5%;">
                    <button
                        style="width:120px;height:50px;margin-bottom:20px;font-weight: bold; font-family: 'time new roman'"
                        type="button" class="btn btn-success"
                        data-toggle="modal"
                        data-target="#exampleModalCenter"
                        @click="addPoint">
                        KẾT QUẢ
                    </button>
                    <button style="width:120px;height:50px; font-weight: bold; font-family: 'time new roman'"
                            type="button" class="btn btn-danger" @click="next">
                        {{this.continute}}
                    </button>
                    <!--                <div style="border:1px yellowgreen solid;width:100px;height:50px;text-align: center;background-color: #1f6fb2;" @click="next">-->
                    <!--                   <p style="margin-top:15%;font-weight: bold">{{this.continute}} >></p>-->
                    <!--                </div>-->
                </div>
            </div>
        </div>
        <div style="height: 100%; width: 100%; overflow-y:hidden;" v-if="hidden== true">
            <div class="full-width">
                <div
                    style="background-color:#1d68a7;width: 100%;font-weight: bold; height: 35%; text-align: center;font-size: 50px;padding-top: 20px;">
                    <img src="https://congdoantphochiminh.org.vn/wp-content/uploads/2018/11/logo_canvas-960x750.png"
                         style="width: 150px; height: 120px; padding-bottom: 25px">
                    <H4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: white;">
                        KẾT QUẢ</h4>
                </div>
                <div style="width: 100%; height: 70%; background-color:#F1C40F;padding-top: 30px;">
                    <div class="col-md-10" style=" margin: auto">
                        <div class="row">
                            <div
                                style="background-color: blue;border: 5px red solid; width: 250px; height: 200px; margin: auto; text-align: center">
                                <p style="font-size: 28px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI I</p>
                                <p style="font-size:60px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team1}}</p>
                            </div>
                            <div
                                style="background-color: green;border: 5px red solid; width: 250px; height: 200px; margin: auto;  text-align: center">
                                <p style="font-size: 28px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI II</p>
                                <p style="font-size:60px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team2}}</p>
                            </div>
                            <div
                                style="background-color: red; border: 5px green solid; width: 250px; height: 200px; margin: auto;  text-align: center">
                                <p style="font-size: 28px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI III</p>
                                <p style="font-size:60px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team3}}</p>
                            </div>
                        </div>
                        <br></br><br></br>
                        <div class="row">
                            <button type="button"
                                    style="margin: auto; font-size: 18px;height: 70px; width: 280px; font-family:'time new roman'; font-weight: bold;"
                                    class="btn btn-dark" @click="chongoi">TIẾP TỤC
                            </button>
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
    import Vue from 'vue';
    import CircularCountDownTimer from "vue-circular-count-down-timer";

    Vue.use(CircularCountDownTimer);
    import vueAwesomeCountdown from 'vue-awesome-countdown'

    Vue.use(vueAwesomeCountdown, 'vac')

    export default {
        props: ['question', 'old_id'],
        name: "question",
        data: function () {
            return {
                onclick: undefined,
                timer: null,
                resetButton: false,
                reset: false,
                turn: 0,
                teamAct: undefined,
                team1: 0,
                team2: 0,
                team3: 0,
                time: 60,
                time_start: true,
                question_data: undefined,
                continute: "KẾ TIẾP",
                restart: undefined,
                disable: undefined,
                current_answer: undefined,
                success: false,
                tinker: false,
                answer: undefined,
                ind: undefined,
                index: undefined,
                hidden: true,
                totalTime: 60,
                hidden: false,
            };
        },
        created() {
            this.tinker = false
            this.answer = undefined
        },
        mounted() {
            axios.get('/gettotalpoint/'+this.old_id)
                .then(res => {
                    var data = res.data.result;
                    this.team1 = data.total_point1;
                    this.team2 = data.total_point2;
                    this.team3 = data.total_point3;
                });
            this.question_data = this.question
            this.timer = setInterval(() => this.countdown(), 1000);
            this.resetButton = true;
            this.question_data.forEach(el => {
                el.answer.forEach((item, index, arr) => {
                    if (index == 0) {
                        arr[index].phuong_an = "A"
                    }
                    if (index == 1) {
                        arr[index].phuong_an = "B"
                    }
                    if (index == 2) {
                        arr[index].phuong_an = "C"
                    }
                    if (index == 3) {
                        arr[index].phuong_an = "D"
                    }
                })
            })
        },
        computed: {
            minutes: function () {
                const minutes = Math.floor(this.totalTime / 60);
                return this.padTime(minutes);
            },
            seconds: function () {
                const seconds = this.totalTime - this.minutes * 60;
                return this.padTime(seconds);
            }
        },
        methods: {
            startTimer: function () {
                this.timer = setInterval(() => this.countdown(), 1000);
                this.resetButton = true;
            },
            stopTimer: function () {
                clearInterval(this.timer);
                this.timer = null;
                this.resetButton = true;
            },
            resetTimer: function () {
                this.totalTime = 60;
                clearInterval(this.timer);
                this.timer = null;
                this.resetButton = false;
            },
            padTime: function (time) {
                return (time < 10 ? "0" : "") + time;
            },
            countdown: function () {
                if (this.totalTime >= 1) {
                    this.totalTime--;
                } else {
                    this.totalTime = 0;
                    this.resetTimer();
                }
            },
            addAnswer(answer, ind, index) {
                this.onclick = ind
                if (this.teamAct != undefined) {
                    this.answer = answer
                    this.ind = ind
                    this.index = index
                }
                this.mauvang = !this.mauvang
            },
            next() {
                this.onclick = undefined
                this.answer = undefined
                this.ind = undefined
                this.index = undefined
                this.success = false
                if (this.turn < this.question_data.length - 1) {
                    this.turn = this.turn + 1
                    if (this.turn = this.question_data.length - 1) {
                        this.continute = " KẾT THÚC"
                    }
                } else {
                    this.hidden = true
                }
                this.totalTime = 60
                this.resetTimer()
                this.startTimer()
                this.teamAct = undefined
            },
            playsound() {
                var audio = new Audio('/sound/dung.mp3') // path to file
                audio.play()
                var audio = new Audio('/sound/votay.mp3') // path to file
                audio.play()
            },
            playSoundError() {
                var audio = new Audio('/sound/sai.mp3') // path to file
                audio.play()
            },
            activePoint(team) {
                if (this.teamAct == team && this.teamAct != undefined) {
                    this.teamAct = undefined
                    this.time_start = true
                    this.startTimer()
                    this.border = !this.border
                } else {
                    this.teamAct = team
                    this.ads = true
                    this.time_start = false
                    this.stopTimer()
                }
            },
            addPoint() {
                this.onclick = undefined;
                if (this.teamAct != undefined) {
                    if (this.success == false) {
                        if (this.current_answer == undefined) {
                            this.current_answer = this.answer
                            if (this.answer.dap_an == 1) {
                                this.tinker = true
                                if (this.teamAct == 1) {
                                    this.team1 = this.team1 + 10
                                }
                                if (this.teamAct == 2) {
                                    this.team2 = this.team2 + 10
                                }
                                if (this.teamAct == 3) {
                                    this.team3 = this.team3 + 10
                                }
                                this.success = true
                                this.question_data[this.index].answer = [this.answer]
                                this.playsound()
                            } else {
                                this.tinker = false
                                this.playSoundError()
                                this.question_data[this.index].answer.splice(this.ind, 1)
                            }
                        } else {
                            if (this.current_answer !== this.answer) {
                                this.current_answer = this.answer
                                if (this.answer.dap_an == 1) {
                                    this.tinker = true
                                    if (this.teamAct == 1) {
                                        this.team1 = this.team1 + 10
                                    }
                                    if (this.teamAct == 2) {
                                        this.team2 = this.team2 + 10
                                    }
                                    if (this.teamAct == 3) {
                                        this.team3 = this.team3 + 10
                                    }
                                    this.success = true
                                    this.question_data[this.index].answer = [this.answer]
                                    this.playsound()
                                } else {
                                    this.tinker = false
                                    this.playSoundError()
                                    this.question_data[this.index].answer.splice(this.ind, 1)
                                }
                            }
                        }
                        this.hidden == false
                    }
                }
            },
            timeStart() {

                return restart;
            },
            chongoi() {
                axios.post('/updatepoint/'+this.old_id, {
                    point1: this.team1,
                    point2:this.team2,
                    point3:this.team3
                }).then(res=>{
                    window.location.href = "/getallpackge/"+ this.old_id
                })
            }
        },
        // watch:{
        //     totalTime: function(){
        //         if(this.totalTime == 0){

        //         }
        //     }
        // }
    }
</script>

<style scoped>
    .grid-container {
        display: grid;
        grid-column-gap: 50px;
        grid-row-gap: 10px;
        grid-template-columns: auto auto;
        padding: 10px;
        clear: both;
        background-color: white;
    }

    .ind--0 {
        background-color: yellow;
        color: blue;
        font-weight: bold;
    }

    #seconds {
        font-size: 55px;
        line-height: 1;
        font-weight: bold;
    }

    .boder {
        border: 6px #F1C40F solid;
    }
</style>
