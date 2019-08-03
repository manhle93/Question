<template>
    <div style="height: 100%; width: 100%; overflow-y:hidden;background-color: #ffffff;">
        <div style="width: 100%; height: 50%;padding-left:7%;padding-right:7%;padding-top:2%;">
            <div class="point" style="width: 100%; height: 15%;margin-bottom: 10%;">
                <div style="width: 50%; height:100%;float:left;">
                    <div
                        style="background-color: #1d68a7;width: 15%;height: 50px;margin-left:5%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                        @click="activePoint(1)">
                        <div style="width: 10px;height: 10px; background-color: yellow;border-radius:50%;margin:auto;"></div>
                        {{this.team1}}
                    </div>
                    <div
                        style="background-color: green;width: 15%;height: 50px;margin-left:2%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                        @click="activePoint(2)">
                        {{this.team2}}
                    </div>
                    <div
                        style="background-color: red;width: 15%;height: 50px;margin-left:2%;border-radius:7px;float: left;color: white;text-align: center;padding-top: 10px;font-size: 20px"
                        @click="activePoint(3)">
                        {{this.team3}}
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
                <div style="width: 50%; height:100%;float:left;">
                    <div
                        style="border: 5px solid #ffc002;width: 100%;height: 150px;margin-left:2%;border-radius:30px;float: left;text-align:center;">
                        <h2 style="margin-top: 10px;">CÔNG ĐOÀN XÂY DỰNG VIỆT NAM</h2>
                        <p>-------------------------______----------------------</p>
                        <P style="font-size:20px;">Hội thi an toàn vệ sinh viên giỏi toàn quốc ngành xây dựng</P>
                    </div>
                </div>
            </div>
            <div class="request"
                 style="width: 100%; height: 85%;padding: 1% 1%;border: 10px White double;border-radius: 40px;background-color: rgba(0, 123, 255, 0.75);">
                <div style="width: 100%; height: 100%;border-radius:20px;background-color: rgb(0, 123, 255);">
                    <p v-for="(item,index) in question_data" v-if="index==turn"
                       style="color: white;font-size: 25px;margin-left: 15px;padding:2% 2%;">
                        {{item.name}}
                    </p>
                </div>
            </div>
        </div>
        <div
            style="width: 100%; height: 50%; margin-top: 10%;padding-left:10%;padding-bottom: 5%; border-top: 5px #b3d7ff solid;border-radius:30px;">
            <div style="width: 90%;float: left" class="grid-container" v-for="(item,index) in question_data"
                 v-if="index==turn">
                <button style="width:450px;height:85px;" type="button" class="btn btn-primary"
                        v-for="(data,ind) in item.answer" @click="addAnswer(data,ind,index)">
                    {{data.name}}
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
                            <div class="modal-body">
                                Đáp án chưa chính xác
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
                                 style="width: 500px;height: 500px;font-size: 30px;text-align: center">
                                Đáp án chính xác
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
                <button style="width:120px;height:50px;margin-bottom:20px;" type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalCenter"
                        @click="addPoint">
                    Kết quả
                </button>
                <button style="width:120px;height:50px;" type="button" class="btn btn-danger" @click="next">
                    {{this.continute}} >>
                </button>
                <!--                <div style="border:1px yellowgreen solid;width:100px;height:50px;text-align: center;background-color: #1f6fb2;" @click="next">-->
                <!--                   <p style="margin-top:15%;font-weight: bold">{{this.continute}} >></p>-->
                <!--                </div>-->
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
        props: ['question'],
        name: "question",
        data: function () {
            return {
                reset: false,
                turn: 0,
                teamAct: undefined,
                team1: 0,
                team2: 0,
                team3: 0,
                time: 60,
                time_start: false,
                question_data: undefined,
                continute: "Kế tiếp",
                restart: undefined,
                disable: undefined,
                current_answer: undefined,
                success: false,
                tinker: false,
                answer: undefined,
                ind: undefined,
                index: undefined,
                hidden:true
            };
        },
        created() {
            this.tinker = false
            this.answer = undefined
        },
        mounted() {
            this.question_data = this.question
        },
        methods: {
            addAnswer(answer, ind, index) {
                console.log(3)
                if(this.teamAct != undefined){
                    this.answer = answer
                    this.ind = ind
                    this.index = index
                }
            },
            next() {
                this.answer = undefined
                this.ind = undefined
                this.index = undefined
                this.success = false
                if (this.turn < this.question_data.length - 1) {
                    this.turn = this.turn + 1
                    if (this.turn = this.question_data.length - 1) {
                        this.continute = " Kết thúc"
                    }
                }
                this.teamAct = undefined
            },
            playsound() {
                var audio = new Audio('/sound/votay.mp3') // path to file
                audio.play()
            },
            activePoint(team) {
                this.teamAct = team
                this.ads = true
            },
            addPoint() {
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
        }
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
</style>
