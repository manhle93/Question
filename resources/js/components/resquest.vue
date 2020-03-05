<template>
  <div
    style="height: 100%; width: 100%; overflow-y:hidden;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1583422247/hoithi/Presentation1_lzbioa_vhg2oz.jpg');background-size:100% 100%;  overflow-x:hidden;"
  >
    <div style="height: 100%; width: 100%; overflow-y:hidden;" v-if="hidden== true">
      <div class="full-width">
        <div
          style="background-color:#F0F3F4;width: 100%;font-weight: bold; height: 100%; text-align: center;font-size: 50px;padding-top: 50px;"
        >
          <!-- <img src="anh/logovuong.png"
          style="width: 150px; height: 120px; padding-bottom: 25px">-->

          <h4
            style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: black"
          >KẾT QUẢ THI</h4>
          <div class="col-md-10" style="margin: auto; margin-top: 100px">
            <div class="row">
              <div
                style="background-color: #21618C;border-radius: 10px; width: 250px; height: 200px; margin: auto; text-align: center;"
              >
                <p
                  style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                >ĐỘI 1</p>
                <p
                  style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                >{{this.team1}}</p>
              </div>
              <div
                style="background-color: #CB4335;border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center"
              >
                <p
                  style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                >ĐỘI 2</p>
                <p
                  style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                >{{this.team2}}</p>
              </div>
              <div
                style="background-color: #239B56; border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center"
              >
                <p
                  style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                >ĐỘI 3</p>
                <p
                  style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                >{{this.team3}}</p>
              </div>
            </div>
            <br />
            <br />
            <br />
            <div class="row">
              <button
                type="button"
                style="margin: auto; font-size: 18px;height: 100px; background-color:#F5B041; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color: black"
                class="btn btn-dark"
                @click="chongoi"
              >TIẾP TỤC</button>
              <button
                type="button"
                style="margin: auto; background-color:#3498DB; font-size: 18px;height: 100px; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color:black"
                class="btn btn-dark"
                @click="resetContinute"
              >LƯỢT CHƠI MỚI</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      v-if="hidden== false"
      style="height: 100%; width: 100%; overflow-y:hidden; overflow-x:hidden;"
      >
      <div class="row" style="margin: 0 auto; margin-top: 15px;height: 5%; margin-bottom: 70px;">
        <div class="col-md-3" style="margin: 0 auto; cursor: pointer;">
          <div
            @click="runTime"
            v-bind:class="{'bor-max-height':height_a,'bor-min-height':height_b}"
            class="row"
            style="margin: auto; margin-top: 10px; cursor: pointer;"
          >
            <div
              style="padding-top:55px;width: 210px; height: 210px; margin-left:25px; text-align:center;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575541417/hoithi/dongho_mv6mjb.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;"
            >{{totalTime }}</div>
          </div>
        </div>
        <div
          class="col-md-9"
          style="margin: 0 auto;color: black; font-family: 'Garamond';font-weight: bold; font-size: 60px; text-align:center"
        >
          <span style=" color: red;">PHẦN THI</span>
          <span
            style="color: #03289C; padding-left: 20px; padding-right: 20px; border: 2px solid black; border-radius: 50px; background-color:#adf"
          >TRẮC NGHIỆM</span>
        </div>
      </div>
      <div class="row" style="margin-top: 10px;height: 90%">
        <div class="col-md-3" style="padding-top: 150px;">
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct!=1"
              class="point-width"
              style="border: 2px solid black;background-color: #28B463; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                v-bind:class="{'teampoint-fullwidth': height_a,'teampoint-width':height_b}"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px"
              >{{this.team1}}</div>
            </div>
            <img
              v-if="teamAct==1"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />
            <div
              style="background-color: #28B463; margin-top: 10px;text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 2px solid black; border-radius: 5px; cursor: pointer;"
              @click="activePoint(1)"
              v-bind:class="{boder:teamAct==1}"
              class="team-min-height"
            >ĐỘI 1</div>
            <!-- <div v-if="teamAct==1"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541416/hoithi/bell2_v3bat1.gif"
                                                    style="width: 60px; height: 60px;margin-top: 15px; margin-left: 0px;object-fit: fill"/>
            </div>-->
          </div>
          <br />
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct!=2"
              class="point-width"
              style="border: 2px solid black;background-color: #C0392B ; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                v-bind:class="{'teampoint-fullwidth': height_a,'teampoint-width':height_b}"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px; padding-top: 10px"
              >{{this.team2}}</div>
            </div>
            <img
              v-if="teamAct==2"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />
            <div
              style="cursor: pointer; background-color: #C0392B ;background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 2px solid black; border-radius: 5px"
              @click="activePoint(2)"
              v-bind:class="{boder:teamAct==2}"
              class="team-min-height"
            >ĐỘI 2</div>
          </div>
          <br />
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct!=3"
              class="point-width"
              style="border: 2px solid black;background-color: #D4AC0D; margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                class="teampoint-width"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px"
              >{{this.team3}}</div>
            </div>
            <img
              v-if="teamAct==3"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />

            <div
              style="cursor: pointer; background-color: #D4AC0D;background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; color: white; border: 2px solid black; border-radius: 5px"
              @click="activePoint(3)"
              v-bind:class="{boder:teamAct==3}"
              class="team-min-height"
            >ĐỘI 3</div>
          </div>
          <br />
          <div
            class="row"
            @click="chonKhanGia"
            style="margin: auto; margin-left:30px; cursor: pointer"
          >
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583167257/hoithi/undraw_fans_gr54__1_-removebg-preview_asoeo2.png"
              style="height: 100px; width: auto"
              v-if="!khanGia"
            />
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583167255/hoithi/source_ltzcjy.gif"
              style="height: 100px; width: auto"
              v-if="khanGia"
            />
          </div>
          <!-- <div v-bind:class="{'bor-max-height':height_a,'bor-min-height':height_b}" class="row"
                         style="margin: auto; margin-top: 10px; " @click="runTime">
                        <div
                            style="padding-top:55px;width: 210px; height: 210px; margin:auto; text-align:center;background-image:url('/anh/dongho.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;">
                            {{totalTime }}
                        </div>
          </div>-->
          <div class="col-md-12" style="margin-top:50px;">
            <button
              style="font-weight: bold; font-family: 'time new roman'; float: left"
              type="button"
              class="btn btn-success"
              data-toggle="modal"
              data-target="#exampleModalCenter"
              @click="addPoint"
              v-bind:class="{'btn-max-height': height_a}"
            >KẾT QUẢ</button>
            <button
              style="font-family: 'time new roman'; float: right"
              type="button"
              class="btn btn-danger"
              @click="next"
              v-bind:class="{'btn-max-height': height_a}"
            >{{this.continute}}</button>
          </div>
        </div>
        <div class="col-md-9" style="margin: 0 auto; text-align:center">
          <div class="row" style="margin: 0 auto; text-align:center">
            <div class="col-md-12" style="margin: 0 auto; margin-bottom: 10px; ">
              <button
                type="button"
                class="btn btn-warning"
                v-if="packageDetail"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 18 px; background: #094EAB; border-radius: 50px"
              >
                CÁC CÂU HỎI
                <!-- GÓI
                CÂU HỎI SỐ: {{this.packageDetail.name}}-->
              </button>
              <button
                style="background-color:#094EAB;width:40px;height:40px;margin-right:10px;font-weight: bold;border-radius:50%; border: 2px solid white"
                type="button"
                class="btn btn-primary"
                v-for="(item,index) in question_data"
                v-bind:key="item.id"
                @click="change_question(index)"
                v-bind:class="{'red':index <= turn}"
              >
                <p>
                  <span style="color: white;">{{index+1}}</span>
                </p>
              </button>
            </div>
            <div
              class="col-md-12 min-height"
              v-if="question_data.length > 0 &&check"
              style="margin-top: 20px;display: inline-block; border: 6px double white; border-radius: 10px;background-image: linear-gradient(to right, #3A7AEE, #072B6C, #052660, #0745B5, #266EEF);background-size:100% 100%; "
            >
              <div
                v-for="(item,index) in question_data"
                v-bind:key="item.id"
                v-if="index==turn"
                style="color: white;font-size: 28px;"
              >
                <div style="color: white; font-family:'time new roman'; font-weight: bold;">
                  Câu {{index
                  +1}}
                </div>
                <p
                  style="font-family:'time new roman';font-size: 29px; opacity: 1 !important"
                >{{item.name}}</p>
              </div>
            </div>
            <div
              class="col-md-12"
              v-if="question_data.length > 0 && !check"
              style="display: inline-block; height: 320px"
            >
              <div
                v-for="(item,index) in question_data"
                v-bind:key="item.id"
                v-if="index==turn"
                style="color: white;font-size: 28px;"
              >
                <div>
                  <span style="color: white; font-family:'time new roman'; font-weight: bold;">
                    Câu {{index
                    +1}}
                  </span>
                  <span
                    style="font-family:'time new roman';font-size: 29px; opacity: 1 !important"
                  >{{item.name}}</span>
                </div>
                <div>
                  <img :src="item.image_url" style="height: 86%; width: 86%" />
                </div>
              </div>
            </div>
            <div class="col-md-12" style="height: 100%;margin-top: 20px">
              <div>
                <div
                  style="width: 100%;float: left; background-color: #ffffff00"
                  class="grid-container"
                  v-for="(item,index) in question_data"
                  v-bind:key="item.id"
                  v-if="index==turn"
                >
                  <button
                    style="border-radius: 40px; width:32vw; font-family:'time new roman';color:white; font-weight: bold;font-size: 20px; background-image: linear-gradient(to right, #072B6C,#052660, #0745B5);background-size:100% 100%; border: 2px solid white"
                    type="button"
                    class="btn btn-primary answer-min-height"
                    v-for="(data,ind) in item.answer"
                    @click="addAnswer(data,ind,index)"
                    v-bind:key="data.id"
                    v-bind:class="{'ind--0':ind === onclick}"
                  >
                    <!-- <div
                      style="color: white; margin-left: 20px; margin-bottom: 20px; float: left; font-weight: bold; font-size: 42px; border: 5px solid white; background-color: #066F4D; width: 100px; height: 100px; border-radius: 50%; line-height: 90px"
                    >{{data.phuong_an}}</div> -->
                    <div style="float: left; color: red">{{data.phuong_an}}: </div>
                    <span>{{data.name}}</span>
                  </button>
                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="tinker == false && teamAct !=undefined"
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 500px;font-size: 30px;text-align: center"
                        >
                          <img
                            src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541419/hoithi/sai_huda9l.gif"
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2 style="font-family:'time new roman'; font-weight: bold;">
                            KHÔNG
                            CHÍNH XÁC
                          </h2>
                          <p>+ 0</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="tinker == true && teamAct != undefined "
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 450px;font-size: 30px;text-align: center"
                        >
                          <img
                            src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/dung_xaymtk.gif"
                            style="width: 350px;height: 300px;"
                          />
                          <br />

                          <h2 style="font-family:'time new roman'; font-weight: bold;">
                            ĐÁP ÁN
                            CHÍNH XÁC
                          </h2>
                          <p>+ 10</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="tinker == false && khanGia == true"
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 500px;font-size: 30px;text-align: center"
                        >
                          <img
                            src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541419/hoithi/sai_huda9l.gif"
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2 style="font-family:'time new roman'; font-weight: bold;">
                            KHÔNG
                            CHÍNH XÁC
                          </h2>
                          <p>+ 0</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="tinker == true && khanGia == true"
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 450px;font-size: 30px;text-align: center"
                        >
                          <img
                            src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/dung_xaymtk.gif"
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2 style="font-family:'time new roman'; font-weight: bold;">
                            ĐÁP ÁN
                            CHÍNH XÁC
                          </h2>
                          <p>+ 10</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min";
import Vue from "vue";
import CircularCountDownTimer from "vue-circular-count-down-timer";

Vue.use(CircularCountDownTimer);
import vueAwesomeCountdown from "vue-awesome-countdown";

Vue.use(vueAwesomeCountdown, "vac");

export default {
  props: ["question", "old_id"],
  name: "question",
  data: function() {
    return {
      khanGia: false,
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
      question_data: [],
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
    this.tinker = false;
    this.answer = undefined;
  },
  mounted() {
    if (window.innerHeight >= 667) {
      this.height_a = true;
      this.height_b = false;
    } else {
      this.height_a = false;
      this.height_b = true;
    }
    axios.get("/getdetailpackage/" + this.old_id).then(res => {
      this.packageDetail = res.data.result;
    });
    axios.get("/gettotalpoint/" + this.old_id).then(res => {
      var data = res.data.result;
      this.team1 = data.total_point1;
      this.team2 = data.total_point2;
      this.team3 = data.total_point3;
    });
    this.question_data = this.question;
    this.timer = setInterval(() => this.countdown(), 1000);
    this.stopTimer();
    this.resetButton = true;
    this.question_data.forEach(el => {
      el.answer.forEach((item, index, arr) => {
        if (index == 0) {
          arr[index].phuong_an = "A";
        }
        if (index == 1) {
          arr[index].phuong_an = "B";
        }
        if (index == 2) {
          arr[index].phuong_an = "C";
        }
        if (index == 3) {
          arr[index].phuong_an = "D";
        }
      });
    });
  },
  computed: {
    check() {
      if (this.question_data[this.turn].image_url) {
        console.log(1);
        return false;
      } else {
        console.log(2);
        return true;
      }
    },
    minutes: function() {
      const minutes = Math.floor(this.totalTime / 60);
      return this.padTime(minutes);
    },
    seconds: function() {
      const seconds = this.totalTime - this.minutes * 60;
      return this.padTime(seconds);
    }
  },
  methods: {
    chonKhanGia() {
      this.khanGia = !this.khanGia;
    },
    change_question(index) {
      this.turn = index;
      this.success = false;
    },
    runTime() {
      if (this.loading == false) {
        this.startTimer();
        this.loading = true;
      } else {
        this.stopTimer();
        this.loading = false;
      }
    },
    startTimer: function() {
      this.playSoundTickTock();
      this.timer = setInterval(() => this.countdown(), 1000);
      this.resetButton = true;
    },
    stopTimer: function() {
      if (this.statusaudio == true) {
        this.audiodongho.pause();
      }
      clearInterval(this.timer);
      this.timer = null;
      this.resetButton = true;
    },
    resetTimer: function() {
      if (this.statusaudio == true) {
        this.audiodongho.pause();
      }
      this.totalTime = 10;
      clearInterval(this.timer);
      this.timer = null;
      this.resetButton = false;
    },
    padTime: function(time) {
      return (time < 10 ? "0" : "") + time;
    },
    countdown: function() {
      if (this.totalTime >= 1) {
        this.totalTime--;
      } else {
        this.totalTime = 0;
        this.resetTimer();
      }
    },
    addAnswer(answer, ind, index) {
      this.onclick = ind;
      // if (this.teamAct != undefined) {
      this.answer = answer;
      this.ind = ind;
      this.index = index;
      // }
      this.mauvang = !this.mauvang;
    },
    next() {
      this.khanGia = false;
      this.loading = false;
      this.onclick = undefined;
      this.answer = undefined;
      this.ind = undefined;
      this.index = undefined;
      this.success = false;
      this.isLoading = true;
      if (this.turn < this.question_data.length - 1) {
        this.turn = this.turn + 1;
        if (this.turn == this.question_data.length - 1) {
          this.continute = " KẾT THÚC";
        }
      } else {
        this.hidden = true;
      }
      this.totalTime = 10;
      this.resetTimer();
      this.teamAct = undefined;
    },
    playsound() {
      var audio = new Audio("/sound/dung.mp3"); // path to file
      audio.play();
      var audio = new Audio("/sound/votay.mp3"); // path to file
      audio.play();
    },
    playSoundError() {
      var audio = new Audio("/sound/sai.mp3"); // path to file
      audio.play();
    },
    playSoundTickTock() {
      this.audiodongho = new Audio("/sound/ticktock.mp3");
      this.statusaudio = true;
      this.audiodongho.play();
    },
    activePoint(team) {
      this.khanGia = false;
      if (this.teamAct == team && this.teamAct != undefined) {
        this.teamAct = undefined;
        this.time_start = false;
        this.stopTimer();
        this.border = !this.border;
        this.loading = false;
      } else if (this.teamAct == undefined) {
        this.teamAct = team;
        this.time_start = true;
        if (this.loading == false) {
          this.startTimer();
        } else {
          this.stopTimer();
        }
        this.border = !this.border;
        this.loading = true;
      } else if (this.teamAct != team && this.teamAct != undefined) {
        this.teamAct = team;
        this.loading = true;
        this.border = !this.border;
      } else {
        this.teamAct = team;
        this.ads = true;
        this.time_start = false;
        this.loading = false;
        this.stopTimer();
      }
    },
    addPoint() {
      this.onclick = undefined;
      if (this.teamAct != undefined) {
        if (this.success == false) {
          if (this.current_answer == undefined) {
            this.current_answer = this.answer;
            if (this.answer.dap_an == 1) {
              this.tinker = true;
              if (this.teamAct == 1) {
                this.team1 = this.team1 + 10;
              }
              if (this.teamAct == 2) {
                this.team2 = this.team2 + 10;
              }
              if (this.teamAct == 3) {
                this.team3 = this.team3 + 10;
              }
              this.success = true;
              this.question_data[this.index].answer = [this.answer];
              this.playsound();
              this.isLoading = false;
            } else {
              this.tinker = false;
              this.playSoundError();
              // this.question_data[this.index].answer.splice(this.ind, 1)
            }
          } else {
            if (this.current_answer !== this.answer) {
              this.current_answer = this.answer;
              if (this.answer.dap_an == 1) {
                this.tinker = true;
                if (this.teamAct == 1) {
                  this.team1 = this.team1 + 10;
                }
                if (this.teamAct == 2) {
                  this.team2 = this.team2 + 10;
                }
                if (this.teamAct == 3) {
                  this.team3 = this.team3 + 10;
                }
                this.success = true;
                this.question_data[this.index].answer = [this.answer];
                this.playsound();
                this.isLoading = false;
              } else {
                this.tinker = false;
                this.playSoundError();
                // this.question_data[this.index].answer.splice(this.ind, 1)
              }
            }
          }
          this.hidden == false;
        }
      } else if (this.khanGia) {
        if (this.success == false) {
          if (this.current_answer == undefined) {
            this.current_answer = this.answer;
            if (this.answer.dap_an == 1) {
              this.tinker = true;
              this.success = true;
              this.question_data[this.index].answer = [this.answer];
              this.playsound();
              this.isLoading = false;
              // this.khanGia = false
            } else {
              this.tinker = false;
              this.playSoundError();
              // this.question_data[this.index].answer.splice(this.ind, 1)
            }
          } else {
            if (this.current_answer !== this.answer) {
              this.current_answer = this.answer;
              if (this.answer.dap_an == 1) {
                this.tinker = true;
                this.success = true;
                this.question_data[this.index].answer = [this.answer];
                this.playsound();
                this.isLoading = false;
                // this.khanGia = false
              } else {
                this.tinker = false;
                this.playSoundError();
                // this.question_data[this.index].answer.splice(this.ind, 1)
              }
            }
          }
          this.hidden == false;
        }
      }
    //   this.activePoint(this.teamAct);
    },
    timeStart() {
      return restart;
    },
    chongoi() {
      axios
        .post("/updatepoint/" + this.old_id, {
          point1: this.team1,
          point2: this.team2,
          point3: this.team3
        })
        .then(res => {
          window.location.href = "/getallpackge/" + this.old_id;
        });
    },
    resetContinute() {
      axios.post("/resetpoint/" + this.old_id).then(res => {
        window.location.href = "/getallpackge/" + this.old_id;
      });
    }
  }
};
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
  background-image: url("https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/nenchoncautraloi_id0eza.jpg") !important;
  color: blue;
  font-weight: bold;
}

#seconds {
  font-size: 55px;
  line-height: 1;
  font-weight: bold;
}

.boder {
  border: 4px white solid;
}

.red {
  background-color: #c12701 !important;
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
.teampoint-width {
  padding-top: 15px;
}
</style>
