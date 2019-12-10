<template>
    <div style="height: 100%; width: 100%; overflow-y:hidden;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575541419/hoithi/nenmoi_icrti0.jpg');background-size:100% 100%;  overflow-x:hidden;">
        <div style="height: 100%; width: 100%; overflow-y:hidden;" v-if="hidden== true">
            <div class="full-width">
                <div
                    style="background-color:#F0F3F4;width: 100%;font-weight: bold; height: 100%; text-align: center;font-size: 50px;padding-top: 50px;">
                    <!-- <img src="anh/logovuong.png"
                         style="width: 150px; height: 120px; padding-bottom: 25px"> -->
                         
                    <h4 style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: black">
                        KẾT QUẢ THI</h4>
                    <div class="col-md-10" style="margin: auto; margin-top: 100px">
                        <div class="row">
                            <div
                                style="background-color: #21618C;border-radius: 10px; width: 250px; height: 200px; margin: auto; text-align: center;">
                                <p style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI 1</p>
                                <p style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team1}}</p>
                            </div>
                            <div
                                style="background-color: #CB4335;border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center">
                                <p style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI 2</p>
                                <p style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team2}}</p>
                            </div>
                            <div
                                style="background-color: #239B56; border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center">
                                <p style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white ">
                                    ĐỘI 3</p>
                                <p style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white">
                                    {{this.team3}}</p>
                            </div>
                        </div>
                        <br><br><br>
                        <div class="row">
                            <button type="button"
                                    style="margin: auto; font-size: 18px;height: 100px; background-color:#F5B041; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color: black"
                                    class="btn btn-dark" @click="chongoi">TIẾP TỤC
                            </button>
                            <button type="button"
                                    style="margin: auto; background-color:#3498DB; font-size: 18px;height: 100px; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color:black"
                                    class="btn btn-dark" @click="resetContinute">LƯỢT CHƠI MỚI
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-if="hidden== false"
             style="height: 100%; width: 100%; overflow-y:hidden; overflow-x:hidden;">
            <!-- <div class="row" style="height: 15%;">
                <div class="col-md-8">
                    <div class="row" style="margin-top: 10px">
                        <div class="col-md-2" style="text-align:center; padding-left: 50px">
                            <div style=""><img src="/anh/logovuong.gif" style="height: 90px; width: 100px"></div>
                        </div>
                        <div class="col-md-10" style="margin-top: 15px; padding-left: 70px">
                            <div
                                style="font-size: 20px; font-family: 'Tahoma'; color: yellow; font-weight: bold; padding-bottom: 1px">
                                CÔNG ĐOÀN XÂY DỰNG VIỆT NAM
                            </div>
                            <div
                                style="font-size: 20px; font-family: 'time new roman'; color: #797D7F; font-weight: bold;">
                                Vietnam National Union of Building Workers
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin: auto">
                    <div
                        style="color: yellow; font-family: 'Tahoma';font-weight: bold; text-align: center;font-size: 22px;">
                        HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI <br>TOÀN QUỐC NGÀNH XÂY DỰNG
                    </div>
                </div>
            </div> -->
            <div class="row" style="margin: 0 auto; margin-top: 15px;height: 5%; margin-bottom: 70px;">
                <div class="col-md-3" style="margin: 0 auto; cursor: pointer;" >
                <div  @click="runTime" v-bind:class="{'bor-max-height':height_a,'bor-min-height':height_b}" class="row"
                         style="margin: auto; margin-top: 10px; cursor: pointer;">
                    <div
                        style="padding-top:55px;width: 210px; height: 210px; margin-left:25px; text-align:center;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575541417/hoithi/dongho_mv6mjb.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;">
                        {{totalTime }}
                    </div>
                </div>
                </div>
                <div class="col-md-9" style="margin: 0 auto;color: black; font-family: 'Garamond';font-weight: bold; font-size: 60px; text-align:center">
                        PHẦN THI TRẮC NGHIỆM
                </div>
            </div>
            <div class="row" style="margin-top: 10px;height: 90%">
                <div class="col-md-3" style="padding-top: 150px;">
                    <div class="row bor-min-height"
                         style="margin: auto;">
                        <div class="point-width"
                             style="border: 2px solid black;background-color: #28B463; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center">
                            <div v-bind:class="{'teampoint-fullwidth': height_a,'teampoint-width':height_b}"
                                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px">
                                {{this.team1}}
                            </div>
                        </div>
                        <div
                             style="background-color: #28B463; margin-top: 10px;text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 2px solid black; border-radius: 5px; cursor: pointer;"
                             @click="activePoint(1)" v-bind:class="{boder:teamAct==1}" class="team-min-height">ĐỘI 1
                        </div>
                        <div v-if="teamAct==1"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541416/hoithi/bell2_v3bat1.gif"
                                                    style="width: 60px; height: 60px;margin-top: 15px; margin-left: 0px;object-fit: fill"/>
                        </div>
                    </div>
                    <br>
                    <div class="row bor-min-height"
                         style="margin: auto;">
                        <div class="point-width"
                             style="border: 2px solid black;background-color: #C0392B ; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center">
                            <div v-bind:class="{'teampoint-fullwidth': height_a,'teampoint-width':height_b}"
                                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px; padding-top: 10px">
                                {{this.team2}}
                            </div>
                        </div>
                        <div
                             style="cursor: pointer; background-color: #C0392B ;background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 2px solid black; border-radius: 5px"
                             @click="activePoint(2)" v-bind:class="{boder:teamAct==2}" class="team-min-height">ĐỘI 2
                        </div>
                        <div v-if="teamAct==2"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541416/hoithi/bell2_v3bat1.gif"
                                                    style="width: 60px; height: 60px;margin-top: 15px;"/>
                        </div>
                    </div>
                    <br>
                    <div class="row bor-min-height"
                         style="margin: auto;">
                        <div class="point-width"
                             style="border: 2px solid black;background-color: blue; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center">
                            <div class="teampoint-width"
                                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px">
                                {{this.team3}}
                            </div>
                        </div>
                        <div
                             style="cursor: pointer; background-color: blue;background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; color: white; border: 2px solid black; border-radius: 5px"
                             @click="activePoint(3)" v-bind:class="{boder:teamAct==3}" class="team-min-height">ĐỘI 3
                        </div>
                        <div v-if="teamAct==3"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541416/hoithi/bell2_v3bat1.gif"
                                                    style="width: 60px; height: 60px;margin-top: 15px;"/>
                        </div>

                    </div>
                    <!-- <div v-bind:class="{'bor-max-height':height_a,'bor-min-height':height_b}" class="row"
                         style="margin: auto; margin-top: 10px; " @click="runTime">
                        <div
                            style="padding-top:55px;width: 210px; height: 210px; margin:auto; text-align:center;background-image:url('/anh/dongho.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;">
                            {{totalTime }}
                        </div>
                    </div> -->
                    <div class="col-md-12" style="margin-top:130px;">
                        <button style="font-weight: bold; font-family: 'time new roman'; float: left" type="button"
                                class="btn btn-success"
                                data-toggle="modal"
                                data-target="#exampleModalCenter"
                                @click="addPoint"
                                v-bind:class="{'btn-max-height': height_a}">
                            KẾT QUẢ
                        </button>
                        <button style="font-family: 'time new roman'; float: right" type="button"
                                class="btn btn-danger"
                                @click="next"
                                v-bind:class="{'btn-max-height': height_a}">
                            {{this.continute}}
                        </button>
                    </div>
                </div>
                <div class="col-md-9" style="margin: 0 auto; text-align:center">
                    <div class="row" style="margin: 0 auto; text-align:center">
                        <div class="col-md-12" style="margin: 0 auto; margin-bottom: 60px; ">
                            <button type="button" class="btn btn-warning"
                            v-if="packageDetail"
                                    style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 18 px; background: #094EAB">
                                GÓI
                                CÂU HỎI SỐ: {{this.packageDetail.name}}
                            </button>
                            <button
                                style="background-color:#094EAB;width:40px;height:40px;margin-right:10px;font-weight: bold;border-radius:50%;"
                                type="button" class="btn btn-primary"
                                v-for="(item,index) in question_data"
                                @click="change_question(index)"
                                v-bind:class="{'red':index <= turn}">
                                <p><span
                                    style="color: white;">{{index+1}}</span>
                                </p>
                            </button>
                        </div>
                        <div class="col-md-12 min-height"
                             style="display: inline-block; border: 3px solid black; border-radius: 40px;background-color: #E5E7E9;background-size:100% 100%; ">
                            <div v-for="(item,index) in question_data" v-if="index==turn"
                                 style="color: black;font-size: 28px">
                                <div style="color: black; font-family:'time new roman'; font-weight: bold;">Câu {{index
                                    +1}}
                                </div>
                                <p style="font-family:'time new roman';font-size: 29px">{{item.name}}</p>
                            </div>
                        </div>
                        <div class="col-md-12" style="height: 100%;">
                            <div>
                                <div style="width: 100%;float: left; background-color: #ffffff00" class="grid-container"
                                     v-for="(item,index) in question_data"
                                     v-if="index==turn">
                                    <button
                                        style="width:95%; border: black solid 2px; font-family:'time new roman';color:black; font-weight: bold;font-size: 26px;background-color: #F2F3F4;background-size:100% 100%;"
                                        type="button" class="btn btn-primary answer-min-height"
                                        v-for="(data,ind) in item.answer" @click="addAnswer(data,ind,index)"
                                        v-bind:class="{'ind--0':ind === onclick}">
                                        <p><span
                                            style="color: black; margin-left: 20px; float: left; font-weight: bold; font-size: 28px">{{data.phuong_an}}:</span><span>{{data.name}}</span>
                                        </p>
                                    </button>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                                         v-if="tinker == false && teamAct !=undefined ">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"
                                                     style="width: 500px;height: 500px;font-size: 30px;text-align: center">
                                                    <img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541419/hoithi/sai_huda9l.gif" style="width: 350px;height: 300px;">
                                                    <br>
                                                    <p>
                                                    <h2 style="font-family:'time new roman'; font-weight: bold;">KHÔNG
                                                        CHÍNH XÁC</h2></p>
                                                    <p>+ 0</p>
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
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"
                                                     style="width: 500px;height: 450px;font-size: 30px;text-align: center">
                                                    <img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/dung_xaymtk.gif" style="width: 350px;height: 300px;">
                                                    <br>
                                                    <p>
                                                    <h2 style="font-family:'time new roman'; font-weight: bold;">ĐÁP ÁN
                                                        CHÍNH XÁC</h2></p>
                                                    <p>+ 10</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12" style="margin-top:5px;">
                            <button style="font-weight: bold; font-family: 'time new roman'; float: left" type="button"
                                    class="btn btn-success"
                                    data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                    @click="addPoint"
                                    v-bind:class="{'btn-max-height': height_a}">
                                KẾT QUẢ
                            </button>
                            <button style="font-family: 'time new roman'; float: right" type="button"
                                    class="btn btn-danger"
                                    @click="next"
                                    v-bind:class="{'btn-max-height': height_a}">
                                {{this.continute}}
                            </button>
                        </div> -->
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
                statusaudio: false,
                audiodongho: undefined,
                loading: false,
                isLoading: true,
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
                totalTime: 10,
                hidden: false,
                packageDetail: undefined,
                height_a: undefined,
                height_b: undefined
            };
        },
        created() {
            this.tinker = false
            this.answer = undefined
        },
        mounted() {
            if (window.innerHeight >= 667) {
                this.height_a = true;
                this.height_b = false
            } else {
                this.height_a = false;
                this.height_b = true
            }
            axios.get('/getdetailpackage/' + this.old_id)
                .then(res => {
                    this.packageDetail = res.data.result;
                    console.log(this.packageDetail)
                });
            axios.get('/gettotalpoint/' + this.old_id)
                .then(res => {
                    var data = res.data.result;
                    this.team1 = data.total_point1;
                    this.team2 = data.total_point2;
                    this.team3 = data.total_point3;
                });
            this.question_data = this.question
            this.timer = setInterval(() => this.countdown(), 1000);
            this.stopTimer();
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
            change_question (index) {
                this.turn = index
                this.success = false
            },
            runTime () {
                if(this.loading == false){
                    this.startTimer();
                    this.loading = true
                }
                else{
                    this.stopTimer();
                    this.loading = false
                }
               
            },
            startTimer: function () {
                this.playSoundTickTock()
                this.timer = setInterval(() => this.countdown(), 1000);
                this.resetButton = true;
            },
            stopTimer: function () {
                if(this.statusaudio == true){
                this.audiodongho.pause()
                }
                clearInterval(this.timer);
                this.timer = null;
                this.resetButton = true;
            },
            resetTimer: function () {
                if(this.statusaudio == true){
                this.audiodongho.pause()
                }
                this.totalTime = 10;
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
                // if (this.teamAct != undefined) {
                this.answer = answer
                this.ind = ind
                this.index = index
                // }
                this.mauvang = !this.mauvang
            },
            next() {
                this.loading =false
                this.onclick = undefined
                this.answer = undefined
                this.ind = undefined
                this.index = undefined
                this.success = false
                this.isLoading = true
                if (this.turn < this.question_data.length - 1) {
                    this.turn = this.turn + 1
                    if (this.turn == this.question_data.length - 1) {
                        this.continute = " KẾT THÚC"
                    }
                } else {
                    this.hidden = true
                }
                this.totalTime = 10
                this.resetTimer()
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
            playSoundTickTock() {
                this.audiodongho = new Audio('/sound/ticktock.mp3');
                this.statusaudio = true
                this.audiodongho.play()
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
                                this.isLoading = false
                            } else {
                                this.tinker = false
                                this.playSoundError()
                                // this.question_data[this.index].answer.splice(this.ind, 1)
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
                                    this.isLoading = false
                                } else {
                                    this.tinker = false
                                    this.playSoundError()
                                    // this.question_data[this.index].answer.splice(this.ind, 1)
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
                axios.post('/updatepoint/' + this.old_id, {
                    point1: this.team1,
                    point2: this.team2,
                    point3: this.team3
                }).then(res => {
                    window.location.href = "/getallpackge/" + this.old_id
                })
            },
            resetContinute() {
                axios.post('/resetpoint/' + this.old_id).then(res => {
                    window.location.href = "/getallpackge/" + this.old_id
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
        background-image: url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/nenchoncautraloi_id0eza.jpg') !important;
        color: blue;
        font-weight: bold;
    }

    #seconds {
        font-size: 55px;
        line-height: 1;
        font-weight: bold;
    }

    .boder {
        border: 4px white solid
    }

    .red {
        background-color: #C12701 !important;
    }

    .min-height {
        height: 180px;
        margin-bottom: 25px;
    }
    .answer-min-height {
        height: 160px;
        border-radius: 40px;
    }
    .point-width {
        width: 80px;
        height: 80px;
    }
    .bor-min-height {
        height: 15%;
    }

    .team-min-height {
        width: 150px;
        height: 60px;
    }
    .teampoint-width{
        padding-top: 15px;
    }
</style>
