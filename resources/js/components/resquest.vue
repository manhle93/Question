<template>
    <div style="height: 100%; width: 100%; overflow-y:hidden;background-color: aqua;">
        <div style="width: 100%; height: 50%;padding-left:7%;padding-right:7%;padding-top:2%;">
            <div class="point" style="width: 100%; height: 15%;margin-bottom: 8%;">
                <div style="width: 50%; height:100%;float:left;">
                    <div
                        style="background-color: #1d68a7;width: 15%;height: 50px;margin-left:5%;border-radius:7px;float: left;color: white;"
                        @click="activePoint(1)">
                    </div>
                    <div
                        style="background-color: green;width: 15%;height: 50px;margin-left:2%;border-radius:7px;float: left;color: white;"
                        @click="activePoint(2)">
                    </div>
                    <div
                        style="background-color: red;width: 15%;height: 50px;margin-left:2%;border-radius:7px;float: left;color: white;"
                        @click="activePoint(3)">
                    </div>
                    <circular-count-down-timer
                        :size="120"
                        :stroke-width="5"
                        :seconds-stroke-color="'#f00'"
                        :padding="4"
                        :second-label="''"
                        :show-second="true"
                        :initial-value="60"
                        :steps="60"
                        :seconds-fill-color="'#00ffff66'"
                        :paused="time_start"
                        style="text-align: center;"
                    ></circular-count-down-timer>
                </div>
                <div style="width: 50%; height:100%;float:left;">
                    <div
                        style="border: 5px solid #ffc002;width: 100%;height: 150px;margin-left:2%;border-radius:7px;float: left;text-align:center;background-color:#d12d3d;">
                        <h2 style="margin-top: 10px;">CÔNG ĐOÀN XÂY DỰNG VIỆT NAM</h2>
                        <p>-------------------------______----------------------</p>
                        <P style="font-size:20px;">Hội thi an toàn vệ sinh viên giỏi toàn quốc ngành xây dựng</P>
                    </div>
                </div>
            </div>
            <div class="request"
                 style="width: 100%; height: 85%;background-image: url('/anh/khung_dichvu.png');background-size:100% 100%;padding-left: 10%;padding-top:5%">
                <div style="width: 90%; height: 75%;background-color: red;border-radius:7px;">
                    <p v-if="index==1">

                    </p>
                    <p v-if="index==2">

                    </p>
                    <p v-if="index==3">

                    </p>
                    <p v-if="index==4">

                    </p>
                    <p v-if="index==5">

                    </p>
                    <p v-if="index==6">

                    </p>
                    <p v-if="index==7">

                    </p>
                    <p v-if="index==8">

                    </p>
                    <p v-if="index==9">

                    </p>
                    <p v-if="index==10">

                    </p>
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 50%; margin-top: 7%;padding-left:10%;padding-bottom: 5%; border-top: 3px white solid;">
           <div style="width: 90%;float: left"  class="grid-container">
               <div class="grid-item" style="width: 450px; height: 85px;border: 3px yellow double;border-radius:10px;background-color: rgb(221, 73, 6);text-align: center;color: white">
                   <p>aaaaaaaaaaa</p>
               </div>
               <div class="grid-item" style="width: 450px; height: 85px;border: 3px yellow double;border-radius:10px;background-color: rgb(221, 73, 6);text-align: center;color: white">
                   <p>aaaaaaaaaaa</p>
               </div>
               <div class="grid-item" style="width: 450px; height: 85px;border: 3px yellow double;border-radius:10px;background-color: rgb(221, 73, 6);text-align: center;color: white">
                   <p>aaaaaaaaaaa</p>
               </div>
               <div class="grid-item" style="width: 450px; height: 85px;border: 3px yellow double;border-radius:10px;background-color: rgb(221, 73, 6);text-align: center;color: white">
                   <p>aaaaaaaaaaa</p>
               </div>
           </div>
            <div style="width: 10%;float: left;margin-top:5%;">
                <div style="border:1px yellowgreen solid;width:100px;height:50px;text-align: center;background-color: #1f6fb2;" >
                   <p style="margin-top:15%;font-weight: bold">Kế tiếp >></p>
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

    export default {
        name: "resquest",
        data: function () {
            return {
                index: undefined,
                teamAct: undefined,
                team1: 0,
                team2: 0,
                team3: 0,
                time: 3,
                time_start:false,
            };
        },
        methods: {
            playsound() {
                var audio = new Audio('/sound/votay.mp3') // path to file
                audio.play()
            },
            activePoint(team) {
                this.time_start=!this.time_start
                this.teamAct = team
            },
            addPoint() {
                if (this.teamAct == 1) {
                    this.team1 = this.team1 + 10
                }
                if (this.teamAct == 2) {
                    this.team2 = this.team2 + 10
                }
                if (this.teamAct == 3) {
                    this.team3 = this.team3 + 10
                }
            },
            timeStart() {
                console.log(111)

            },
        }
    }
</script>

<style scoped>
    .grid-container {
        display: grid;
        grid-column-gap: 50px;
        grid-row-gap:10px;
        grid-template-columns: auto auto;
        padding: 10px;
        clear: both;
    }
</style>
