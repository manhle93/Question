<template>
    <div style="height: 100%; width: 100%; overflow-y:hidden;background-color: #FCF3CF;  overflow-x:hidden;">
        <div style="height: 100%; width: 100%; overflow-y:hidden;" v-if="hidden== true" >
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
                        <br><br><br><br>
                        <div class="row"><button type="button" style="margin: auto; font-size: 18px;height: 70px; width: 280px; font-family:'time new roman'; font-weight: bold;" class="btn btn-dark" @click="chongoi">TIẾP TỤC </button></div>
                        <br>
                        <div class="row"><button type="button" style="margin: auto; font-size: 18px;height: 70px; width: 280px; font-family:'time new roman'; font-weight: bold;" class="btn btn-dark" @click="chongoi">LƯỢT CHƠI MỚI</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="hidden== false" style="height: 100%; width: 100%; overflow-y:hidden;background-color: #240456;  overflow-x:hidden;">
            <div class="row">
                <div class="col-sm">
                    <div class="row" style="margin-top: 10px">
                      <div class="col-md-2" style="text-align:center; padding-left: 50px">
                      <div style=""><img src="/anh/logovuong.gif" style="height: 90px; width: 100px"></div>
                      </div>
                      <div class="col-md-10" style="margin-top: 15px; padding-left: 70px" >
                        <div style="font-size: 20px; font-family: 'Tahoma'; color: yellow; font-weight: bold; padding-bottom: 1px">CÔNG ĐOÀN XÂY DỰNG VIỆT NAM </div>
                       <div style="font-size: 20px; font-family: 'time new roman'; color: #797D7F; font-weight: bold;"> Vietnam National Union of Building Workers </div>
                      </div>
                    </div>
                </div>
                <div class="col-sm" style="margin: auto">
                    <div style="color: yellow; font-family: 'Tahoma';font-weight: bold; text-align: center;font-size: 22px;">HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI <br>TOÀN QUỐC NGÀNH XÂY DỰNG</div>
                </div>
            </div>
            <div class="row" style="margin: 0 auto; margin-top: 15px;">
                    <div style="margin: 0 auto;color: yellow; font-family: 'Garamond';font-weight: bold; font-size: 32px;">PHẦN THI TRẮC NGHIỆM KIẾN THỨC</div>
            </div>
            <div class="row" style="margin-top: 35px;">
                <div class="col-md-3" style="border-right: 2px solid red; border-top: 2px solid red">
                    <div class="row" style="margin: auto; margin-top: 20px">
                        <div style="width: 80px; height: 80px;border: 4px solid red; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"><div style="color: white; margin-top: 16px; font-family: 'Tahoma';font-weight: bold;font-size: 30px">{{this.team1}}</div></div>
                        <div style="width: 150px; height: 60px;background-color: red; margin-left: 0px; margin-top: 10px;text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px;" @click="activePoint(1)" v-bind:class="{boder:teamAct==1}">ĐỘI I</div>
                        <div v-if="teamAct==1"><img src="/anh/bell.png" style="width: 50px; height: 50px;margin-top: 15px; margin-left: 10px"/></div>
                    </div>
                    <div class="row" style="margin: auto; margin-top: 20px">
                        <div style="width: 80px; height: 80px;border: 4px solid green; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"><div style="color: white; margin-top: 16px; font-family: 'Tahoma';font-weight: bold;font-size: 30px">{{this.team2}}</div></div>
                        <div style="width: 150px; height: 60px;background-color: green; margin-left: 0px; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px" @click="activePoint(2)" v-bind:class="{boder:teamAct==2}">ĐỘI II</div>
                        <div v-if="teamAct==2"><img src="/anh/bell.png" style="width: 50px; height: 50px;margin-top: 15px; margin-left: 10px"/></div>
                    </div>
                    <div class="row" style="margin: auto; margin-top: 20px">
                        <div style="width: 80px; height: 80px;border: 4px solid yellow; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"><div style="color: white; margin-top: 16px; font-family: 'Tahoma';font-weight: bold;font-size: 30px">{{this.team3}}</div></div>
                        <div style="width: 150px; height: 60px;background-color: yellow; margin-left: 0px; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; color: red" @click="activePoint(3)" v-bind:class="{boder:teamAct==3}">ĐỘI III</div>
                        <div v-if="teamAct==3" ><img src="/anh/bell.png" style="width: 50px; height: 50px;margin-top: 15px; margin-left: 10px"/></div>

                    </div>
                    <div class="row" style="margin: auto; margin-top: 50px ">
                        <div style="width: 200px; height: 200;border: 6px solid red; margin: auto; border-radius: 50%; margin:auto; text-align:center">
                            <div style="color: white;font-family: 'Tahoma';font-weight: bold;font-size: 18px; margin-top: 18px ">Time</div>
                            <div style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;">{{ totalTime }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="margin: 0 auto; text-align:center">
                    <div class="row">
                        <div class="col-md-12" style="margin: 0 auto; margin-bottom: 10px; "> 
                            <button type="button" class="btn btn-warning" style="color: red; font-family: 'Tahoma';font-weight: bold;font-size: 18 px;">Gói câu hỏi số: 10</button>
                        </div>
                        <div class="col-md-12" style="border: 4px solid yellow; width: 1000px; height: 200px; border-radius: 40px; background: linear-gradient(to left, #515DF6, #1609CF, #0E03A6, #080259, #060241,#0E03A6, #1609CF,#515DF6);">
                            <div v-for="(item,index) in question_data" v-if="index==turn" style="color: white;font-size: 25px">
                                <div style="color: yellow; font-family:'time new roman'; font-weight: bold;">Câu {{index +1}}</div>
                                <p style="font-family:'time new roman'">{{item.name}}</p>
                            </div>
                        </div>
                        <div class="col-md-12" style="height: auto; margin-top: 50px">
                            <div>
                                <div style="width: 90%;float: left; background-color: #240456" class="grid-container" v-for="(item,index) in question_data"
                                    v-if="index==turn">
                                    <button style="width:450px;height:85px; border-radius: 40px; border: yellow solid 4px; font-family:'time new roman'; font-weight: bold" type="button" class="btn btn-primary"
                                            v-for="(data,ind) in item.answer" @click="addAnswer(data,ind,index)" 
                                            v-bind:class="{'ind--0':ind === onclick}" >
                                            <p><span style="color: white; margin-left: 20px; float: left; font-weight: bold; font-size: 28px">{{data.phuong_an}}:</span><span>{{data.name}}</span></p>
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
                                                <div class="modal-body" style="width: 500px;height: 500px;font-size: 30px;text-align: center">
                                                    <img src="/anh/sai.gif" style="width: 350px;height: 300px;">
                                                        <br>
                                                    <p><h2 style="font-family:'time new roman'; font-weight: bold;">KHÔNG CHÍNH XÁC</h2></p>
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
                                                        <img src="/anh/dung.gif" style="width: 350px;height: 300px;">
                                                        <br>
                                                    <p><h2 style="font-family:'time new roman'; font-weight: bold;">ĐÁP ÁN CHÍNH XÁC</h2></p>
                                                    <P>+ 10</P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top:5px;">
                            <button style="font-weight: bold; font-family: 'time new roman'" type="button" class="btn btn-success"
                                    data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    @click="addPoint">
                                KẾT QUẢ
                            </button>
                            <button style="font-family: 'time new roman'" type="button" class="btn btn-danger" @click="next" :disabled="isLoading">
                                {{this.continute}}
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
                isLoading:true,
                onclick:undefined,
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
                this.isLoading=true
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
                                this.isLoading=false
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
                                    this.isLoading=false
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
        background-color:#E19C13;
        color:blue;
        font-weight: bold;
    }

    #seconds {
  font-size: 55px;
  line-height: 1;
  font-weight: bold;
}
.boder
{
    border: 4px white solid
}
</style>
